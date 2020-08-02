<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	class Beranda_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function getMedis()
		{
			return $this->db->query("SELECT SUM(qty) AS medis FROM trans_aset WHERE kode_jenis_barang='0906' and kode_status='1'")->row();
		}

		function getPerbaikan()
		{
			return $this->db->query("SELECT SUM(qty) AS perbaikan FROM trans_aset WHERE kode_status='2'")->row();
		}

		function getMusnah()
		{
			return $this->db->query("SELECT SUM(qty) AS musnah FROM trans_aset WHERE kode_status='4'")->row();
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

		function DataColumn($Tahun,$KdBarang)
		{
			return $this->db->query("SELECT a.* FROM mps a, master_barang b, master_satuan_barang c WHERE a.KdBarang=b.KdBarang AND a.KdSatuanBarang=c.KdSatuanBarang AND a.Tahun='$Tahun' AND a.KdBarang='$KdBarang'")->row();
		}

		function getDataBahanBaku($tahun,$bulan)
		{
			return $this->db->select("a.KdBarang,b.NamaBarang,c.SatuanBarang,a.StockAkhir")->from("stock_barang a")->join("master_barang b","a.KdBarang=b.KdBarang")->join("master_satuan_barang c","b.KdSatuanBarang1=c.KdSatuanBarang")->where(array("Tahun"=>$tahun,"Bulan"=>$bulan,"FlagBom"=>"T"))->get()->result();
		}
	}
?>