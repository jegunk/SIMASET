<?PHP 
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Aset_model extends CI_Model
	{
		var $table = 'trans_aset a';
		var $column_order = array(null, 'a.kode_aset','a.nama_barang','a.tipe_barang','c.nama_jenis_barang','b.nama_dept');
		var $column_search = array('a.kode_aset','a.nama_barang','a.tipe_barang','c.nama_jenis_barang','b.nama_dept');
		var $order = array('a.kode_aset' => 'asc');
		var $where = array();
		var $join = array("master_dept b"=>"a.kode_dept=b.kode_dept","master_jenis_barang
			 c"=>"a.kode_jenis_barang=c.kode_jenis_barang");

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

		function getPembelian()
    	{
    		return $this->db->get_where('trans_pengajuan',array('flag_aset'=>'T'));
    	}
		
		function cari($kode_pengajuan)
		{
        $query= $this->db->get_where('trans_pengajuan',array('kode_pengajuan'=>$kode_pengajuan));
        return $query;
    	}

    	function cekaset($kode_aset)
		{
        	$this->db->where('kode_aset', $kode_aset);  
           $query = $this->db->get("trans_aset");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
    	}
    	

		function getAllDept()
		{
			return $this->db->get("master_dept")->result_array();
		}

		function getAllSumber()
		{
			return $this->db->get("master_sumber_dana")->result_array();
		}

		function getAllJenisBarang()
		{
			return $this->db->get("master_jenis_barang")->result_array();
		}

		function getAllAset()
		{
			return $this->db->select("kode_aset")
							->from("trans_aset")
							->get()
							->result();
		}
		
		function insert($kode_aset,$kode_pengajuan,$nama_barang,$no_po,$merk_barang,$kode_anggaran,$tipe_barang,$warna_barang,$kode_dept,$qty,$kode_jenis_barang,$kode_sumber,$instansi,$tahun,$kode_status,$pict,$image_qr)
		{
			$tablename = "trans_aset";
			$data = array("kode_aset"=>$kode_aset,"kode_pengajuan"=>$kode_pengajuan,"nama_barang"=>$nama_barang,"no_po"=>$no_po,"merk_barang"=>$merk_barang,"kode_anggaran"=>$kode_anggaran,"tipe_barang"=>$tipe_barang,"warna_barang"=>$warna_barang,"kode_dept"=>$kode_dept,"qty"=>$qty,"kode_jenis_barang"=>$kode_jenis_barang,"kode_sumber"=>$kode_sumber,"instansi"=>$instansi,"tahun"=>$tahun,"kode_status"=>$kode_status,"gambar"=>$pict,"gambar_qr"=>$image_qr);
			$this->db->insert($tablename,$data);
		}
 
 		function updatePengajuanAset($kode_pengajuan,$flag_aset)
 		{
 			$tablename = "trans_pengajuan";
			$data = array("flag_aset"=>$flag_aset);
			$clause = array("kode_pengajuan"=>$kode_pengajuan);
			$this->db->update($tablename,$data,$clause);
 		}

		function getAset($kode_aset)
		{
			return $this->db->select("*")
							->from("trans_aset")
							->where("kode_aset",$kode_aset)
							->get()
							->row();
		}

		function getGambar($kode_aset)
		{
			return $this->db->select("gambar,gambar_qr,kode_pengajuan")
							->from("trans_aset")
							->where("kode_aset",$kode_aset)
							->get()
							->row();
		}
		
		
		function updatedataAset($kode_aset,$kode_pengajuan,$nama_barang,$no_po,$merk_barang,$kode_anggaran,$tipe_barang,$warna_barang,$kode_dept,$qty,$kode_jenis_barang,$kode_sumber,$instansi,$tahun,$pict)
		{
			$tablename = "trans_aset";
			$data = array("kode_aset"=>$kode_aset,"kode_pengajuan"=>$kode_pengajuan,"nama_barang"=>$nama_barang,"no_po"=>$no_po,"merk_barang"=>$merk_barang,"kode_anggaran"=>$kode_anggaran,"tipe_barang"=>$tipe_barang,"warna_barang"=>$warna_barang,"kode_dept"=>$kode_dept,"qty"=>$qty,"kode_jenis_barang"=>$kode_jenis_barang,"kode_sumber"=>$kode_sumber,"instansi"=>$instansi,"tahun"=>$tahun,"gambar"=>$pict);
			$clause = array("kode_aset"=>$kode_aset);
			$this->db->update($tablename,$data,$clause);

		}

		function deleteAset($kode_aset)
		{
		$this->db->delete("trans_aset",array("kode_aset"=>$kode_aset));
		}

	} 
?>