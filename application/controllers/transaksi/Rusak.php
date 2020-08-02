<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed'); 
	class Rusak extends CI_Controller
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
			$this->template->view('transaksi/rusak/list');
		}
		
		function getList()
		{
			$list = $this->Rusak_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->kode_rusak;
				$row[] = $field->kode_aset;
				$row[] = $field->tgl_kerusakan;
				//$row[] = $field->nama_barang;
				if($field->kode_status == "2")
				{
					$status = "Belum di Proses";
				} else if ($field->kode_status == "3")
				{
					$status = "Proses Perbaikan";
				} else if ($field->kode_status == "4")
				{
					$status = "Dimusnahkan";
				} else if($field->kode_status == "1")
				{
					$status = "Kondisi Baik, Transaksi Selesai";
				}
				$row[] = $status."<a class='btn btn-default btn-sm pull-right' href='".base_url()."index.php/transaksi/Rusak/view/".$field->kode_rusak."'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->Rusak_model->count_all(),
				"recordsFiltered" => $this->Rusak_model->count_filtered(),
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

		function getAset($kode_aset)
		{
			echo json_encode($this->Rusak_model->getdetailaset($kode_aset));
		}

		function view()
		{
			$this->controllerlib->cek_permission('view');
			$kode_rusak = $this->uri->segment(4);
			$data['disabled'] = "disabled";
			$data['rusak'] = $this->Rusak_model->getRusak($kode_rusak);
			$KdAset= $this->Rusak_model->getKodeAset($kode_rusak)->kode_aset;
			
			if($data['rusak'])
			{	
				$data['dept'] 		= $this->Rusak_model->getAllDept();
				$data['JenisBarang']= $this->Rusak_model->getAllJenisBarang();
				$data['status']		= $this->Rusak_model->getAllStatus();
				$data['aset']= $this->Rusak_model->getAsetAll($KdAset);
				$this->template->view('transaksi/rusak/view',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('transaksi/Rusak');
			}
		}

		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			$kode_rusak = $this->uri->segment(4);
			$data['disabled'] = "";
			$data['rusak'] = $this->Rusak_model->getRusak($kode_rusak);
			$KdAset= $this->Rusak_model->getKodeAset($kode_rusak)->kode_aset;

			if($data['rusak'])
			{	
				$data['status']		= $this->Rusak_model->getAllStatus();
				$data['dept'] 		= $this->Rusak_model->getAllDept();
				$data['JenisBarang']= $this->Rusak_model->getAllJenisBarang();
				$data['aset']= $this->Rusak_model->getAsetAll($KdAset);
				$this->template->view('transaksi/rusak/edit',$data);
			}
			else 
			{
				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Data Tidak Dapat Ditemukan"));
				redirect ('transaksi/rusak');				
			}
		}
		
		function edit_aksi()
		{
				$kode_rusak 	= $this->input->post("kode_rusak");
				$kode_aset 		= $this->input->post("kode_aset");
				$tgl_kerusakan	= date_format(date_create($this->input->post("tgl_kerusakan")),'Y-m-d');
				$qty 			= $this->input->post('qty');
				$keterangan 	= $this->input->post("keterangan");
				$flag_status 	= $this->input->post("kode_status");
				$kode_anggaran 	= $this->input->post("kode_anggaran");

				$this->Rusak_model->updatedataRusak($kode_rusak,$kode_aset,$tgl_kerusakan,$qty,$keterangan,$kode_anggaran);

				$this->Rusak_model->updateFlagRusak($kode_aset,$flag_status);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Ubah Data Berhasil."));
				redirect ('transaksi/Rusak');

		}
		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$kode_rusak = $this->uri->segment(4);
			$flag_status = '1'; 

				//ambil kode aset untuk update kode status menjadi "1" alias Baik
				$KdAset= $this->Rusak_model->getKodeAset($kode_rusak)->kode_aset;
				$this->Rusak_model->updateFlagRusak($KdAset,$flag_status);
				
				//delete data di table trans_rusak
				$this->Rusak_model->delete($kode_rusak);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('transaksi/Rusak');
		}	
		
		function cetak()
		{
			$this->controllerlib->cek_permission('view');
			$kode_rusak = $this->uri->segment(4);
			$data['rusak'] = $this->Rusak_model->getRusakDetail($kode_rusak);
			if($data['rusak'])
			{	
				$kode_dept = $this->session->userdata('kode_dept');
				$data['dept'] = $this->Rusak_model->getNamaDept($kode_dept);
				//print_r($data['rusak']);
				//$data['approve'] = $this->Rusak_model->getApproveBy($kode_rusak);
				//print_r($data['approve']);
				//$data['detail'] = $this->Spk_model->getDetail($NoDokumen);

				$this->load->view('pages/transaksi/rusak/cetak',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('transaksi/Spk');
			}
		}
	}
?>