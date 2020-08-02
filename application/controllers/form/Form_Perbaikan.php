<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed'); 
	class Form_Perbaikan extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("transaksi/Perbaikan_model");
			$this->template->jsfile = "transaksi/perbaikan";
			$this->controllerlib->cek_permission('view');
		}
		 
		function index() 
		{
			$this->controllerlib->cek_permission('add');
			if(!isset($_POST['submit']))
			{
				$data['disabled'] = "";
				$data['rusak'] = $this->Perbaikan_model->getAllRusak();
				$data['Dept'] 		= $this->Perbaikan_model->getAllDept();
				$data['JenisBarang']= $this->Perbaikan_model->getAllJenisBarang();
				$this->template->view('transaksi/perbaikan/add',$data);
			}
			else 
			{	

				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Tidak dapat menampilkan data"));
				redirect ('transaksi/perbaikan');

				
			} 
		}

		function add_aksi()
		{
				$kode_perbaikan = $this->input->post("kode_perbaikan");
				$kode_rusak = $this->input->post("kode_rusak");
				$kode_aset = $this->input->post("kode_aset");
				$tgl_perbaikan = date_format(date_create($this->input->post("tgl_perbaikan")),'Y-m-d');
				$keterangan = $this->input->post("keterangan");
			 	$kode_status = "1";
			 	$flag_perbaikan = "Y"; 
				
				//insert ke Transaksi ke Table trans-perbaikan
			$this->Perbaikan_model->insertPerbaikan($kode_perbaikan,$kode_rusak,$tgl_perbaikan,$keterangan);
			$this->Perbaikan_model->updateFlagPerbaikan($kode_rusak,$flag_perbaikan);
			$this->Perbaikan_model->updateStatusAset($kode_aset,$kode_status);

			$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('transaksi/perbaikan');
		}
		
			function cari(){
       			 $kode_rusak=$_GET['kode_rusak'];
        			$cari =$this->Perbaikan_model->cari($kode_rusak)->result();
        			echo json_encode($cari);
    				}

    		function carikode(){
        		if($this->Perbaikan_model->cekperbaikan($_POST["kode_perbaikan"]))  
          	  {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Kode Perbaikan Sudah Terdaftar</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Kode Perbaikan Tersedia</label>';  
                }  
    	}
	
	}
?>