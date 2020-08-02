<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Sumberdana_model extends CI_Model
	{
		var $table = 'master_sumber_dana';
		var $column_order = array(null, 'kode_sumber','nama_sumber');
		var $column_search = array('kode_sumber','nama_sumber');
		var $order = array('kode_sumber' => 'asc');

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

		function getkode($kode_sumber)
		{
			return $this->db->select("*")
							->from("master_sumber_dana")
							->where("kode_sumber",$kode_sumber)
							->get()
							->row();
							//->order_by("kode_aset", "ASC")
		}

		
		

		function insertNew($kode_sumber,$nama_sumber)
		{
			$tablename = "master_sumber_dana";
			$data = array("kode_sumber"=>$kode_sumber,"nama_sumber"=>$nama_sumber);
			$this->db->insert($tablename,$data);

		}

		function saveUpdate($kode_sumber,$nama_sumber)
		{
			$tablename = "master_sumber_dana";
			$data = array("nama_sumber"=>$nama_sumber);
			$clause = array("kode_sumber"=>$kode_sumber);
			$this->db->update($tablename,$data,$clause);
			
		}
		
		function deleteCheck($kode_sumber)
		{
			$this->db->select("COUNT(*) AS jumlah");
			$this->db->from("trans_aset");
			$this->db->where(array("kode_sumber"=>$kode_sumber));
			return $this->db->get()->row();
		}

		function delete($kode_sumber)
		{
			$tablename = "master_sumber_dana";
			$clause = array("kode_sumber"=>$kode_sumber);
			$this->db->delete($tablename,$clause);
			/*$tablename1 = "stock_barang";
			$clause1 = array("KdBarang"=>$KdBarang);
			$this->db->delete($tablename1,$clause1);*/
		}

	}
?>