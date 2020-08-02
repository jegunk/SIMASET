<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Dept extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("master/Dept_model");
			$this->template->jsfile = "master/dept";
			$this->controllerlib->cek_permission('view');
		} 
		
		function index() 
		{
			$this->template->view('master/dept/list');
		}
		 
		function getList()
		{
			$list = $this->Dept_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->kode_dept;				
				$row[] = $field->nama_dept."<a class='btn btn-default btn-sm pull-right' href='".base_url()."index.php/master/dept/view/".$field->kode_dept."'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->Dept_model->count_all(),
				"recordsFiltered" => $this->Dept_model->count_filtered(),
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
				$this->load->view('pages/master/dept/add',$data);
			}
			else
			{	
					$kode_dept = $this->input->post("kode_dept");
					$nama_dept = $this->input->post("nama_dept");
					$this->Dept_model->insertNew($kode_dept,$nama_dept);
					$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
					redirect ('master/Dept');
				}
			}
		

		function view()
		{
			$this->controllerlib->cek_permission('view');
			$kode_dept = $this->uri->segment(4);
			$data['disabled'] = "disabled";
			$data['data'] = $this->Dept_model->getkode($kode_dept);
			if($data['data'])
			{
				//$data['kode_aset'] = $this->Aset_model->getkode();
				$this->template->view('master/dept/view',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('master/dept');
			}
		}
		
		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			if(!isset($_POST['submit']))
			{
				$kode_dept = $this->uri->segment(4);
				$data['disabled'] = "";
				$data['data'] = $this->Dept_model->getkode($kode_dept);
				if($data['data'])
				{
					
					$this->template->view('master/dept/edit',$data);
				}
				else
				{
					$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
					redirect ('master/dept');
				}
			}
			else
			{
				$kode_dept = $this->input->post("kode_dept");
				$nama_dept = $this->input->post("nama_dept");
				$this->Dept_model->saveUpdate($kode_dept,$nama_dept);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ("master/Dept");
			} 
		}
		 
		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$kode_dept = $this->uri->segment(4);
			 
			$delete = $this->Dept_model->deleteCheck($kode_dept)->jumlah;
			if($delete > 0)
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data Departemen Masih digunakan."));
				redirect ('master/Dept?message=noparam');
				
			}
			else
			{
				$this->Dept_model->delete($kode_dept);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('master/Dept');
			}
		}
		
	}
?>