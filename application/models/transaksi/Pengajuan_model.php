<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Pengajuan_model extends CI_Model
	{
		var $table = 'trans_pengajuan a';
		var $column_order = array(null, 'a.kode_pengajuan','a.no_po','a.kode_anggaran','a.tgl_pengajuan','b.nama_dept','c.nama_jenis_barang');
		var $column_search = array('a.kode_pengajuan','a.no_po','a.kode_anggaran','a.tgl_pengajuan','b.nama_dept','c.nama_jenis_barang');
		var $order = array('a.kode_pengajuan' => 'asc');
		var $where = array();
		var $join = array("master_dept b"=>"a.kode_dept=b.kode_dept","master_jenis_barang c"=>"a.kode_jenis_barang=c.kode_jenis_barang");


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

		function getAllDept()
		{
			return $this->db->get("master_dept")->result_array();
		}

		function getAllJenisBarang()
		{
			return $this->db->get("master_jenis_barang")->result_array();
		}
		

		function insert($kode_pengajuan,$no_po,$kode_anggaran,$tgl_pengajuan,$kode_dept,$kode_jenis_barang,$nama_barang,$merk_barang,$tipe_barang,$warna_barang,$qty,$flag_aset)
		{
			$tablename = "trans_pengajuan";
			$data = array("kode_pengajuan"=>$kode_pengajuan,"no_po"=>$no_po,"kode_anggaran"=>$kode_anggaran,"tgl_pengajuan"=>$tgl_pengajuan,"kode_dept"=>$kode_dept,"kode_jenis_barang"=>$kode_jenis_barang,"nama_barang"=>$nama_barang,"merk_barang"=>$merk_barang,"tipe_barang"=>$tipe_barang,"warna_barang"=>$warna_barang,"qty"=>$qty,"flag_aset"=>$flag_aset);
			$this->db->insert($tablename,$data);
		}
 
		function getPengajuan($kode_pengajuan)
		{
			return $this->db->select("*")
							->from("trans_pengajuan")
							->where("kode_pengajuan",$kode_pengajuan)
							->get()
							->row();
		}
		
		function cekpengajuan($kode_pengajuan)
		{
        	$this->db->where('kode_pengajuan', $kode_pengajuan);  
           $query = $this->db->get("trans_pengajuan");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
    	}

		function updatedataPengajuan($kode_pengajuan,$no_po,$kode_anggaran,$tgl_pengajuan,$kode_dept,$kode_jenis_barang,$nama_barang,$merk_barang,$tipe_barang,$warna_barang,$qty,$flag_aset)
		{
			$tablename = "trans_pengajuan";
			$data = array("kode_pengajuan"=>$kode_pengajuan,"no_po"=>$no_po,"kode_anggaran"=>$kode_anggaran,"tgl_pengajuan"=>$tgl_pengajuan,"kode_dept"=>$kode_dept,"kode_jenis_barang"=>$kode_jenis_barang,"nama_barang"=>$nama_barang,"merk_barang"=>$merk_barang,"tipe_barang"=>$tipe_barang,"warna_barang"=>$warna_barang,"qty"=>$qty,"flag_aset"=>$flag_aset);
			$clause = array("kode_pengajuan"=>$kode_pengajuan);
			$this->db->update($tablename,$data,$clause);

		}

		function deletePengajuan($kode_pengajuan)
		{
		$this->db->delete("trans_pengajuan",array("kode_pengajuan"=>$kode_pengajuan));
		}

	} 
?>