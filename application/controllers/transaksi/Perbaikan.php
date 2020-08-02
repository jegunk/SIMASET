<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed'); 
	class Perbaikan extends CI_Controller
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
			$this->template->view('transaksi/perbaikan/list');
		}
		
		function getList() 
		{
			$list = $this->Perbaikan_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->kode_perbaikan;
				$row[] = $field->kode_rusak;
				$row[] = $field->kode_anggaran;
				$row[] = $field->tgl_perbaikan;
				if($field->flag_perbaikan == "Y")
				{
					$status = "Sudah Di Perbaiki";
				} else
				{
					$status = "Belum Di Perbaiki";
				}
				$row[] = $status."<a class='btn btn-default btn-sm pull-right' href='".base_url()."index.php/transaksi/perbaikan/view/".$field->kode_perbaikan."'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->Perbaikan_model->count_all(),
				"recordsFiltered" => $this->Perbaikan_model->count_filtered(),
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

		function getrusak($kode_rusak)
		{
			echo json_encode($this->Perbaikan_model->getdetailrusak($kode_rusak));
		}
		function view()
		{
			$this->controllerlib->cek_permission('view');
			$kode_perbaikan = $this->uri->segment(4);
			$data['disabled'] = "disabled";
			$data['perbaikan'] = $this->Perbaikan_model->getViewPerbaikan($kode_perbaikan);

			if($data['perbaikan'])
			{	
				$data['Dept'] 		= $this->Perbaikan_model->getAllDept();
				$data['JenisBarang']= $this->Perbaikan_model->getAllJenisBarang();
				//print_r($data['perbaikan']);
				//print_r($kode_aset);
				$this->template->view('transaksi/perbaikan/view',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('transaksi/Perbaikan');
			}
		}
		
		function edit()
		{
			$this->controllerlib->cek_permission('edit');
			$kode_perbaikan = $this->uri->segment(4);
			$data['disabled'] = "";
			$data['perbaikan'] = $this->Perbaikan_model->getViewPerbaikan($kode_perbaikan);

			if($data['perbaikan'])
			{	
				
				$data['Dept'] 		= $this->Perbaikan_model->getAllDept();
				$data['JenisBarang']= $this->Perbaikan_model->getAllJenisBarang();
				$this->template->view('transaksi/perbaikan/edit',$data);
			}
			else 
			{
				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Data Tidak Dapat Ditemukan"));
				redirect ('transaksi/rusak');				
			}
		}
		
		function edit_aksi()
		{
				$kode_perbaikan = $this->input->post("kode_perbaikan");
				$kode_rusak = $this->input->post("kode_rusak");
				$tgl_perbaikan = date_format(date_create($this->input->post("tgl_perbaikan")),'Y-m-d');
				$keterangan = $this->input->post("keterangan");

				$this->Perbaikan_model->updatedataPerbaikan($kode_perbaikan,$kode_rusak,$tgl_perbaikan,$keterangan);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Ubah Data Berhasil."));
				redirect ('transaksi/Perbaikan');

		}
		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$kode_perbaikan = $this->uri->segment(4);
			$flag_perbaikan = 'T';
			$flag_status = '2';

			if($kode_perbaikan)
			{	
				//ambil kode rusak untuk update flag perbaikan menjadi "T"
				//$kode_rusak = $this->Perbaikan_model->getKodeRusak($kode_perbaikan)->kode_rusak;
				$kode_rusak =  $this->Perbaikan_model->getViewPerbaikan($kode_perbaikan)->kode_rusak;
				$this->Perbaikan_model->updateFlagPerbaikan($kode_rusak,$flag_perbaikan);
				
				//ambil kode aset untuk update flag perbaikan menjadi "T"
				$kode_aset =  $this->Perbaikan_model->getViewPerbaikan($kode_perbaikan)->kode_aset;
				$this->Perbaikan_model->updateStatusAset($kode_aset,$flag_status);

				//delete data di table trans_rusak
				$this->Perbaikan_model->delete($kode_perbaikan);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('transaksi/Perbaikan');
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Gagal."));
				redirect ('transaksi/Perbaikan?message=noparam');
			}
		}	
		
		function cetak()
		{
			$this->controllerlib->cek_permission('view');
			$kode_perbaikan = $this->uri->segment(4);
			$data['perbaikan'] = $this->Perbaikan_model->getViewPerbaikan($kode_perbaikan);
			if($data['perbaikan'])
			{	

				$kode_dept = $this->session->userdata('kode_dept');
				$data['dept'] = $this->Perbaikan_model->getNamaDept($kode_dept);

				$this->load->view('pages/transaksi/perbaikan/cetak',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Data tidak ditemukan."));
				redirect ('transaksi/Perbaikan');
			}
		}
	}
?>