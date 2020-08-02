<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	class Signin extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Signin_model');
			$this->load->library('user_agent');
		}
		
		function index()
		{
			$this->load->view('login');
			
		} 

		function login()
		{
			$username = $this->input->post("username");
			$password = md5($this->input->post("password"));
			$userprofile = $this->agent->agent_string();
			$ip = $this->input->ip_address();
			
			$login = $this->Signin_model->login($username,$password)->jumlah;
			if($login > 0)
			{
				$userdata = $this->Signin_model->getUserData($username,$password);
				$userid = $userdata->Id;
				$userlevel = $userdata->UserLevel;
				$namauser = $userdata->namauser;
				$kodedept = $userdata->kodedept;
				$this->Signin_model->insertLog($userid, $username,$password,$userprofile,$ip);

				$datasession = array("username" => $username, "id_user" => $userid, "id_userlevel" => $userlevel, "nama_user" => $namauser, "kode_dept" => $kodedept);
				$this->session->set_userdata($datasession);
				$this->session->set_flashdata(array("tipe" => "success", "msg" => "Berhasil login."));
				redirect("beranda");
			}
			else
			{
				
				$this->session->set_flashdata(array("tipe" => "danger", "msg" => "Username atau password salah."));
				redirect("signin");
			}
		}

		function cariAset()
		{
			$kode_aset = $this->input->post("kode_aset");
			$data['aset'] = $this->Signin_model->getAset($kode_aset);

			if($data['aset'])
			{
				$data['dept'] = $this->Signin_model->getDept();
				$data['status'] = $this->Signin_model->getStatus();
				$this->load->view('hasilcari',$data);				
			} else {

				$this->load->view('hasilcarisalah');	
			}


		}
	}
?>