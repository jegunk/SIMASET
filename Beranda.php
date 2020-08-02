<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	class Beranda extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Beranda_model');
			$this->template->jsfile = 'beranda';
		}
		
		function index()
		{
			$data['Tahun'] = array("2018","2019","2020");
			$data['Barang'] = $this->Beranda_model->getAllBarang();
			$bulan = date("m");
			$tahun = date("Y");
			$data["stock"] = $this->Beranda_model->getDataBahanBaku($tahun,$bulan);
			$this->template->view('beranda',$data);
		}

		function DataPie()
		{
			$Tahun = $this->input->post("Tahun");
			
			$array = array();
			$data = $this->Beranda_model->DataPie($Tahun);
			if(count($data) > 0)
			{
				foreach ($data as $d) 
				{
					array_push($array, array("JenisCutting"=>$d->JenisCutting,"Total"=>(int)$d->Total));
				}

				echo json_encode(array("status"=>true,"data"=>$array));
			}
			else
			{
				echo json_encode(array("status"=>false,"message"=>"Data cutting untuk tahun $Tahun tidak ditemukan."));
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
				array_push($array, array("Bulan"=>"Okt","Nilai"=>(int)$data->Sep));
				array_push($array, array("Bulan"=>"Sep","Nilai"=>(int)$data->Okt));
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
?>