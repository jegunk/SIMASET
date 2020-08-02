<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Sumberdana extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("master/Sumberdana_model");
			$this->template->jsfile = "master/Sumberdana";
			$this->controllerlib->cek_permission('view');
		} 
		
		function index() 
		{
			$this->template->view('master/Sumberdana/list');
		}
		
		function getList()
		{
			$list = $this->Sumberdana_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->kode_sumber;				
				$row[] = $field->nama_sumber."<a class='btn btn-default btn-sm pull-right' href='".base_url()."index.php/master/sumberdana/view/".$field->kode_sumber."'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->Sumberdana_model->count_all(),
				"recordsFiltered" => $this->Sumberdana_model->count_filtered(),
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
				$this->load->view('pages/master/sumberdana/add',$data);
			}
			else
			{	
				$kode_sumber = $this->input->post("kode_sumber");
				$nama_sumber = $this->input->post("nama_sumber");
				$this->Sumberdana_model->insertNew($kode_sumber,$nama_sumber);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('master/Sumberdana');
			}
		}

		function view()
		{
			$this->controllerlib->cek_permission('view');
			$kode_sumber = $this->uri->segment(4);
			$data['disabled'] = "disabled";
			$data['data'] = $this->Sumberdana_model->getkode($kode_sumber);
			if($data['data'])
			{
				//$data['kode_aset'] = $this->Aset_model->getkode();
				$this->template->view('master/sumberdana/view',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('master/sumberdana');
			}
		}
		
		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			if(!isset($_POST['submit']))
			{
				$kode_sumber = $this->uri->segment(4);
				$data['disabled'] = "";
				$data['data'] = $this->Sumberdana_model->getkode($kode_sumber);
				if($data['data'])
				{
					
					$this->template->view('master/sumberdana/edit',$data);
				}
				else
				{
					$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
					redirect ('master/Sumberdana');
				}
			}
			else
			{
				$kode_sumber = $this->input->post("kode_sumber");
				$nama_sumber = $this->input->post("nama_sumber");

				$this->Sumberdana_model->saveUpdate($kode_sumber,$nama_sumber);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ("master/Sumberdana");
			}
		}
		 
		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$kode_sumber = $this->uri->segment(4);
			
			$delete = $this->Sumberdana_model->deleteCheck($kode_sumber)->jumlah;
			if($delete > 0)
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data Sumber dana Masih digunakan"));
				redirect ('master/Sumberdana?message=noparam');
				
			}
			else
			{
				$this->Sumberdana_model->delete($kode_sumber);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('master/Sumberdana');
			}
		}
		
	}
?>