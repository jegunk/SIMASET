<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Controllerlib
	{
		public function __construct()
		{
			$this->CI =& get_instance();
		}
		
		public function cek_permission($tipe = 'view')
		{
			$id_userlevel = $this->CI->session->userdata("id_userlevel");
			
			$segs = $this->CI->uri->segment_array();
			if(count($segs)==1)
			{
				$arr = $segs[1];
			}
			else
			{
				$arr = $segs[1]."/".$segs[2];
			}
			$data_menu = $this->CI->db->select("id_menu, judul_menu")->from("main_menu")->where("url",$arr)->get()->row();
			if($data_menu)
			{
				$id_menu = $data_menu->id_menu;
				$data_permission = $this->CI->db->select($tipe." AS akses")->from("main_user_permission")->where(array("id_menu"=>$id_menu,"id_userlevel"=>$id_userlevel))->get()->row();
				if($data_permission)
				{
					if($data_permission->akses == 'T')
					{
						$this->CI->session->set_flashdata(array("tipe" => "danger", "msg" => "Anda tidak berhak mengakses halaman " . $data_menu->judul_menu));
						redirect ('beranda');
					}
					else
					{
						return true;
					}
				}
				else
				{
					$this->CI->session->set_flashdata(array("tipe" => "danger", "msg" => "Anda tidak berhak mengakses halaman " . $data_menu->judul_menu));
					redirect ('beranda');
				}
			}
			else
			{
				show_404();
			}
		}
	}
?>