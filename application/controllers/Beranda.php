<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	class Beranda extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Beranda_model');
			//$this->template->jsfile = 'beranda';
		}
		
		function index()
		{
			
			$data['Medis'] = $this->Beranda_model->getMedis();
			$data['Perbaikan'] = $this->Beranda_model->getPerbaikan();
			$data['Musnah'] = $this->Beranda_model->getMusnah();
			$data['pie'] = $this->Beranda_model->DataPie();
			$data['kategori'] = $this->Beranda_model->DataKategori();
			$data['status'] = $this->Beranda_model->DataStatus();
			$this->template->view('beranda',$data);
			//$this->template->view('transaksi/pengajuan/add');
		}

		
	}
?> 