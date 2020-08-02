<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Aset extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("laporan/Aset_model");
			$this->controllerlib->cek_permission('view');
		}
		
		function index()
		{
			$data['kode_status'] = "";
			$data['ListStatus'] = $this->Aset_model->getAllStatus();
			$data['ListTahun'] = $this->Aset_model->getTahun();
			$this->template->view('laporan/aset/form',$data);
		}

		function proses()
		{
			$kode_status = $this->input->post('kode_status');
			$tahun = $this->input->post('tahun');
			
			if(isset($_POST['submit']))
			{
				$data['kode_status'] = $kode_status;
				$data['tahun'] = $tahun;
				$data['ListTahun'] = $this->Aset_model->getTahun();
				$data['ListStatus'] = $this->Aset_model->getAllStatus();
				$data['Export'] = false;
				$data['Data'] = $this->Aset_model->getData($kode_status,$tahun);
				//print_r($data['tahun']);
				$this->template->view('laporan/aset/list',$data);
			}
			elseif(isset($_POST['export']))
			{	
				$this->load->library('Pdf');
				//$this->load->view('laporan/aset/cetak');
				$data['ListTahun'] = $this->Aset_model->getTahun();
				$data['ListStatus'] = $this->Aset_model->getAllStatus();
				$data['Export'] = true;
				//$filename = "Laporan Aset";
				$data['Data'] = $this->Aset_model->getData($kode_status,$tahun);
				$data['nama_status'] = $this->Aset_model->getNamaStatus($kode_status);
				$this->load->view('pages/laporan/aset/cetak',$data);

				/*$this->load->helper('dompdf_helper');
				ob_start();
				$this->load->view('pages/laporan/aset/cetak',$data);
				$content = ob_get_contents();
				ob_end_clean();
				$attach = true;
				pdf_create($content, $filename, $attach) ;*/
			}
		}

		function cetak()
		{
			$this->load->library('Pdf');
			$this->load->view('pages/laporan/aset/cetak');
		}
		
	}
?>