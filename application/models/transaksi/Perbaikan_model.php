<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Perbaikan_model extends CI_Model
	{
		var $table = 'trans_perbaikan a';
		var $column_order = array(null, 'a.kode_perbaikan','a.kode_rusak','b.kode_anggaran','a.tgl_perbaikan','b.flag_perbaikan');
		var $column_search = array('a.kode_perbaikan','a.kode_rusak','b.kode_anggaran');
		var $order = array('a.kode_perbaikan' => 'asc');
		var $where = array();
		var $join = array("trans_rusak b"=>"a.kode_rusak=b.kode_rusak");

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

		function getAllRusak()
		{
			return $this->db->get_where('trans_rusak',array('flag_perbaikan'=>'T'));
		}

		function cari($kode_rusak)
		{

        $query= "SELECT a.*,b.kode_dept,b.kode_jenis_barang FROM trans_rusak a, trans_aset b
        		WHERE a.kode_aset=b.kode_aset AND a.flag_perbaikan='T' AND a.kode_rusak='$kode_rusak'";
        return $this->db->query($query);
    	}
		
    	function cekperbaikan($kode_perbaikan)
		{
        	$this->db->where('kode_perbaikan', $kode_perbaikan);  
           $query = $this->db->get("trans_perbaikan");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
    	}

		function getAllJenisBarang()
		{
			return $this->db->get("master_jenis_barang")->result_array();
		}

		function getAllDept()
		{
			return $this->db->get("master_dept")->result_array();
		}
		function getdetailrusak($kode_rusak)
		{ 
			$sql = "SELECT 
					a.kode_rusak,
					a.kode_aset,
					b.nama_barang AS nama_barang1,
					a.keterangan,
					a.gambar
					FROM trans_rusak a, trans_aset b
					WHERE a.kode_aset=b.kode_aset AND a.kode_rusak='$kode_rusak'";
			return $this->db->query($sql)->row();

		}

		function getviewrusak($kode_rusak)
		{
			$sql = "SELECT 
					a.kode_rusak,
					a.kode_aset,
					b.nama_barang AS nama_barang1,
					a.keterangan,
					b.kode_dept,

					FROM trans_rusak a, trans_aset b
					WHERE a.kode_aset=b.kode_aset AND a.kode_rusak='$kode_rusak'";
			return $this->db->query($sql)->result_array();

		}

		function insertPerbaikan($kode_perbaikan,$kode_rusak,$tgl_perbaikan,$keterangan)
		{
			$tablename = "trans_perbaikan";
			$data = array("kode_perbaikan"=>$kode_perbaikan,"kode_rusak"=>$kode_rusak,"tgl_perbaikan"=>$tgl_perbaikan,"keterangan"=>$keterangan);
			$this->db->insert($tablename,$data);
		}

		function updateFlagPerbaikan($kode_rusak,$flag_perbaikan)
		{
			$tablename = "trans_rusak";
			$data = array("flag_perbaikan"=>$flag_perbaikan);
			$clause = array("kode_rusak"=>$kode_rusak);
			$this->db->update($tablename,$data,$clause);
		}

		function updateStatusAset($kode_aset,$flag_status)
		{
			$tablename = "trans_aset";
			$data = array("kode_status"=>$flag_status);
			$clause = array("kode_aset"=>$kode_aset);
			$this->db->update($tablename,$data,$clause);
		}

		function updatedataPerbaikan($kode_perbaikan,$kode_rusak,$tgl_perbaikan,$keterangan)
		{
			$tablename = "trans_perbaikan";
			$data = array("kode_perbaikan"=>$kode_perbaikan,"kode_rusak"=>$kode_rusak,"tgl_perbaikan"=>$tgl_perbaikan,"keterangan"=>$keterangan);
			$clause = array("kode_perbaikan"=>$kode_perbaikan);
			$this->db->update($tablename,$data,$clause);
		}
	
		function getNamaDept($kode_dept)
		{
			return $this->db->select("*")
							->from("master_dept")
							->where("kode_dept",$kode_dept)
							->get()
							->row();
		}

		function getPerbaikan($kode_perbaikan)
		{
			return $this->db->select("*")
							->from("trans_perbaikan")
							->where("kode_perbaikan",$kode_perbaikan)
							->get()
							->row();
		}

		function getViewPerbaikan($kode_perbaikan)
		{
			return $this->db->select("a.*,b.kode_aset,b.qty,b.kode_anggaran,c.kode_dept,c.kode_jenis_barang,c.nama_barang,c.tipe_barang,c.merk_barang,c.warna_barang,d.nama_dept,e.nama_jenis_barang")
							->from("trans_perbaikan a")
							->join("trans_rusak b","a.kode_rusak=b.kode_rusak")
							->join("trans_aset c","b.kode_aset=c.kode_aset")
							->join("master_dept d","c.kode_dept=d.kode_dept")
							->join("master_jenis_barang e","c.kode_jenis_barang=e.kode_jenis_barang")
							->where("kode_perbaikan",$kode_perbaikan)
							->get()
							->row();
		}

		function getPerbaikanDetail($kode_perbaikan)
		{
			return $this->db->select("a.nama_user,b.nama_dept,c.tgl_perbaikan,c.tgl_selesai,c.tgl_buat_form,c.flag_approve")
							->from("trans_perbaikan c")
							->join("main_user_application a","c.id_user=a.id_user")
							->join("master_dept b","a.kode_dept=b.kode_dept")
							->where("kode_perbaikan",$kode_perbaikan)
							->get()
							->row();
		}

		function getRusakDetail($kode_rusak)
		{
			return $this->db->select("a.*,b.nama_barang,b.spek_barang,c.nama_jenis_barang")
							->from("trans_rusak a")
							->join("trans_aset b","a.kode_aset=b.kode_aset")
							->join("master_jenis_barang c","b.kode_jenis_barang=c.kode_jenis_barang")
							->where("kode_rusak",$kode_rusak)
							->get()
							->row();
		}

		function getApproveBy($kode_perbaikan)
		{
			return $this->db->select("a.*")
							->from("trans_perbaikan b")
							->join("main_user_application a","b.id_user_approve=a.id_user")
							->where("kode_perbaikan",$kode_perbaikan)
							->get()
							->row();
		}

		function delete($kode_perbaikan)
		{
			
			$this->db->delete("trans_perbaikan",array("kode_perbaikan"=>$kode_perbaikan));
		}

	}
?>