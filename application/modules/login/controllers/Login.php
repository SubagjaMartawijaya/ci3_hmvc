<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('otentikasi/auth');
	}

	public function index()
	{
		$this->load->view('vw_login');
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->auth->login_user($username,$password))
		{
			redirect('home');
		}
		else
		{
			$this->session->set_flashdata('error','The username and password you entered did not match our record. please double-check and try again');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}

	

}