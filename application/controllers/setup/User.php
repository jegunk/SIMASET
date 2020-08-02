<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("setup/User_model");
			$this->template->jsfile = "setup/user";
			$this->controllerlib->cek_permission('view');
		}
		
		function index()
		{ 
			$this->template->view('setup/user/list');
		}
		
		function getList()
		{
			$list = $this->User_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->username;
				$row[] = $field->nama_user."<a href='".base_url()."index.php/setup/user/view/".$field->id_user."' class='btn btn-default btn-sm pull-right'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->User_model->count_all(),
				"recordsFiltered" => $this->User_model->count_filtered(),
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
				$data['userlevel'] = $this->User_model->getAllUserLevel();
				$data['dept'] 		= $this->User_model->getDept();
				$this->template->view('setup/user/add',$data);
			}
			else
			{	

				//$id_user = $this->input->post("id_user");
				$nama_user = $this->input->post("nama_user");
				$kode_dept = $this->input->post("kode_dept");
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				$id_userlevel = $this->input->post("id_userlevel");

				//upload photo tapi upload aja yaa
				$config['max_size']=6144;
				$config['allowed_types']="png|jpg|jpeg|gif";
				$config['remove_spaces']=TRUE;
				$config['overwrite']=TRUE;
				$config['upload_path']='assets/upload/img/';
				$config['file_name']= $username;

				$this->load->library('upload');
				$this->upload->initialize($config);

				if($this->upload->do_upload('gambar'))
				{
					//Resize jadi Kecil Gambarnya Biar Servernya Enteng Boss
					$data_image=$this->upload->data('file_name');
					$config['image_library']='gd2';
					$config['source_image']='./assets/upload/img/'.$data_image;
					$config['width']="150";
					$config['new_image']='./assets/upload/img/user/'.$data_image;

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					//delete photo yang awal sebelum dikompress
					unlink('assets/upload/img/'.$data_image);
					$pict=$data_image;

				}else  
				{
					//$location=base_url().'assets/upload/img/';
					$pict="default.jpg";
				}

				$this->User_model->insertNew($id_user,$nama_user,$kode_dept,$username,$password,$id_userlevel,$pict);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('setup/User');
			}
		}
 
		function view()
		{
			$this->controllerlib->cek_permission('view');
			$id = $this->uri->segment(4);
			$data['disabled'] = "disabled";
			$data['data'] = $this->User_model->getDetail($id);
			if($data['data'])
			{
				$data['userlevel'] = $this->User_model->getAllUserLevel();
				$data['dept'] = $this->User_model->getDept();
				$this->template->view('setup/user/view',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('setup/User');
			}
		}

		function viewUser()
		{
			$this->controllerlib->cek_permission('view');
			$id = $this->session->userdata("id_user");
			$data['disabled'] = "disabled";
			$data['data'] = $this->User_model->getDetail($id);
			if($data['data'])
			{
				$data['userlevel'] = $this->User_model->getAllUserLevel();
				$data['dept'] = $this->User_model->getDept();
				$this->template->view('setup/user/viewuser',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('Beranda');
			}
		}
		
		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			if(!isset($_POST['submit']))
			{
				$id = $this->uri->segment(4);
				$data['disabled'] = "";
				$data['data'] = $this->User_model->getDetail($id);

				if($data['data'])
				{
					$data['userlevel'] = $this->User_model->getAllUserLevel();
					$data['dept'] = $this->User_model->getDept();
					$this->template->view('setup/user/edit',$data);
				}
				else
				{
					$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
					redirect ('setup/User');
				}
			}
			else
			{
				$id_user = $this->input->post("id_user");
				$nama_user = $this->input->post("nama_user");
				$kode_dept = $this->input->post("kode_dept");
				$username = $this->input->post("username");
				$id_userlevel = $this->input->post("id_userlevel");
				$hapus_gambar = $this->input->post("hapus_gambar");
				$gambarnoedit = $this->input->post("gambarnoedit");

				//upload photo
				//$config['max_size']=2048;
				$config['allowed_types']="png|jpg|jpeg|gif";
				$config['remove_spaces']=TRUE;
				$config['overwrite']=TRUE;
				$config['upload_path']='assets/upload/img/';
				$config['file_name']= $username;

				$this->load->library('upload');
				$this->upload->initialize($config);
				if($hapus_gambar == "1")
				{
					//$location=base_url().'assets/upload/img/'; 
					unlink('assets/upload/img/user/'.$gambarnoedit);
					$pict="default.jpg";
				}
				else if($this->upload->do_upload('gambar'))
				{
					//Resize jadi Kecil Gambarnya Biar Servernya Enteng Boss
					$data_image=$this->upload->data('file_name');
					$config['image_library']='gd2';
					$config['source_image']='./assets/upload/img/'.$data_image;
					$config['width']="100";
					$config['new_image']='./assets/upload/img/user/'.$data_image;

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					//delete photo yang awal sebelum dikompress
					unlink('assets/upload/img/'.$data_image);
					$pict=$data_image;
					
				}else 
				{
					// menggunakan hidden 
					$pict=$gambarnoedit;
					
				}

				$this->User_model->saveUpdate($id_user,$nama_user,$kode_dept,$username,$id_userlevel,$pict);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('setup/User');
			}
		}
		
		function password()
		{
			$this->controllerlib->cek_permission('edit');
			if(!isset($_POST['submit']))
			{
				$id = $this->uri->segment(4);
				$data['disabled'] = "";
				$data['data'] = $this->User_model->getDetail($id);
				if($data['data'])
				{
					$data['userlevel'] = $this->User_model->getAllUserLevel();
					$this->template->view('setup/user/password',$data);
				}
				else
				{
					$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
					redirect ('setup/User');
				}
			}
			else
			{
				$id_user = $this->input->post("id_user");
				$password = $this->input->post("password");
				$this->User_model->saveUpdatePassword($id_user,$password);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('setup/User');
			}
		}
		
		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$id_user = $this->uri->segment(4);
			
			if($id_user)
			{
				$this->User_model->delete($id_user);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('setup/User');
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Gagal."));
				redirect ('setup/User?message=noparam');
			}
		}
		
	}
?>