<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Userlevel_model extends CI_Model
	{
		var $table = 'main_user_level';
		var $column_order = array(null, 'id_userlevel','userlevel');
		var $column_search = array('id_userlevel','userlevel');
		var $order = array('id_userlevel' => 'asc');

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
		
		function getAllMenu()
		{
			return $this->db->select("a.*,b.id_jenis_menu,b.jenis_menu")
							->from("main_menu a")
							->join("main_jenis_menu b","b.id_jenis_menu=a.id_jenis_menu","left")
							->order_by("a.judul_menu","ASC")
							->get()
							->result_array();
		}
		
		function insertNewLevel($id_userlevel,$nama)
		{
			$tablename = "main_user_level";
			$data = array("id_userlevel"=>$id_userlevel,"userlevel"=>$nama);
			$this->db->insert($tablename,$data);
		}
		
		function saveUpdateLevel($id_userlevel,$nama)
		{
			$tablename = "main_user_level";
			$data = array("userlevel"=>$nama);
			$clause = array("id_userlevel"=>$id_userlevel);
			$this->db->update($tablename,$data,$clause);
		}
		
		function getHeader($userlevel='')
		{
			return $this->db->select("*")
							->from("main_user_level")
							->where("id_userlevel",$userlevel)
							->get()
							->row();
		}
		
		function getDetail($userlevel='')
		{
			$sql = "SELECT a.*,
						b.id_permission,
						b.id_userlevel,
						b.add,b.view,b.edit,b.delete,
						c.id_jenis_menu,
						c.jenis_menu FROM 
						(SELECT * FROM main_menu ORDER BY id_menu ASC) a 
						LEFT JOIN 
						(SELECT * FROM main_user_permission  WHERE id_userlevel='".$userlevel."') b
						ON a.id_menu = b.id_menu 
						LEFT JOIN 
						(SELECT * FROM main_jenis_menu) c 
						ON c.id_jenis_menu = a.id_jenis_menu 
					ORDER BY a.judul_menu ASC";

			return $this->db->query($sql)->result_array();
		}
		
		function cekAdaMenu($id_menu,$id_userlevel)
		{
			return $this->db->select("COUNT(*) AS jumlah")
							->from("main_user_permission")
							->where(array("id_menu"=>$id_menu,"id_userlevel"=>$id_userlevel))
							->get()
							->row();
		}
		
		function insertNew($id_menu,$id_userlevel)
		{
			$tablename = "main_user_permission";
			$data = array("id_userlevel"=>$id_userlevel,"id_menu"=>$id_menu,"add"=>"T","view"=>"T","edit"=>"T","delete"=>"T");
			return $this->db->insert($tablename,$data);
		}
		
		function saveUpdateReset($id_permission)
		{
			$tablename = "main_user_permission";
			$data = array("add"=>"T","view"=>"T","edit"=>"T","delete"=>"T");
			$clause = array("id_permission"=>$id_permission);
			return $this->db->update($tablename,$data,$clause);
		}
		
		function saveUpdateAdd($id_userlevel,$id_menu)
		{
			$tablename = "main_user_permission";
			$data = array("add"=>"Y");
			$clause = array("id_userlevel"=>$id_userlevel,"id_menu"=>$id_menu);
			return $this->db->update($tablename,$data,$clause);
		}
		
		function saveUpdateView($id_userlevel,$id_menu)
		{
			$tablename = "main_user_permission";
			$data = array("view"=>"Y");
			$clause = array("id_userlevel"=>$id_userlevel,"id_menu"=>$id_menu);
			return $this->db->update($tablename,$data,$clause);
		}
		
		function saveUpdateEdit($id_userlevel,$id_menu)
		{
			$tablename = "main_user_permission";
			$data = array("edit"=>"Y");
			$clause = array("id_userlevel"=>$id_userlevel,"id_menu"=>$id_menu);
			return $this->db->update($tablename,$data,$clause);
		}
		
		function saveUpdateDelete($id_userlevel,$id_menu)
		{
			$tablename = "main_user_permission";
			$data = array("delete"=>"Y");
			$clause = array("id_userlevel"=>$id_userlevel,"id_menu"=>$id_menu);
			return $this->db->update($tablename,$data,$clause);
		}
		
		function delete($id_userlevel)
		{
			$tablename1 = "main_user_permission";
			$clause1 = array("id_userlevel"=>$id_userlevel);
			$this->db->delete($tablename1,$clause1);
			
			$tablename = "main_user_level";
			$clause = array("id_userlevel"=>$id_userlevel);
			return $this->db->delete($tablename,$clause);
		}
	}
?>