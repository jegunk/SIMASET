<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class User_model extends CI_Model
	{
		var $table = 'main_user_application';
		var $column_order = array(null,'username','nama_user');
		var $column_search = array('username','nama_user');
		var $order = array('username' => 'asc'); 

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

		function getDept()
		{
			return $this->db->select("*")
							->from("master_dept")
							->get()
							->result_array();
		}
		
		function getAllUserLevel()
		{
			return $this->db->select("*")
							->from("main_user_level")
							->order_by("id_userlevel","ASC")
							->get()
							->result_array();
		}

		function insertNew($id_user,$nama_user,$kode_dept,$username,$password,$id_userlevel,$pict)
		{
			$tablename = "main_user_application";
			$data = array("id_user"=>$id_user,"nama_user"=>$nama_user,"kode_dept"=>$kode_dept,"username"=>$username,"password"=>md5($password),"id_userlevel"=>$id_userlevel,"gambar"=>$pict);
			$this->db->insert($tablename,$data);
		}

		function getDetail($id_user)
		{
			return $this->db->select("*")->from("main_user_application")->where("id_user",$id_user)->get()->row();
		}

		function saveUpdate($id_user,$nama_user,$kode_dept,$username,$id_userlevel,$pict)
		{
			$tablename = "main_user_application";
			$data = array("nama_user"=>$nama_user,"kode_dept"=>$kode_dept,"username"=>$username,"id_userlevel"=>$id_userlevel,"gambar"=>$pict);
			$clause = array("id_user"=>$id_user);

			$this->db->update($tablename,$data,$clause);
		}
		
		function saveUpdatePassword($id_user,$password)
		{
			$tablename = "main_user_application";
			$data = array("password"=>md5($password));
			$clause = array("id_user"=>$id_user);

			$this->db->update($tablename,$data,$clause);
		}

		function delete($id_user)
		{
			$tablename = "main_user_application";
			$clause = array("id_user"=>$id_user);

			$this->db->delete($tablename,$clause);
		}
	}
?>