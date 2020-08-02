<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Mrp_model extends CI_Model
	{
		var $table = 'mrp a';
		var $column_order = array(null, 'a.Tahun','a.KdBarang','b.NamaBarang','c.SatuanBarang');
		var $column_search = array('a.Tahun','a.KdBarang','b.NamaBarang','c.SatuanBarang');
		var $order = array('a.Tahun' => 'ASC', 'a.KdBarang'=>'ASC');
		var $where = array();
		var $join = array("master_barang b"=>"a.KdBarang=b.KdBarang", "master_satuan_barang c"=>"a.KdSatuanBarang=c.KdSatuanBarang");

		function __construct()
		{
			parent::__construct();
		}
		
		function getList()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order,$this->where,$this->join);
			if($_POST['length'] != -1)
			{
				$this->db->limit($_POST['length'], $_POST['start']);
			}
			$query = $this->db->get();
			return $query->result();
		}

		function count_filtered()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order,$this->where,$this->join);
			$query = $this->db->get();
			return $query->num_rows();
		}

		function count_all()
		{
			$this->modellib->get_datatables_query($this->table,$this->column_order,$this->column_search,$this->order,$this->where,$this->join);
			return $this->db->count_all_results();
		}

		function getDetailBarang($KdBarang)
		{
			$sql = "SELECT a.*,b.SatuanBarang FROM master_barang a, master_satuan_barang b WHERE a.KdSatuanBarang1=b.KdSatuanBarang AND a.KdBarang='$KdBarang'";
			return $this->db->query($sql)->row();
		}

		function getListBOM($KdBarang)
		{
			$sql = "SELECT KdBarang FROM bill_of_material WHERE KdBahanBaku='$KdBarang'";
			return $this->db->query($sql)->result_array();
		}

		function getListMPS($KdBarang,$Tahun)
		{
			$sql = "SELECT KdBarang, Tahun, Jan, Feb, Mar, Apr, Mei, Jun, Jul, Agu, Sep, Okt, Nov, Des FROM mps WHERE KdBarang='$KdBarang' AND Tahun='$Tahun'";
			return $this->db->query($sql)->row();
		}

		function getListBOM2($KdBarang)
		{
			$sql = "SELECT a.*,b.KonversiSatuan3 AS Konversi FROM bill_of_material a, master_barang b WHERE a.KdBahanBaku=b.KdBarang AND a.KdBarang='$KdBarang'";
			return $this->db->query($sql)->row();
		}

		function getDataPoH($Tahun,$Bulan,$KdBarang)
		{
			$sql = "SELECT Tahun, Bulan, KdBarang, StockAkhir AS Stock FROM stock_barang WHERE Tahun='$Tahun' AND Bulan='$Bulan' AND KdBarang='$KdBarang'";
			return $this->db->query($sql)->row();
		}

		function getDataSafetyStock($KdBarang)
		{
			$sql = "SELECT MinimalStock FROM master_barang WHERE KdBarang='$KdBarang'";
			return $this->db->query($sql)->row();	
		}

		function getDataLeadTime($KdBarang)
		{
			$sql = "SELECT '2' AS LeadTime FROM master_barang WHERE KdBarang='$KdBarang'";
			return $this->db->query($sql)->row();	
		}

		function getDataPORt($Tahun,$Bulan,$KdBarang)
		{
			$sql = "SELECT YEAR(a.TglKirim) AS Tahun, MONTH(a.TglKirim) AS Bulan, b.KdBarang, SUM(b.Qty) AS Qty FROM trans_purchase_order_header a, trans_purchase_order_detail b WHERE a.NoDokumen=b.NoDokumen AND YEAR(a.TglKirim)='$Tahun' AND MONTH(a.TglKirim)='$Bulan' AND b.KdBarang='$KdBarang' AND a.FlagReceive='T' GROUP BY b.KdBarang";
			return $this->db->query($sql)->row();	
		}

		function getDataPORel($Tahun,$Bulan,$KdBarang)
		{
			$sql = "SELECT YEAR(a.TglDokumen) AS Tahun, MONTH(a.TglDokumen) AS Bulan, b.KdBarang, SUM(b.Qty) AS Qty FROM trans_purchase_order_header a, trans_purchase_order_detail b WHERE a.NoDokumen=b.NoDokumen AND YEAR(a.TglDokumen)='$Tahun' AND MONTH(a.TglDokumen)='$Bulan' AND b.KdBarang='$KdBarang' AND a.FlagReceive='T' GROUP BY b.KdBarang";
			return $this->db->query($sql)->row();	
		}

		function insertNew($Tahun,$KdBarang,$KdSatuanBarang,$SR01,$SR02,$SR03,$SR04,$SR05,$SR06,$SR07,$SR08,$SR09,$SR10,$SR11,$SR12,
											$POH01,$POH02,$POH03,$POH04,$POH05,$POH06,$POH07,$POH08,$POH09,$POH10,$POH11,$POH12,
											$SS01,$SS02,$SS03,$SS04,$SS05,$SS06,$SS07,$SS08,$SS09,$SS10,$SS11,$SS12,
											$NR01,$NR02,$NR03,$NR04,$NR05,$NR06,$NR07,$NR08,$NR09,$NR10,$NR11,$NR12,
											$PORt01,$PORt02,$PORt03,$PORt04,$PORt05,$PORt06,$PORt07,$PORt08,$PORt09,$PORt10,$PORt11,$PORt12,
											$PORel01,$PORel02,$PORel03,$PORel04,$PORel05,$PORel06,$PORel07,$PORel08,$PORel09,$PORel10,$PORel11,$PORel12)
		{
			$tablename = "mrp";
			$data = array("Tahun"=>$Tahun,"KdBarang"=>$KdBarang,"KdSatuanBarang"=>$KdSatuanBarang,
											"SR01"=>$SR01,"SR02"=>$SR02,"SR03"=>$SR03,"SR04"=>$SR04,"SR05"=>$SR05,"SR06"=>$SR06,"SR07"=>$SR07,"SR08"=>$SR08,"SR09"=>$SR09,"SR10"=>$SR10,"SR11"=>$SR11,"SR12"=>$SR12,
											"POH01"=>$POH01,"POH02"=>$POH02,"POH03"=>$POH03,"POH04"=>$POH04,"POH05"=>$POH05,"POH06"=>$POH06,"POH07"=>$POH07,"POH08"=>$POH08,"POH09"=>$POH09,"POH10"=>$POH10,"POH11"=>$POH11,"POH12"=>$POH12,
											"SS01"=>$SS01,"SS02"=>$SS02,"SS03"=>$SS03,"SS04"=>$SS04,"SS05"=>$SS05,"SS06"=>$SS06,"SS07"=>$SS07,"SS08"=>$SS08,"SS09"=>$SS09,"SS10"=>$SS10,"SS11"=>$SS11,"SS12"=>$SS12,
											"NR01"=>$NR01,"NR02"=>$NR02,"NR03"=>$NR03,"NR04"=>$NR04,"NR05"=>$NR05,"NR06"=>$NR06,"NR07"=>$NR07,"NR08"=>$NR08,"NR09"=>$NR09,"NR10"=>$NR10,"NR11"=>$NR11,"NR12"=>$NR12,
											"PORt01"=>$PORt01,"PORt02"=>$PORt02,"PORt03"=>$PORt03,"PORt04"=>$PORt04,"PORt05"=>$PORt05,"PORt06"=>$PORt06,"PORt07"=>$PORt07,"PORt08"=>$PORt08,"PORt09"=>$PORt09,"PORt10"=>$PORt10,"PORt11"=>$PORt11,"PORt12"=>$PORt12,
											"PORel01"=>$PORel01,"PORel02"=>$PORel02,"PORel03"=>$PORel03,"PORel04"=>$PORel04,"PORel05"=>$PORel05,"PORel06"=>$PORel06,"PORel07"=>$PORel07,"PORel08"=>$PORel08,"PORel09"=>$PORel09,"PORel10"=>$PORel10,"PORel11"=>$PORel11,"PORel12"=>$PORel12);
			$this->db->insert($tablename,$data);
		}

		function getDetail($Tahun,$KdBarang)
		{
			return $this->db->select("*")->from("mrp a")->join("master_barang b", "a.KdBarang=b.KdBarang")->join("master_satuan_barang c", "a.KdSatuanBarang=c.KdSatuanBarang")->where("a.Tahun",$Tahun)->where("a.KdBarang",$KdBarang)->get()->row();
		}

		function delete($Tahun,$KdBarang)
		{
			$tablename = "mrp";
			$clause = array("Tahun"=>$Tahun,"KdBarang"=>$KdBarang);
			$this->db->delete($tablename,$clause);
		}

	}
?>