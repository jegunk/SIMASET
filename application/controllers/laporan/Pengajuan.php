<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Pengajuan extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("laporan/Pengajuan_model");
			$this->controllerlib->cek_permission('view');
		}
		
		function index()
		{
			$data['ListAset'] = $this->Pengajuan_model->getAllAset();
			$this->template->view('laporan/pengajuan/form',$data);
		}

		function proses()
		{
			$Tanggal1 = date_format(date_create($this->input->post("Tanggal1")),'Y-m-d');
			$Tanggal2 = date_format(date_create($this->input->post("Tanggal2")),'Y-m-d');
			
			if(isset($_POST['submit']))
			{
				$data['Tanggal1'] = $Tanggal1;
				$data['Tanggal2'] = $Tanggal2;
				$data['ListAset'] = $this->Pengajuan_model->getAllAset();
				$data['Export'] = false;

				$data['Data'] = $this->Pengajuan_model->getData($Tanggal1,$Tanggal2);
				$this->template->view('laporan/pengajuan/list',$data);
			}
			elseif(isset($_POST['export']))
			{
				$this->load->library('Pdf');
				$data['Tanggal1'] = $Tanggal1;
				$data['Tanggal2'] = $Tanggal2;
				
				$data['Export'] = true;
				//$filename = "Laporan Pengajuan Aset";
				$data['Data'] = $this->Pengajuan_model->getData($Tanggal1,$Tanggal2);
				$this->load->view('pages/laporan/pengajuan/cetak',$data);

				/*$this->load->helper('dompdf_helper');
				ob_start();
				$this->load->view('pages/laporan/pengajuan/cetak',$data);
				$content = ob_get_contents();
				ob_end_clean();
				$attach = true;
				pdf_create($content, $filename, $attach) ;*/
			}
		}
		
	}
?>