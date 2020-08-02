<?PHP 
//defined('BASEPATH') OR exit('No direct script access allowed');
	class Viewqr extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("transaksi/Aset_model");
			$this->template->jsfile = "transaksi/aset";
			

		}
		
		function index()
		{
			echo $p="Are You Lost<br>";
			echo $o= date('Y M d H:i:s');
			echo $d="<br>";
			echo $a= substr($o, -8);
			echo $ss="<br>";			
		}

		function viewqr()
		{
			$kode_aset = $this->uri->segment(4);
			$data['aset'] = $this->Aset_model->getAset($kode_aset);
			if($data['aset'])
			{	
				 
				$data['Sumber'] 	= $this->Aset_model->getAllSumber();
				$data['JenisBarang'] = $this->Aset_model->getAllJenisBarang();
				$data['dept'] = $this->Aset_model->getAllDept();
				$this->load->view('pages/transaksi/aset/cetak_spek',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('transaksi/Aset');
			}
		}


		
		function cetak()
		{
			$this->controllerlib->cek_permission('view');
			$kode_aset = $this->uri->segment(4);
			$data['aset'] = $this->Aset_model->getKodeAset($kode_aset);
			if($data['aset'])
			{	
				 
				$data['Aktiva'] = $this->Aset_model->getAllAktiva();
				$data['JenisBarang'] = $this->Aset_model->getAllJenisBarang();
				$data['dept'] = $this->Aset_model->getAllDept();
				$this->load->view('pages/transaksi/aset/cetak',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('transaksi/Aset');
			}
		}

		function cetak_spek()
		{
			$this->controllerlib->cek_permission('view');
			$kode_aset = $this->uri->segment(4);
			$data['aset'] = $this->Aset_model->getKodeAset($kode_aset);
			if($data['aset'])
			{	
				 
				$data['Aktiva'] = $this->Aset_model->getAllAktiva();
				$data['JenisBarang'] = $this->Aset_model->getAllJenisBarang();
				$data['dept'] = $this->Aset_model->getAllDept();
				$this->load->view('pages/transaksi/aset/cetak_spek',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('transaksi/Aset');
			}
		}

		function buatqr()
		{
			$data=$this->Aset_model->getAllAset();
			echo json_encode($data);
			if($data){
			foreach ($data as $key) {
					//Buat QR Code
					$this->load->library('ciqrcode'); //pemanggilan library QR CODE

					$config['cacheable']	= true; //boolean, the default is true
					//$config['cachedir']		= './assets/'; //string, the default is application/cache/
					//$config['errorlog']		= './assets/'; //string, the default is application/logs/
					$config['imagedir']		= './assets/upload/qrcode/'; //direktori penyimpanan qr code
					$config['quality']		= true; //boolean, the default is true
					$config['size']			= '1024'; //interger, the default is 1024
					$config['black']		= array(224,255,255); // array, default is array(255,255,255)
					$config['white']		= array(70,130,180); // array, default is array(0,0,0)
					$this->ciqrcode->initialize($config);

					$image_qr=$key->kode_aset.'.png'; //buat name dari qr code sesuai dengan nim
					//$image_qr_url = base_url().'assets/upload/qrcode/'.$image_qr;
					$params['data'] = base_url()."index.php/transaksi/Viewqr/viewqr/".$key->kode_aset; //data yang akan di jadikan QR CODE
					$params['level'] = 'H'; //H=High
					$params['size'] = 7;
					$params['savename'] = FCPATH.$config['imagedir'].$image_qr; //simpan image QR CODE ke folder assets/images/
					$this->ciqrcode->generate($params);
					echo $a= "Success";
}

			} else {
				echo $d ="error" ;
			}
		}
	
}