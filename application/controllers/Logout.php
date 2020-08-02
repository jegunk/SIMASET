<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Logout extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			$this->keluar();
		}
		
		function keluar()
		{
			$this->session->unset_userdata('id_uer');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('id_userlevel');
			$this->session->unset_userdata('namauser');
			$this->session->sess_destroy();
			redirect('signin');
		}
	}
?>