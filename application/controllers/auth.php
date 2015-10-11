<?php 
/**
* 
*/
class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model ('model_operator');
	}

	function login()
	{
		if (isset($_POST['submit'])) 
		{
			
			// proses login disini
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$hasil = $this->model_operator->login($username, $password);
			if ($hasil==1) 
			{
				// proses last login
				$this->db->where('username',$username);
				$this->db->update('operator',array('last_login'=>date('Y-m-d')));
				$this->session->set_userdata(array('status_login' =>'oke','username'=>$username));
				redirect ('dashboard'); 
			}
			else
			{
				redirect('auth/login');
			}
		}
			else
			{	

				check_session_login();
				// $this->load->view('form_login2');
				$this->template->load('template_login','form_login');
	
			}
	}

	function logout()
	{
		session_destroy();
		$this->session->sess_destroy();
		redirect ('auth/login');
	}
}



?>