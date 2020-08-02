<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Modellib
	{
		public function __construct()
		{
			$this->CI =& get_instance();
		}
		
		public function get_datatables_query($table,$column_order,$column_search,$order,$where=array(),$join=array(),$group=array())
		{	
			$this->CI->db->from($table);

			$i = 0;
		
			foreach ($column_search as $item) // loop column 
			{
				if($_POST['search']['value']) // if datatable send POST for search
				{
					
					if($i===0) // first loop
					{
						$this->CI->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
						$this->CI->db->like($item, $_POST['search']['value']);
					}
					else
					{
						$this->CI->db->or_like($item, $_POST['search']['value']);
					}

					if(count($column_search) - 1 == $i) //last loop
						$this->CI->db->group_end(); //close bracket
				}
				$i++;
			}

			if(count($group))
			{
				for($g=0;$g<count($group);$g++)
				{
					$this->CI->db->group_by($group[$g]);
				}
			}

			foreach ($join as $j => $v) 
			{
				$this->CI->db->join($j, $v);
			}

			foreach ($where as $w => $c) 
			{
				$this->CI->db->where($w, $c);
			}
			
			if(isset($_POST['order'])) // here order processing
			{
				$this->CI->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($order))
			{
				$order = $order;
				$this->CI->db->order_by(key($order), $order[key($order)]);
			}
		}
		
	}
?>