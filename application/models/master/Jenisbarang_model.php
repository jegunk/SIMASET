<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Jenisbarang_model extends CI_Model
	{
		var $table = 'master_jenis_barang';
		var $column_order = array(null, 'kode_jenis_barang','nama_jenis_barang');
		var $column_search = array('kode_jenis_barang','nama_jenis_barang');
		var $order = array('kode_jenis_barang' => 'asc');

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

		function getkode($kode_jenis_barang)
		{
			return $this->db->select("*")
							->from("master_jenis_barang")
							->where("kode_jenis_barang",$kode_jenis_barang)
							->get()
							->row();
							//->order_by("kode_aset", "ASC")
		}

		
		

		function insertNew($kode_jenis_barang,$nama_jenis_barang)
		{
			$tablename = "master_jenis_barang";
			$data = array("kode_jenis_barang"=>$kode_jenis_barang,"nama_jenis_barang"=>$nama_jenis_barang);
			$this->db->insert($tablename,$data);

			/*for($Bulan=1;$Bulan<=12;$Bulan++)
			{
				$Tahun = 2018;

				$Bulan = str_pad($Bulan, 2, '0', STR_PAD_LEFT);


				$tablename1 = 'stock_barang';
				$data1 = array('Tahun'=>$Tahun, 'Bulan'=>$Bulan, 'KdBarang'=>$KdBarang,'StockAwal'=>$StockAwal,'StockMasuk'=>0,'StockKeluar'=>0,'StockAkhir'=>$StockAwal);
				$this->db->insert($tablename1,$data1);
			}*/
		}

		function saveUpdate($kode_jenis_barang,$nama_jenis_barang)
		{
			$tablename = "master_jenis_barang";
			$data = array("nama_jenis_barang"=>$nama_jenis_barang);
			$clause = array("kode_jenis_barang"=>$kode_jenis_barang);
			$this->db->update($tablename,$data,$clause);
			
		}

		function deleteCheck($kode_jenis_barang)
		{
			$this->db->select("COUNT(*) AS jumlah");
			$this->db->from("trans_aset");
			$this->db->where(array("kode_jenis_barang"=>$kode_jenis_barang));
			return $this->db->get()->row();
		}
		
		function delete($kode_jenis_barang)
		{
			$tablename = "master_jenis_barang";
			$clause = array("kode_jenis_barang"=>$kode_jenis_barang);
			$this->db->delete($tablename,$clause);
		}

	}
?>