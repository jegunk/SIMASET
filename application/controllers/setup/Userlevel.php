<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Userlevel extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("setup/Userlevel_model");
			$this->template->jsfile = "setup/userlevel";
			$this->controllerlib->cek_permission('view');
		}
		
		function index()
		{
			$this->template->view('setup/userlevel/list');
		}
		
		function getList()
		{
			$list = $this->Userlevel_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->userlevel."<a href='".base_url()."index.php/setup/userlevel/edit/".$field->id_userlevel."' class='btn btn-default btn-sm pull-right'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->Userlevel_model->count_all(),
				"recordsFiltered" => $this->Userlevel_model->count_filtered(),
				"data" => $data,
			);
			//output dalam format JSON
			echo json_encode($output);
		}

		function add() 
		{
			$this->controllerlib->cek_permission('add');
			if(!isset($_POST['submit']))
			{
				$data['disabled'] = "";
				$data['menu'] = $this->Userlevel_model->getAllMenu();
				$this->template->view('setup/userlevel/add',$data);
			}
			else
			{	
				$id_userlevel = $this->input->post("id_userlevel");
				$nama = $this->input->post("nama");
				
				$id_menu = $this->input->post("id_menu");
				$add = $this->input->post("add");
				$view = $this->input->post("view");
				$edit = $this->input->post("edit");
				$delete = $this->input->post("delete");
				
				$this->Userlevel_model->insertNewLevel($id_userlevel,$nama);
					
				for($x=0;$x<count($id_menu);$x++)
				{
					$this->Userlevel_model->insertNew($id_menu[$x],$id_userlevel);
				}
				
				for($a=0;$a<count($add);$a++)
				{
					$this->Userlevel_model->saveUpdateAdd($id_userlevel,$add[$a]);
				}
				for($v=0;$v<count($view);$v++)
				{
					$this->Userlevel_model->saveUpdateView($id_userlevel,$view[$v]);
				}
				for($e=0;$e<count($edit);$e++)
				{
					$this->Userlevel_model->saveUpdateEdit($id_userlevel,$edit[$e]);
				}
				for($d=0;$d<count($delete);$d++)
				{
					$this->Userlevel_model->saveUpdateDelete($id_userlevel,$delete[$d]);
				}
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('setup/Userlevel');
			}
		}
		
		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			if(!isset($_POST['submit']))
			{
				$id = $this->uri->segment(4);
				$data['disabled'] = "";
				$data['header'] = $this->Userlevel_model->getHeader($id);
				if($data['header'])
				{
					$data['detail'] = $this->Userlevel_model->getDetail($id);
					$this->template->view('setup/userlevel/detail',$data);
				}
				else
				{
					$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
					redirect ('setup/Userlevel');
				}
			}
			else
			{
				$id_userlevel = $this->input->post("id_userlevel");
				$nama = $this->input->post("nama");
				
				$id_menu = $this->input->post("id_menu");
				$add = $this->input->post("add");
				$view = $this->input->post("view");
				$edit = $this->input->post("edit");
				$delete = $this->input->post("delete");
				$id_permission = $this->input->post("id_permission");
				
				$this->Userlevel_model->saveUpdateLevel($id_userlevel,$nama);
					
				for($x=0;$x<count($id_menu);$x++)
				{
					$adamenu = $this->Userlevel_model->cekAdaMenu($id_menu[$x],$id_userlevel)->jumlah;
					
					if($adamenu <= 0)
					{
						$this->Userlevel_model->insertNew($id_menu[$x],$id_userlevel);
					}
					else
					{
						$this->Userlevel_model->saveUpdateReset($id_permission[$x]);
					}
				}
				
				for($a=0;$a<count($add);$a++)
				{
					$this->Userlevel_model->saveUpdateAdd($id_userlevel,$add[$a]);
				}
				for($v=0;$v<count($view);$v++)
				{
					$this->Userlevel_model->saveUpdateView($id_userlevel,$view[$v]);
				}
				for($e=0;$e<count($edit);$e++)
				{
					$this->Userlevel_model->saveUpdateEdit($id_userlevel,$edit[$e]);
				}
				for($d=0;$d<count($delete);$d++)
				{
					$this->Userlevel_model->saveUpdateDelete($id_userlevel,$delete[$d]);
				}
				
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('setup/Userlevel');
			}
		}
		
		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$id_userlevel = $this->uri->segment(4);
			
			if($id_userlevel)
			{
				$this->Userlevel_model->delete($id_userlevel);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('setup/Userlevel');
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Gagal."));
				redirect ('setup/Userlevel?message=noparam');
			}
		}
		
	}
?>