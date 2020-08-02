<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Rusak_model extends CI_Model
	{
		var $table = 'trans_rusak a';
		var $column_order = array(null, 'a.kode_rusak','a.kode_aset','a.tgl_kerusakan','b.kode_status');
		var $column_search = array('a.kode_rusak','a.kode_aset','a.tgl_kerusakan');
		var $order = array('kode_rusak' => 'asc');
		var $where = array();
		var $join = array("trans_aset b"=>"a.kode_aset=b.kode_aset");

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

		function cari($kode_aset)
		{
        $query= $this->db->get_where('trans_aset',array('kode_aset'=>$kode_aset));
        return $query;
    	}

    	function cekrusak($kode_rusak)
		{
        	$this->db->where('kode_rusak', $kode_rusak);  
           $query = $this->db->get("trans_rusak");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
    	}

		function getAllAset()
		{
			return $this->db->get_where('trans_aset',array('kode_status'=>'1'));
		} 

		function getAllJenisBarang()
		{
			return $this->db->get("master_jenis_barang")->result_array();
		}

		function getAllStatus()
		{
			return $this->db->get("master_status_aset")->result_array();
		}

		function getAllDept()
		{
			return $this->db->get("master_dept")->result_array();
		}

		function getNamaDept($kode_dept)
		{
			return $this->db->select("*")
							->from("master_dept")
							->where("kode_dept",$kode_dept)
							->get()
							->row();
		}
		
		function getdetailaset($kode_aset)
		{
			$sql = "SELECT 
					a.kode_aset,
					b.nama_aktiva AS kode_aktiva1,
					c.nama_jenis_barang AS kode_jenis_barang1,
					a.nama_barang,
					d.nama_dept AS kode_dept1,
					a.gambar
					FROM trans_aset a,master_aktiva b,master_jenis_barang c,master_dept d
					WHERE a.kode_aktiva=b.kode_aktiva AND a.kode_jenis_barang=c.kode_jenis_barang AND a.kode_dept=d.kode_dept AND a.kode_aset='$kode_aset'";
			return $this->db->query($sql)->row();

		}

		function getdetailasetedit($kode_aset)
		{
			$sql = "SELECT 
					a.kode_aset,
					b.nama_aktiva AS kode_aktiva1,
					c.nama_jenis_barang AS kode_jenis_barang1,
					a.nama_barang,
					d.nama_dept AS kode_dept1,
					a.gambar
					FROM trans_aset a,master_aktiva b,master_jenis_barang c,master_dept d
					WHERE a.kode_aktiva=b.kode_aktiva AND a.kode_jenis_barang=c.kode_jenis_barang AND a.kode_dept=d.kode_dept AND a.kode_aset='$kode_aset'";
			return $this->db->query($sql)->result_array();
		}

		function insertRusak($kode_rusak,$kode_aset,$tgl_kerusakan,$qty,$keterangan,$flag_perbaikan)
		{
			$tablename = "trans_rusak";
			$data = array("kode_rusak"=>$kode_rusak,"tgl_kerusakan"=>$tgl_kerusakan,"kode_aset"=>$kode_aset,"qty"=>$qty,"keterangan"=>$keterangan,"flag_perbaikan"=>$flag_perbaikan);
			$this->db->insert($tablename,$data);
		}

		function updateFlagRusak($kode_aset,$flag_status)
		{
			$tablename = "trans_aset";
			$data = array("kode_status"=>$flag_status);
			$clause = array("kode_aset"=>$kode_aset);
			$this->db->update($tablename,$data,$clause);
		}
		

		function updatedataRusak($kode_rusak,$kode_aset,$tgl_kerusakan,$qty,$keterangan,$kode_anggaran)
		{
			$tablename = "trans_rusak";
			$data = array("kode_rusak"=>$kode_rusak,"kode_aset"=>$kode_aset,"tgl_kerusakan"=>$tgl_kerusakan,"qty"=>$qty,"keterangan"=>$keterangan,"kode_anggaran"=>$kode_anggaran);
			$clause = array("kode_rusak"=>$kode_rusak);
			$this->db->update($tablename,$data,$clause);
		}
	

		function getRusak($kode_rusak)
		{
			return $this->db->select("*")
							->from("trans_rusak")
							->where("kode_rusak",$kode_rusak)
							->get()
							->row();
		}

		function getRusakDetail($kode_rusak)
		{
			return $this->db->select("c.kode_rusak,c.kode_aset,c.keterangan,a.nama_barang,c.tgl_kerusakan,a.merk_barang, a.tipe_barang,a.warna_barang,b.nama_jenis_barang")
							->from("trans_rusak c")
							->join("trans_aset a","c.kode_aset=a.kode_aset")
							->join("master_jenis_barang b","a.kode_jenis_barang=b.kode_jenis_barang")
							->where("kode_rusak",$kode_rusak)
							->get()
							->row();
		}

		function getApproveBy($kode_rusak)
		{
			return $this->db->select("a.*")
							->from("trans_rusak b")
							->join("main_user_application a","b.id_user_approve=a.id_user")
							->where("kode_rusak",$kode_rusak)
							->get()
							->row();
		}

		function getKodeAset($kode_rusak)
		{
			return $this->db->select("kode_aset")
							->from("trans_rusak")
							->where("kode_rusak",$kode_rusak)
							->get()
							->row();
		}
		function getAsetAll($KdAset)
		{
			return $this->db->select("*")
							->from("trans_aset")
							->where("kode_aset","$KdAset")
							->get()
							->row();
		}

		
		function delete($kode_rusak)
		{
			
			$this->db->delete("trans_rusak",array("kode_rusak"=>$kode_rusak));
		}

	}
?>