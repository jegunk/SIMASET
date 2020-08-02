<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Signin_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function login($username,$password)
		{
			$this->db->select("COUNT(*) AS jumlah");
			$this->db->from("main_user_application");
			$this->db->where(array("username"=>$username, "password"=>$password));
			return $this->db->get()->row();
		}
		
		function getUserData($username,$password)
		{
			$this->db->select("id_user AS Id,id_userlevel AS UserLevel,nama_user AS namauser,kode_dept AS kodedept");
			$this->db->from("main_user_application");
			$this->db->where(array("username"=>$username, "password"=>$password));
			return $this->db->get()->row();
		}
	
		function insertLog($userid,$username,$password,$useragent,$ip)
		{

			$tablename = "log_app_login";
			$data = array("userid"=>$userid,"username"=>$username,"password"=>$password,"useragent"=>$useragent,"ipaddress"=>$ip,"status"=>"Success Login");
			
			$this->db->insert($tablename, $data);
		}

		function getAset($kode_aset)
		{
			return $this->db->select('*')->from('trans_aset')->where("kode_aset",$kode_aset)->get()->row();
		}
		function getDept()
		{
			return $this->db->get("master_dept")->result_array();
		}
		function getStatus()
		{
			return $this->db->get("master_status_aset")->result_array();
		}
	}
?>