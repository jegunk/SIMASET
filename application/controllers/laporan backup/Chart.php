<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Chart extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("laporan/Chart_model");
			//$this->template->jsfile = 'laporan/chart';
			$this->controllerlib->cek_permission('view');
		} 
		
		function index()
		{
			
			
			$x['pie'] = $this->Chart_model->DataPie();
			$x['kategori'] = $this->Chart_model->DataKategori();
			$x['status'] = $this->Chart_model->DataStatus();
			$this->template->view('laporan/chart/pie',$x);
		}
		
		function DataPie()
		{
			//$Tahun = $this->input->post("Tahun");
			
			$array = array();
			$data = $this->Chart_model->DataPie();
			//print_r($data);
			if(count($data) > 0)
			{
				foreach ($data as $d) 
				{
					array_push($array, array("nama_dept"=>$d->nama_dept,"Total"=>(int)$d->Total));
				}

				echo json_encode(array("status"=>true,"data"=>$array));
				//$this->template->view('laporan/chart/pie',$data);	
			}
			else
			{
				echo json_encode(array("status"=>false,"message"=>"Data Aset tidak ditemukan."));
			}
			
		}

		function DataColumn()
		{
			$Tahun = $this->input->post("Tahun");
			$KdBarang = $this->input->post("KdBarang");
			
			$array = array();
			$data = $this->Beranda_model->DataColumn($Tahun,$KdBarang);

			if($data)
			{ 
				array_push($array, array("Bulan"=>"Jan","Nilai"=>(int)$data->Jan));
				array_push($array, array("Bulan"=>"Feb","Nilai"=>(int)$data->Feb));
				array_push($array, array("Bulan"=>"Mar","Nilai"=>(int)$data->Mar));
				array_push($array, array("Bulan"=>"Apr","Nilai"=>(int)$data->Apr));
				array_push($array, array("Bulan"=>"Mei","Nilai"=>(int)$data->Mei));
				array_push($array, array("Bulan"=>"Jun","Nilai"=>(int)$data->Jun));
				array_push($array, array("Bulan"=>"Jul","Nilai"=>(int)$data->Jul));
				array_push($array, array("Bulan"=>"Agu","Nilai"=>(int)$data->Agu));
				array_push($array, array("Bulan"=>"Sep","Nilai"=>(int)$data->Sep));
				array_push($array, array("Bulan"=>"Okt","Nilai"=>(int)$data->Okt));
				array_push($array, array("Bulan"=>"Nov","Nilai"=>(int)$data->Nov));
				array_push($array, array("Bulan"=>"Des","Nilai"=>(int)$data->Des));
				
				echo json_encode(array("status"=>true,"data"=>$array));
			}
			else
			{
				echo json_encode(array("status"=>false,"message"=>"Data MPS untuk tahun $Tahun dan Barang $KdBarang tidak ditemukan."));
			}
			
		}
}