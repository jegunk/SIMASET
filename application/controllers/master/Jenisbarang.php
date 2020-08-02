<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Jenisbarang extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("master/Jenisbarang_model");
			$this->template->jsfile = "master/Jenisbarang";
			$this->controllerlib->cek_permission('view');
		} 
		
		function index()
		{
			$this->template->view('master/jenisbarang/list');
		}
		
		function getList()
		{
			$list = $this->Jenisbarang_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->kode_jenis_barang;				
				$row[] = $field->nama_jenis_barang."<a class='btn btn-default btn-sm pull-right' href='".base_url()."index.php/master/jenisbarang/view/".$field->kode_jenis_barang."'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->Jenisbarang_model->count_all(),
				"recordsFiltered" => $this->Jenisbarang_model->count_filtered(),
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
				$this->load->view('pages/master/jenisbarang/add',$data);
			}
			else
			{	
				$kode_jenis_barang = $this->input->post("kode_jenis_barang");
				$nama_jenis_barang = $this->input->post("nama_jenis_barang");
				$this->Jenisbarang_model->insertNew($kode_jenis_barang,$nama_jenis_barang);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('master/Jenisbarang');
			}
		}

		function view()
		{
			//$this->controllerlib->cek_permission('view');
			$kode_jenis_barang = $this->uri->segment(4);
			$data['disabled'] = "disabled";
			$data['data'] = $this->Jenisbarang_model->getkode($kode_jenis_barang);
			if($data['data'])
			{
				//$data['kode_aset'] = $this->Aset_model->getkode();
				$this->template->view('master/jenisbarang/view',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('master/jenisbarang');
			}
		}
		
		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			if(!isset($_POST['submit']))
			{
				$kode_jenis_barang = $this->uri->segment(4);
				$data['disabled'] = "";
				$data['data'] = $this->Jenisbarang_model->getkode($kode_jenis_barang);
				if($data['data'])
				{
					
					$this->template->view('master/jenisbarang/edit',$data);
				}
				else
				{
					$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
					redirect ('master/jenisbarang');
				}
			}
			else 
			{
				$kode_jenis_barang = $this->input->post("kode_jenis_barang");
				$nama_jenis_barang = $this->input->post("nama_jenis_barang");
				
				$this->Jenisbarang_model->saveUpdate($kode_jenis_barang,$nama_jenis_barang);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ("master/Jenisbarang");
			}
		}
		 
		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$kode_jenis_barang = $this->uri->segment(4);
			
			$delete = $this->Jenisbarang_model->deleteCheck($kode_jenis_barang)->jumlah;
			if($delete > 0)
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data Jenis Barang Masih digunakan."));
				redirect ('master/Jenisbarang?message=noparam');				
			}
			else
			{
				$this->Jenisbarang_model->delete($kode_jenis_barang);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('master/Jenisbarang');
			}
		}
		
	}
?>