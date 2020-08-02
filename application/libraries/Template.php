<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Template
	{
		public $jsfile = NULL;
		public $pagination_perpage = NULL;
		public $pagination_url = NULL;
		public $pagination_totalrow = NULL;
		public $pagination_uri = NULL;
		
		public function __construct()
		{
			$this->CI =& get_instance();
		}
		
		public function index()
		{
			if(!$this->CI->session->userdata("id_user") && !$this->CI->session->userdata("user_name"))
			{
				redirect("signin");
			}
			else
			{
				redirect("beranda");
			}
		}
		
		public function breadcrumbs()
		{
			$segs = $this->CI->uri->segment_array();
			$html = "<ol class='breadcrumb'>";
			$maks = 3;
			for($posisi=1;$posisi<=count($segs);$posisi++)
			{
				if($posisi > 1 && $posisi < $maks)
				{
					$link = $segs[($posisi-1)]."/".$segs[$posisi];
					$links = base_url()."index.php/".$segs[($posisi-1)]."/".$segs[$posisi];
				}
				else
				{
					$link = "#";
					$links = "#";
				}
				
				$sql = "SELECT judul_menu,url FROM main_menu WHERE url='".$link."'";
				$pagename = $this->CI->db->select("judul_menu,url")->from("main_menu")->where("url",$link)->get()->row();
				if(count($pagename) > 0  && $posisi > 1 && $posisi < $maks)
				{
					$judul_menu = $pagename->judul_menu;
				}
				else
				{
					$judul_menu = ucwords($segs[$posisi]);
				}

				if(($posisi) < 4 && $judul_menu!="Index")
				{
					$html .= "<li><a href='".$links."'>".$judul_menu."</a></li>";
				}
			}
			$html .= "</ol>";
			return $html;
		}
		
		public function view($pages = 'home',$dataview = NULL)
		{
			if(! file_exists(APPPATH.'/views/pages/'.$pages.'.php'))
			{
				show_404();
			}
			
			$data['title'] = ucfirst($pages);
			$data['jsfile'] = $this->jsfile;
			$this->CI->load->view('templates/header',$data);
			$this->CI->load->view('pages/'.$pages,$dataview);
			$this->CI->load->view('templates/modal');
			$this->CI->load->view('templates/footer');
		}
	}
?>