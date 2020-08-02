<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Dept_model extends CI_Model
	{
		var $table = 'master_dept';
		var $column_order = array(null, 'kode_dept','nama_dept');
		var $column_search = array('kode_dept','nama_dept');
		var $order = array('kode_dept' => 'asc');

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

		function getkode($kode_dept)
		{
			return $this->db->select("*")
							->from("master_dept")
							->where("kode_dept",$kode_dept)
							->get()
							->row();
							
		} 

		function val_kode_dept($kode_dept)
		{
			$this->db->select("COUNT(*) AS jumlah");
			$this->db->from("master_dept");
			$this->db->where("kode_dept",$kode_dept);
			return $this->db->get()->row();
		}
		

		function insertNew($kode_dept,$nama_dept)
		{
			$tablename = "master_dept";
			$data = array("kode_dept"=>$kode_dept,"nama_dept"=>$nama_dept);
			$this->db->insert($tablename,$data);

			
		}

		function saveUpdate($kode_dept,$nama_dept)
		{
			$tablename = "master_dept";
			$data = array("nama_dept"=>$nama_dept);
			$clause = array("kode_dept"=>$kode_dept);
			$this->db->update($tablename,$data,$clause);
			
		}
		
		function deleteCheck($kode_dept)
		{
			$this->db->select("COUNT(*) AS jumlah");
			$this->db->from("trans_aset");
			$this->db->where(array("kode_dept"=>$kode_dept));
			return $this->db->get()->row();
		}

		function delete($kode_dept)
		{
			$tablename = "master_dept";
			$clause = array("kode_dept"=>$kode_dept);
			$this->db->delete($tablename,$clause);
		}

		
	}
?>