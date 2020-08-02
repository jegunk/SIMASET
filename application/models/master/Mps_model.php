<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Mps_model extends CI_Model
	{
		var $table = 'mps a';
		var $column_order = array(null, 'a.Tahun','a.KdBarang','b.NamaBarang','c.SatuanBarang');
		var $column_search = array('a.Tahun','a.KdBarang','b.NamaBarang','c.SatuanBarang');
		var $order = array('a.Tahun' => 'ASC', 'a.KdBarang'=>'ASC');
		var $where = array();
		var $join = array("master_barang b"=>"a.KdBarang=b.KdBarang", "master_satuan_barang c"=>"a.KdSatuanBarang=c.KdSatuanBarang");

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

		function insertNew($Tahun,$KdBarang,$KdSatuanBarang,$Jan,$Feb,$Mar,$Apr,$Mei,$Jun,$Jul,$Agu,$Sep,$Okt,$Nov,$Des)
		{
			$tablename = "mps";
			$data = array("Tahun"=>$Tahun,"KdBarang"=>$KdBarang,"KdSatuanBarang"=>$KdSatuanBarang,"Jan"=>$Jan,"Feb"=>$Feb,"Mar"=>$Mar,"Apr"=>$Apr,"Mei"=>$Mei,"Jun"=>$Jun,"Jul"=>$Jul,"Agu"=>$Agu,"Sep"=>$Sep,"Okt"=>$Okt,"Nov"=>$Nov,"Des"=>$Des);
			$this->db->insert($tablename,$data);
		}

		function saveUpdate($Tahun,$KdBarang,$KdSatuanBarang,$Jan,$Feb,$Mar,$Apr,$Mei,$Jun,$Jul,$Agu,$Sep,$Okt,$Nov,$Des)
		{
			$tablename = "mps";
			$data = array("Jan"=>$Jan,"Feb"=>$Feb,"Mar"=>$Mar,"Apr"=>$Apr,"Mei"=>$Mei,"Jun"=>$Jun,"Jul"=>$Jul,"Agu"=>$Agu,"Sep"=>$Sep,"Okt"=>$Okt,"Nov"=>$Nov,"Des"=>$Des);
			$clause = array("Tahun"=>$Tahun,"KdBarang"=>$KdBarang,"KdSatuanBarang"=>$KdSatuanBarang);
			$this->db->update($tablename,$data,$clause);
		}
		
		function delete($Tahun,$KdBarang)
		{
			$tablename = "mps";
			$clause = array("KdBarang"=>$KdBarang,"Tahun"=>$Tahun);
			$this->db->delete($tablename,$clause);
		}

		function getData($Tahun,$KdBarang)
		{
			return $this->db->select("a.*,b.NamaBarang,c.SatuanBarang")
							->from("mps a")
							->join("master_barang b","a.KdBarang=b.KdBarang")
							->join("master_satuan_barang c","a.KdSatuanBarang=c.KdSatuanBarang")
							->where("a.Tahun",$Tahun)
							->where("a.KdBarang",$KdBarang)
							->get()
							->row();
		}
	}
?>