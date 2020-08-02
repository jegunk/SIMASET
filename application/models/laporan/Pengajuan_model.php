<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Pengajuan_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function getAllAset()
		{
			return $this->db->select("*")->from('trans_pengajuan')->get()->result_array();
		}

		function getDetailBarang($KdBarang)
		{
			return $this->db->select("a.*,b.SatuanBarang")->from('master_barang a')->join("master_satuan_barang b","a.KdSatuanBarang1=b.KdSatuanBarang")->where('a.KdBarang',$KdBarang)->get()->row();
		}

		function getData($Tanggal1,$Tanggal2)
		{
			$sql = "SELECT a.*,b.nama_dept,c.nama_jenis_barang 
					FROM trans_pengajuan a, master_dept b, master_jenis_barang c 
					WHERE a.kode_dept=b.kode_dept 
						AND a.kode_jenis_barang=c.kode_jenis_barang
						AND a.tgl_pengajuan>='$Tanggal1'
						AND a.tgl_pengajuan<='$Tanggal2'";
				return $this->db->query($sql)->result_array();	

		}
	}
?>