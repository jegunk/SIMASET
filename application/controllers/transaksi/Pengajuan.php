<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Pengajuan extends CI_Controller
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
			$this->template->view('transaksi/pengajuan/list');
		}
		
		function getList()
		{
			$list = $this->Pengajuan_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->kode_pengajuan;
				$row[] = $field->no_po;
				$row[] = $field->kode_anggaran;
				$row[] = $field->tgl_pengajuan;
				$row[] = $field->nama_dept;
				$row[] = $field->nama_jenis_barang."<a class='btn btn-default btn-sm pull-right' href='".base_url()."index.php/transaksi/pengajuan/view/".$field->kode_pengajuan."'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->Pengajuan_model->count_all(),
				"recordsFiltered" => $this->Pengajuan_model->count_filtered(),
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
				//$data['Aktiva'] = $this->Aset_model->getAllAktiva();
				$data['Dept'] = $this->Pengajuan_model->getAllDept();
				$data['JenisBarang'] = $this->Pengajuan_model->getAllJenisBarang();
				$this->template->view('transaksi/pengajuan/add',$data);
			}
			else
			{	

				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Tidak dapat menampilkan data"));
				redirect ('transaksi/pengajuan');
			}
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
				redirect ('transaksi/pengajuan/add');
			}
		
 

		function view()
		{
			$this->controllerlib->cek_permission('view');
			$kode_pengajuan = $this->uri->segment(4);
			$data['disabled'] = "disabled";
			$data['ajuan'] = $this->Pengajuan_model->getPengajuan($kode_pengajuan);
			if($data['ajuan'])
			{	
				 
				$data['JenisBarang'] = $this->Pengajuan_model->getAllJenisBarang();
				$data['dept'] = $this->Pengajuan_model->getAllDept();
				$this->template->view('transaksi/pengajuan/view',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('transaksi/Aset');
			}
		}
		
		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			$kode_pengajuan = $this->uri->segment(4);
			$data['disabled'] = "";
			$data['ajuan'] = $this->Pengajuan_model->getPengajuan($kode_pengajuan);
			if($data['ajuan'])
			{	
				 
				$data['JenisBarang'] = $this->Pengajuan_model->getAllJenisBarang();
				$data['dept'] = $this->Pengajuan_model->getAllDept();
				$this->template->view('transaksi/pengajuan/edit',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Data Tidak Dapat Ditemukan"));
				redirect ('transaksi/aset');

				
			}
		}
		
		function edit_aksi()
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

				$this->Pengajuan_model->updatedataPengajuan($kode_pengajuan,$no_po,$kode_anggaran,$tgl_pengajuan,$kode_dept,$kode_jenis_barang,$nama_barang,$merk_barang,$tipe_barang,$warna_barang,$qty,$flag_aset);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Ubah Data Berhasil."));
				redirect ('transaksi/Pengajuan');
		}

		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$kode_pengajuan = $this->uri->segment(4);
			
			if($kode_pengajuan)
			{
				
				$this->Pengajuan_model->deletePengajuan($kode_pengajuan);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('transaksi/Pengajuan');
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Gagal."));
				redirect ('transaksi/Pengajuan?message=noparam');
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

		}

	
?>