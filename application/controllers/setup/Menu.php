<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Menu extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->controllerlib->cek_permission('view');
			$this->load->model('setup/Menu_model');
			$this->template->jsfile = 'setup/menu';
		}
		
		function index()
		{
			$data['jenismenu'] = $this->Menu_model->getJenisMenu();
			$data['status'] = $this->Menu_model->getStatus();
			$data['parent'] = $this->Menu_model->getParentMenu();
			$this->template->view('setup/menu/tree',$data);
		}
		
		function add()
		{
			$this->controllerlib->cek_permission('add');
			if(isset($_POST['submit']))
			{
				$jenis = $this->input->post('jenis');
				$judul = $this->input->post('judul');
				$url = $this->input->post('url');
				$parent = $this->input->post('parent');
				$posisi = $this->input->post('posisi');
				$status = $this->input->post('status');
				
				if($parent=='')
				{
					$parent = NULL;
				}
				
				if(($posisi == NULL || $posisi == '') && $jenis == 0)
				{
					$posisi = $this->Menu_model->getNewPosition($parent)->posisi;
					if($posisi == null)
					{
						$posisi = 1;
					}
				}
				
				$this->Menu_model->saveNew($jenis,$judul,$url,$parent,$posisi,$status);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect('setup/menu');
			}
			else
			{
				$data['jenismenu'] = $this->Menu_model->getJenisMenu();
				$data['status'] = $this->Menu_model->getStatus();
				$data['parent'] = $this->Menu_model->getParentMenu();
				$data['disabled'] = "";
				$this->template->view('setup/menu/add',$data);	
			}
		}
		
		function view()
		{
			$this->controllerlib->cek_permission('view');
			$id = $this->uri->segment(4);
			if($id != '' && $id!=NULL)
			{
				$menu = $this->Menu_model->getMenu($id);
				if(count($menu) > 0)
				{
					$data['menu'] = $menu;
					$data['jenismenu'] = $this->Menu_model->getJenisMenu($id);
					$data['submenu'] = $this->Menu_model->getSubMenu($id);
					$data['posisi'] = $this->Menu_model->getPosition($menu[0]['id_menu'],$menu[0]['id_parent_menu']);
					$data['status'] = $this->Menu_model->getStatus();
					$data['parent'] = $this->Menu_model->getParentMenu();
					$data['disabled'] = "disabled='disabled'";
					$this->template->view("setup/menu/view",$data);
				}
				else
				{
					$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
					redirect("setup/menu");
				}	
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect('setup/menu');
			}
		}
		
		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			if(isset($_POST['submit']))
			{
				$id_menu = $this->input->post('id_menu');
				$jenis = $this->input->post('jenis');
				$judul = $this->input->post('judul');
				$url = $this->input->post('url');
				$status = $this->input->post('status');
				$parent = $this->input->post('parent');
				$posisi = $this->input->post('posisi');
				
				if($jenis == 0 || $parent=='' || !isset($parent))
				{
					$parent = NULL;
				}
				
				$this->Menu_model->saveUpdate($id_menu,$jenis,$parent,$judul,$url,$status,$posisi);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect("setup/menu");
			}
			else
			{
				$id = $this->uri->segment(4);
				$id = $id;
				if($id != '' && $id!=NULL)
				{
					$menu = $this->Menu_model->getMenu($id);
					if(count($menu) > 0)
					{
						$data['menu'] = $menu;
						$data['jenismenu'] = $this->Menu_model->getJenisMenu($id);
						$data['submenu'] = $this->Menu_model->getSubMenu($id);
						$data['posisi'] = $this->Menu_model->getPosition($menu[0]['id_menu'],$menu[0]['id_parent_menu']);
						$data['status'] = $this->Menu_model->getStatus();
						$data['parent'] = $this->Menu_model->getParentMenu();
						$data['disabled'] = "";
						$this->template->view('setup/menu/edit',$data);
					}
					else
					{
						$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
						redirect('setup/menu');
					}
				}
				else
				{
					$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
					redirect('setup/menu');
				}
			}
			
		}
		
		function getPosition($parent='')
		{
			if($parent!='' && $parent!=null && $parent)
			{
				$posisi = $this->Menu_model->getNewPosition($parent)->posisi;
				if($posisi == NULL || $posisi=='')
				{
					$posisi = 1;
				}
				echo json_encode(array('Success'=>1, 'Message'=>$posisi));
			}
			else
			{
				echo json_encode(array('Success'=>0, 'Message'=>'Parameter Must Be Set.'));
			}
		}
		
		function hapus($id_menu='')
		{
			$this->controllerlib->cek_permission('delete');
			$id_menu = $id_menu;
			$this->Menu_model->Delete($id_menu);
			$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
			redirect('setup/menu');
		}
	}
?>