<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Bom_model extends CI_Model
	{
		var $table = 'bill_of_material a';
		var $column_order = array(null, 'a.KdBarang','b.NamaBarang');
		var $column_search = array('a.KdBarang','b.NamaBarang');
		var $order = array('a.KdBarang' => 'asc');
		var $where = array();
		var $join = array("master_barang b"=>"a.KdBarang=b.KdBarang");
		function __construct()
		{
			parent::__construct();
		}
		
		function getList()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order,$this->where,$this->join);
			if($_POST['length'] != -1)
			{
				$this->db->limit($_POST['length'], $_POST['start']);
			}
			$query = $this->db->get();
			return $query->result();
		}

		function count_filtered()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order,$this->where,$this->join);
			$query = $this->db->get();
			return $query->num_rows();
		}

		function count_all()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order,$this->where,$this->join);
			return $this->db->count_all_results();
		}

		function insertNew($KdBarang,$KdBahanBaku,$Qty,$KdSatuanBarang,$KdSatuanBahanBaku)
		{
			$tablename = "bill_of_material";
			$data = array("KdBarang"=>$KdBarang,"KdBahanBaku"=>$KdBahanBaku,"Qty"=>$Qty,"KdSatuanBarang"=>$KdSatuanBarang,"KdSatuanBahanBaku"=>$KdSatuanBahanBaku);
			$this->db->insert($tablename,$data);
		}

		function saveUpdate($KdBarang,$KdBahanBaku,$Qty,$KdSatuanBarang,$KdSatuanBahanBaku)
		{
			$tablename = "bill_of_material";
			$data = array("KdBahanBaku"=>$KdBahanBaku,"Qty"=>$Qty,"KdSatuanBarang"=>$KdSatuanBarang,"KdSatuanBahanBaku"=>$KdSatuanBahanBaku);
			$clause = array("KdBarang"=>$KdBarang);
			$this->db->update($tablename,$data,$clause);
		}
		
		function delete($KdBarang)
		{
			$tablename = "bill_of_material";
			$clause = array("KdBarang"=>$KdBarang);
			$this->db->delete($tablename,$clause);
		}

		function getDetail($KdBarang)
		{
			return $this->db->select("a.*,b.NamaBarang,c.NamaBarang AS NamaBahanBaku,d.SatuanBarang as SatuanBarang,e.SatuanBarang AS SatuanBahanBaku")
							->from("bill_of_material a")
							->join("master_barang b", "a.KdBarang=b.KdBarang")
							->join("master_barang c", "a.KdBahanBaku=c.KdBarang")
							->join("master_satuan_barang d", "a.KdSatuanBarang=d.KdSatuanBarang")
							->join("master_satuan_barang e", "a.KdSatuanBahanBaku=e.KdSatuanBarang")
							->where("a.KdBarang",$KdBarang)
							->get()
							->row();
		}

		function updateFlagBom($KdBarang,$FlagBom)
		{
			$tablename = "master_barang";
			$data = array("FlagBom"=>$FlagBom);
			$clause = array("KdBarang"=>$KdBarang);
			$this->db->update($tablename,$data,$clause);
		}
		
		function getDataCetak($KdBarang)
		{
			return $this->db->select("a.*,b.NamaBarang,c.NamaBarang AS NamaBahanBaku,d.SatuanBarang as SatuanBarang,e.SatuanBarang AS SatuanBahanBaku")
							->from("bill_of_material a")
							->join("master_barang b", "a.KdBarang=b.KdBarang")
							->join("master_barang c", "a.KdBahanBaku=c.KdBarang")
							->join("master_satuan_barang d", "a.KdSatuanBarang=d.KdSatuanBarang")
							->join("master_satuan_barang e", "a.KdSatuanBahanBaku=e.KdSatuanBarang")
							->where("a.KdBarang",$KdBarang)
							->get()
							->row();
		}
	}
?>