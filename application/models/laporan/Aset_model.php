<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Aset_model extends CI_Model
	{ 
		
		function __construct()
		{
			parent::__construct();
		}

		function getAllStatus()
		{
			return $this->db->select("*")->from('master_status_aset')->get()->result_array();
		}

		function getData($kode_status,$tahun)
		{
			$sql = "SELECT a.*,b.nama_dept,c.nama_jenis_barang,d.nama_sumber 
					FROM trans_aset a, master_dept b, master_jenis_barang c,master_sumber_dana d
					WHERE a.kode_dept=b.kode_dept 
						AND	a.kode_sumber=d.kode_sumber
						AND a.kode_jenis_barang=c.kode_jenis_barang
						AND a.kode_status='$kode_status'
						AND a.tahun='$tahun'";
				return $this->db->query($sql)->result_array();	

		}

		function getTahun()
		{
			$sql = "SELECT DISTINCT tahun FROM trans_aset ORDER BY tahun DESC"; 
				return $this->db->query($sql)->result_array();	

		}

		function getNamaStatus($kode_status)
		{
			return $this->db->select("nama_status")
							->from("master_status_aset")
							->where("kode_status",$kode_status)
							->get()
							->row();

		}
	}
?>