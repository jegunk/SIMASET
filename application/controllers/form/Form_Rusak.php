<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed'); 
	class Form_Rusak extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("transaksi/Rusak_model");
			$this->template->jsfile = "transaksi/rusak";
			$this->controllerlib->cek_permission('view');
		}
		 
		function index()
		{
			$this->controllerlib->cek_permission('add');
			if(!isset($_POST['submit']))
			{
				$data['disabled'] 	= "";
				$data['Dept'] 		= $this->Rusak_model->getAllDept();
				$data['aset'] 		= $this->Rusak_model->getAllAset();
				$data['JenisBarang']= $this->Rusak_model->getAllJenisBarang();
				$this->template->view('transaksi/rusak/add',$data);
			}
			else 
			{	

				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Tidak dapat menampilkan data"));
				redirect ('transaksi/rusak');

				
			}
		}

		function add_aksi()
		{
				$kode_rusak = $this->input->post("kode_rusak");
				$kode_aset 	= $this->input->post("kode_aset");
				$tgl_kerusakan	= date_format(date_create($this->input->post("tgl_kerusakan")),'Y-m-d');
				$qty 		= $this->input->post('qty');
				$keterangan = $this->input->post("keterangan");
				$flag_perbaikan = "T";

				$flag_status = "2";
				$this->Rusak_model->insertRusak($kode_rusak,$kode_aset,$tgl_kerusakan,$qty,$keterangan,$flag_perbaikan);
				$this->Rusak_model->updateFlagRusak($kode_aset,$flag_status); 
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('transaksi/rusak');
		}
		
			function cari(){
       			 $kode_aset=$_GET['kode_aset'];
       			 $cari =$this->Rusak_model->cari($kode_aset)->result();
       			 echo json_encode($cari);
    			}

    		function carikode(){
       		 if($this->Rusak_model->cekrusak($_POST["kode_rusak"]))  
          	  {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Kode Rusak Sudah Terdaftar</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Kode Rusak Tersedia</label>';  
                }  
    	}
		
	}
?>