<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	class Chart_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
 
		function getAllBarang()
		{
			return $this->db->select("*")->from("master_barang")->where("FlagBom","Y")->get()->result();
		}

		function DataKategori()
		{
			return $this->db->query("SELECT nama_jenis_barang, 
							SUM(IF(kode_status = '1', qty, 0)) AS Total
							FROM trans_aset LEFT JOIN master_jenis_barang USING(kode_jenis_barang)
							GROUP BY nama_jenis_barang")->result();
		}
		function DataStatus()
		{
			return $this->db->query("SELECT nama_status, 
							SUM(qty) AS Total
							FROM trans_aset LEFT JOIN master_status_aset USING(kode_status)
							GROUP BY nama_status")->result();
		}

		function DataPie()
		{
			return $this->db->query("SELECT nama_dept, 
							SUM(IF(kode_status = '1', qty, 0)) AS Total
							FROM trans_aset LEFT JOIN master_dept USING(kode_dept)
							GROUP BY nama_dept")->result();
		}

		
	}
?>