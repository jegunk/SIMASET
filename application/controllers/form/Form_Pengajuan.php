<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Form_Pengajuan extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("transaksi/Pengajuan_model");
			$this->template->jsfile = "transaksi/pengajuan";
			$this->controllerlib->cek_permission('view');

		}
		
		function index()
		{
			$this->controllerlib->cek_permission('add');
			if(!isset($_POST['submit']))
			{
				$data['disabled'] = "";
				$data['Dept'] = $this->Pengajuan_model->getAllDept();
				$data['JenisBarang'] = $this->Pengajuan_model->getAllJenisBarang();
				$this->template->view('transaksi/pengajuan/add',$data);
			}
			else
			{	

				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Tidak dapat menampilkan data"));
				redirect ('form/form_pengajuan');
			}
		} 

		function add_aksi()
		{ 

				$kode_pengajuan = $this->input->post("kode_pengajuan");
				$no_po = $this->input->post("no_po");
				$kode_anggaran = $this->input->post("kode_anggaran");
				$tgl_pengajuan = date_format(date_create($this->input->post("tgl_pengajuan")),'Y-m-d');
				$kode_dept = $this->input->post("kode_dept");
				$kode_jenis_barang = $this->input->post("kode_jenis_barang");
				$nama_barang = $this->input->post("nama_barang");
				$merk_barang = $this->input->post("merk_barang");
				$tipe_barang = $this->input->post("tipe_barang");
				$warna_barang = $this->input->post("warna_barang");
				$qty = $this->input->post("qty");
				$flag_aset = "T";
				
				$this->Pengajuan_model->insert($kode_pengajuan,$no_po,$kode_anggaran,$tgl_pengajuan,$kode_dept,$kode_jenis_barang,$nama_barang,$merk_barang,$tipe_barang,$warna_barang,$qty,$flag_aset);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('form/form_pengajuan');
			}

			function carikode(){
        		if($this->Pengajuan_model->cekpengajuan($_POST["kode_pengajuan"]))  
          	  {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Kode Pengajuan Sudah Terdaftar</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Kode Pengajuan Tersedia</label>';  
                }  
    	}
		
 
		}
		
	

		

	
?>