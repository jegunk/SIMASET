<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Menu_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function getJenisMenu()
		{
			return $this->db->select("*")
							->from("main_jenis_menu")
							->order_by("id_jenis_menu","ASC")
							->get()
							->result_array();
		}
		
		function getParentMenu()
		{
			return $this->db->select("*")
							->from("main_menu")
							->where("id_jenis_menu","0")
							->order_by("posisi","ASC")
							->get()
							->result_array();
		}
		
		function getNewPosition($parent = NULL)
		{
			if($parent!=NULL || $parent!='')
			{
				return $this->db->select("MAX(posisi)+1 AS posisi")
								->from("main_menu")
								->where("id_parent_menu",$parent)
								->get()
								->row();
							}
			else
			{
				return $this->db->select("MAX(posisi)+1 AS posisi")
								->from("main_menu")
								->where("id_jenis_menu","0")
								->get()
								->row();
			}
		}
		
		function getMenu($id = NULL)
		{
			$this->db->select("*")
					->from("main_menu");
			if($id != NULL)
			{
				$this->db->where("id_menu",$id);
			}
			return $this->db->order_by("posisi","ASC")
							->get()
							->result_array();
		}
		
		function getSubMenu($id_menu)
		{
			return $this->db->select("a.id_menu,a.id_jenis_menu,a.id_parent_menu,a.judul_menu,a.url,a.posisi,a.id_status_menu,b.status_menu")
							->from("main_menu a")
							->join("main_status_menu b","a.id_status_menu=b.id_status_menu")
							->where("a.id_parent_menu ",$id_menu)
							->order_by("a.posisi","ASC")
							->get()
							->result_array();
		}
		
		function getPosition($jenismenu = NULL,$parentmenu = NULL)
		{
			$this->db->select("posisi,id_menu,judul_menu")
						->from("main_menu")
						->where("id_menu",$jenismenu);
			if($parentmenu != NULL)
			{
				$this->db->where("id_parent_menu",$parentmenu);
			}
			return $this->db->order_by("posisi","ASC")
							->get()
							->row();
		}
		
		function getStatus()
		{
			return $this->db->get("main_status_menu")->result_array();
		}
		
		function saveNew($jenis,$judul,$url,$parent,$posisi,$status)
		{
			$table = "main_menu";
			$data = array("id_jenis_menu"=>$jenis, "id_parent_menu"=>$parent,"judul_menu"=>$judul,"url"=>$url,"posisi"=>$posisi,"id_status_menu"=>$status);
			$this->db->insert($table,$data);
		}
		
		function saveUpdate($id_menu,$jenis,$parent,$judul,$url,$status,$posisi)
		{
			$table = "main_menu";
			$data = array("id_jenis_menu"=>$jenis, "id_parent_menu"=>$parent,"judul_menu"=>$judul,"url"=>$url,"posisi"=>$posisi,"id_status_menu"=>$status);
			$clause = array("id_menu"=>$id_menu);
			$this->db->update($table,$data,$clause);
		}
		
		function Delete($id_menu)
		{
			$table1 = "main_user_permission";
			$clause1 = array("id_menu"=>$id_menu);
			$this->db->delete($table1,$clause1);
			
			$table = "main_menu";
			$clause = array("id_menu"=>$id_menu);
			$this->db->delete($table,$clause);
		}
	}
?>