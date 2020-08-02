<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Irf_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function getAllBarang()
		{
			return $this->db->select("*")->from('master_barang')->where('KdKategoriBarang','02')->get()->result_array();
		}

		function getDetailBarang($KdBarang)
		{
			return $this->db->select("a.*,b.SatuanBarang")->from('master_barang a')->join("master_satuan_barang b","a.KdSatuanBarang1=b.KdSatuanBarang")->where('a.KdBarang',$KdBarang)->get()->row();
		}

		function getData($Tahun,$KdBarang)
		{
			$sql = "SELECT 
						a.Tahun,
						a.Bulan,
						a.KdBarang,
						a.StockAkhir AS SOH,
						COALESCE(b.Qty,0) AS PA,
						COALESCE((a.StockAkhir+COALESCE(b.Qty,0)),0) AS Total
					FROM
					(
						SELECT * 
						FROM stock_barang 
						WHERE KdBarang='$KdBarang' 
						AND Tahun='$Tahun') a
					LEFT JOIN
					(
						SELECT YEAR(a.TglKirim) AS Tahun, MONTH(a.TglKirim) AS Bulan,b.KdBarang,SUM(b.Qty) AS Qty 
						FROM trans_purchase_order_header a, trans_purchase_order_detail b 
						WHERE a.NoDokumen=b.NoDokumen 
						AND a.FlagReceive='T'
						AND YEAR(a.TglKirim)='$Tahun' AND b.KdBarang='$KdBarang'
						GROUP BY b.KdBarang
					) b
					ON a.Tahun=b.Tahun AND a.Bulan=b.Bulan AND a.KdBarang=b.KdBarang";
			return $this->db->query($sql)->result_array();
		}
	}
?>