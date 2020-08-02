<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Barang_model extends CI_Model
	{
		var $table = 'master_barang';
		var $column_order = array(null, 'KdBarang','NamaBarang','LuasBarang','MinimalStock','ReorderPoint');
		var $column_search = array('KdBarang','NamaBarang');
		var $order = array('KdBarang' => 'asc');

		function __construct()
		{
			parent::__construct();
		}
		
		function getList()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order);
			if($_POST['length'] != -1)
			{
				$this->db->limit($_POST['length'], $_POST['start']);
			}
			$query = $this->db->get();
			return $query->result();
		}

		function count_filtered()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order);
			$query = $this->db->get();
			return $query->num_rows();
		}

		function count_all()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order);
			return $this->db->count_all_results();
		}

		function getAllSatuan()
		{
			return $this->db->select("*")
							->from("master_satuan_barang")
							->order_by("KdSatuanBarang", "ASC")
							->get()
							->result_array();
		}

		function getAllKategori()
		{
			return $this->db->select("*")
							->from("master_kategori_barang")
							->order_by("KdKategoriBarang", "ASC")
							->get()
							->result_array();
		}

		function insertNew($KdBarang,$NamaBarang,$LuasBarang,$KdSatuanBarang1,$KdKategoriBarang,$MinimalStock,$ReorderPoint,$KdSatuanBarang2,$KdSatuanBarang3,$KonversiSatuan2,$KonversiSatuan3,$StockAwal)
		{
			$tablename = "master_barang";
			$data = array("KdBarang"=>$KdBarang,"NamaBarang"=>$NamaBarang,"LuasBarang"=>$LuasBarang,"KdSatuanBarang1"=>$KdSatuanBarang1,"KdKategoriBarang"=>$KdKategoriBarang,"MinimalStock"=>$MinimalStock,"ReorderPoint"=>$ReorderPoint,"KdSatuanBarang2"=>$KdSatuanBarang2,"KdSatuanBarang3"=>$KdSatuanBarang3,"KonversiSatuan2"=>$KonversiSatuan2,"KonversiSatuan3"=>$KonversiSatuan3);
			$this->db->insert($tablename,$data);

			for($Bulan=1;$Bulan<=12;$Bulan++)
			{
				$Tahun = 2018;

				$Bulan = str_pad($Bulan, 2, '0', STR_PAD_LEFT);


				$tablename1 = 'stock_barang';
				$data1 = array('Tahun'=>$Tahun, 'Bulan'=>$Bulan, 'KdBarang'=>$KdBarang,'StockAwal'=>$StockAwal,'StockMasuk'=>0,'StockKeluar'=>0,'StockAkhir'=>$StockAwal);
				$this->db->insert($tablename1,$data1);
			}
		}

		function saveUpdate($KdBarang,$NamaBarang,$LuasBarang,$KdSatuanBarang1,$KdKategoriBarang,$MinimalStock,$ReorderPoint,$KdSatuanBarang2,$KdSatuanBarang3,$KonversiSatuan2,$KonversiSatuan3,$StockAwal)
		{
			$tablename = "master_barang";
			$data = array("NamaBarang"=>$NamaBarang,"LuasBarang"=>$LuasBarang,"KdSatuanBarang1"=>$KdSatuanBarang1,"KdKategoriBarang"=>$KdKategoriBarang,"MinimalStock"=>$MinimalStock,"ReorderPoint"=>$ReorderPoint,"KdSatuanBarang2"=>$KdSatuanBarang2,"KdSatuanBarang3"=>$KdSatuanBarang3,"KonversiSatuan2"=>$KonversiSatuan2,"KonversiSatuan3"=>$KonversiSatuan3);
			$clause = array("KdBarang"=>$KdBarang);
			$this->db->update($tablename,$data,$clause);
			
			$tablename1 = 'stock_barang';
			$data1 = array('StockAwal'=>$StockAwal);
			$clause1 = array('Tahun'=>'2018', 'Bulan'=>'01');
			$this->db->update($tablename1,$data1,$clause1);
			
			$this->db->query("UPDATE stock_barang SET StockAkhir=StockAwal+StockMasuk-StockKeluar WHERE Bulan='01' AND Tahun='2018' AND KdBarang='$KdBarang'");
		}
		
		function delete($KdBarang)
		{
			$tablename = "master_barang";
			$clause = array("KdBarang"=>$KdBarang);
			$this->db->delete($tablename,$clause);
			$tablename1 = "stock_barang";
			$clause1 = array("KdBarang"=>$KdBarang);
			$this->db->delete($tablename1,$clause1);
		}

		function getDetail($KdBarang)
		{
			return $this->db->select("a.*,b.StockAwal")
							->from("master_barang a")
							->join("stock_barang b","a.KdBarang=b.KdBarang AND b.Tahun='2018' AND b.Bulan='01'")
							->where("a.KdBarang",$KdBarang)
							->get()
							->row();
		}
	}
?>