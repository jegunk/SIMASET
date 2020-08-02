<?PHP  
defined('BASEPATH') OR exit('No direct script access allowed');
	class Aset extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("transaksi/Aset_model");
			$this->template->jsfile = "transaksi/aset";
			$this->controllerlib->cek_permission('view');

		}
		
		function index()
		{
			$this->template->view('transaksi/aset/list');
		}
		
		function getList()
		{
			$list = $this->Aset_model->getList();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->kode_aset;
				$row[] = $field->nama_barang;
				$row[] = $field->tipe_barang;
				$row[] = $field->nama_jenis_barang;
				$row[] = $field->nama_dept."<a class='btn btn-default btn-sm pull-right' href='".base_url()."index.php/transaksi/aset/view/".$field->kode_aset."'>Detail</a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->Aset_model->count_all(),
				"recordsFiltered" => $this->Aset_model->count_filtered(),
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
				$data['Dept'] 		= $this->Aset_model->getAllDept();
				$data['Sumber'] 	= $this->Aset_model->getAllSumber();
				$data['pengpem'] 	= $this->Aset_model->getPembelian();
				$data['JenisBarang']= $this->Aset_model->getAllJenisBarang();
				$this->template->view('transaksi/aset/add',$data);

			}
			else
			{	

				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Tidak dapat menampilkan data"));
				redirect ('transaksi/aset');
			}
		} 

		function carikode(){
        if($this->Aset_model->cekaset($_POST["kode_aset"]))  
          	  {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Kode Aset Sudah Terdaftar</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Kode Aset Tersedia</label>';  
                }  
    	}

		function cari(){
        $kode_pengajuan=$_GET['kode_pengajuan'];
        $cari =$this->Aset_model->cari($kode_pengajuan)->result();
        echo json_encode($cari);
    	}

		function add_aksi()
		{ 

				$kode_aset = $this->input->post("kode_aset");
				$kode_pengajuan = $this->input->post("kode_pengajuan");
				$nama_barang = $this->input->post("nama_barang");
				$no_po = $this->input->post("no_po");
				$merk_barang = $this->input->post("merk_barang");
				$kode_anggaran = $this->input->post("kode_anggaran");
				$tipe_barang = $this->input->post("tipe_barang");
				$warna_barang = $this->input->post("warna_barang");
				$kode_dept = $this->input->post("kode_dept");
				$qty = $this->input->post("qty");
				$kode_jenis_barang = $this->input->post("kode_jenis_barang");
				$kode_sumber = $this->input->post("kode_sumber");
				$instansi = $this->input->post("instansi");
				$tahun = date_format(date_create($this->input->post("tahun")),'Y');				
				$kode_status = "1";

				$flag_aset = "Y";

				//upload photo tapi upload aja yaa
				$config['max_size']=6144;
				$config['allowed_types']="png|jpg|jpeg|gif";
				$config['remove_spaces']=TRUE;
				$config['overwrite']=TRUE;
				$config['upload_path']='assets/upload/img/';
				$config['file_name']= $kode_aset;

				$this->load->library('upload');
				$this->upload->initialize($config);

				if($this->upload->do_upload('gambar'))
				{
					//Resize jadi Kecil Gambarnya Biar Servernya Enteng Boss
					$data_image=$this->upload->data('file_name');
					$config['image_library']='gd2';
					$config['source_image']='./assets/upload/img/'.$data_image;
					$config['width']="200";
					$config['new_image']='./assets/upload/img/aset/'.$data_image;

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					//delete photo yang awal sebelum dikompress
					unlink('assets/upload/img/'.$data_image);
					$pict=$data_image;

				}else  
				{
					//$location=base_url().'assets/upload/img/';
					$pict="default.jpg";
				}
			
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

					$image_qr=$kode_aset.'.png'; //buat name dari qr code sesuai dengan nim
					//$image_qr_url = base_url().'assets/upload/qrcode/'.$image_qr;
					$params['data'] = base_url()."index.php/transaksi/Viewqr/viewqr/".$kode_aset; //data yang akan di jadikan QR CODE
					$params['level'] = 'H'; //H=High
					$params['size'] = 7;
					$params['savename'] = FCPATH.$config['imagedir'].$image_qr; //simpan image QR CODE ke folder assets/images/
					$this->ciqrcode->generate($params);
				
				$this->Aset_model->insert($kode_aset,$kode_pengajuan,$nama_barang,$no_po,$merk_barang,$kode_anggaran,$tipe_barang,$warna_barang,$kode_dept,$qty,$kode_jenis_barang,$kode_sumber,$instansi,$tahun,$kode_status,$pict,$image_qr);
				$this->Aset_model->updatePengajuanAset($kode_pengajuan,$flag_aset);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('transaksi/aset');
			}
	

		function view()
		{
			$this->controllerlib->cek_permission('view');
			$kode_aset = $this->uri->segment(4);
			$data['disabled'] = "disabled";
			$data['aset'] = $this->Aset_model->getAset($kode_aset);
			if($data['aset'])
			{	
				$data['Sumber'] 	= $this->Aset_model->getAllSumber();
				$data['JenisBarang'] = $this->Aset_model->getAllJenisBarang();
				$data['dept'] = $this->Aset_model->getAllDept();
				$this->template->view('transaksi/aset/view',$data);
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
			$kode_aset = $this->uri->segment(4);
			$data['disabled'] = "";
			$data['aset'] = $this->Aset_model->getAset($kode_aset);
			if($data['aset'])
			{	
				$data['Sumber'] 	= $this->Aset_model->getAllSumber();
				$data['JenisBarang'] = $this->Aset_model->getAllJenisBarang();
				$data['dept'] = $this->Aset_model->getAllDept();
				$this->template->view('transaksi/aset/edit',$data);
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "error", "msg" => "Data Tidak Dapat Ditemukan"));
				redirect ('transaksi/aset');
			}
		}
		
		function edit_aksi()
		{
				$kode_aset = $this->input->post("kode_aset");
				$kode_pengajuan = $this->input->post("kode_pengajuan");
				$nama_barang = $this->input->post("nama_barang");
				$no_po = $this->input->post("no_po");
				$merk_barang = $this->input->post("merk_barang");
				$kode_anggaran = $this->input->post("kode_anggaran");
				$tipe_barang = $this->input->post("tipe_barang");
				$warna_barang = $this->input->post("warna_barang");
				$kode_dept = $this->input->post("kode_dept");
				$qty = $this->input->post("qty");
				$kode_jenis_barang = $this->input->post("kode_jenis_barang");
				$kode_sumber = $this->input->post("kode_sumber");
				$instansi = $this->input->post("instansi");
				$tahun = date_format(date_create($this->input->post("tahun")),'Y');
				$gambarnoedit = $this->input->post("gambarnoedit");
				//upload photo
				//$config['max_size']=2048;
				$config['allowed_types']="png|jpg|jpeg|gif";
				$config['remove_spaces']=TRUE;
				$config['overwrite']=TRUE;
				$config['upload_path']='assets/upload/img/';
				$config['file_name']= $kode_aset;

				$this->load->library('upload');
				$this->upload->initialize($config);
				if($hapus_gambar == "1")
				{
					//$location=base_url().'assets/upload/img/'; 
					unlink('assets/upload/img/aset/'.$gambarnoedit);
					$pict="default.jpg";
				}
				else if($this->upload->do_upload('gambar'))
				{
					//Resize jadi Kecil Gambarnya Biar Servernya Enteng Boss
					$data_image=$this->upload->data('file_name');
					$config['image_library']='gd2';
					$config['source_image']='./assets/upload/img/'.$data_image;
					$config['width']="200";
					$config['new_image']='./assets/upload/img/aset/'.$data_image;

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					//delete photo yang awal sebelum dikompress
					unlink('assets/upload/img/'.$data_image);
					$pict=$data_image;
					
				}else 
				{
					// menggunakan hidden 
					$pict=$gambarnoedit;
					
				}

				$this->Aset_model->updatedataAset($kode_aset,$kode_pengajuan,$nama_barang,$no_po,$merk_barang,$kode_anggaran,$tipe_barang,$warna_barang,$kode_dept,$qty,$kode_jenis_barang,$kode_sumber,$instansi,$tahun,$pict);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Ubah Data Berhasil."));
				redirect ('transaksi/Aset');
		}


		function delete()
		{
			$this->controllerlib->cek_permission('delete');
			$kode_aset = $this->uri->segment(4);
			
			$gambar_aset = $this->Aset_model->getGambar($kode_aset)->gambar;
			$gambar_qr = $this->Aset_model->getGambar($kode_aset)->gambar_qr;
			$kode_pengajuan = $this->Aset_model->getGambar($kode_aset)->kode_pengajuan;
			$flag_aset = "T";

			if($kode_aset)
			{
				if($gambar_aset == "default.jpg"){
				} else {
				//delete gambar aset
				unlink('assets/upload/img/aset/'.$gambar_aset);
				}
				//delete gambar code QR
				unlink('assets/upload/qrcode/'.$gambar_qr);

				$this->Aset_model->deleteAset($kode_aset);
				$this->Aset_model->updatePengajuanAset($kode_pengajuan,$flag_aset);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil."));
				redirect ('transaksi/Aset');
			}
			else
			{
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Gagal."));
				redirect ('transaksi/Aset?message=noparam');
			}
		}	

		function viewqr()
		{
			$kode_aset = $this->uri->segment(4);
			$data['aset'] = $this->Aset_model->getKodeAset($kode_aset);
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
			$data['aset'] = $this->Aset_model->getAset($kode_aset);
			if($data['aset'])
			{	
				$data['Sumber'] 	= $this->Aset_model->getAllSumber();
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
	}
?>