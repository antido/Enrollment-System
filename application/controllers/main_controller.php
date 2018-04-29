<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller{
	public function index()
	{
		$this->load->view('login');
	}

	public function verify_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');
		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}else{
			redirect('main_controller/home');
		}
	}

	public function check_database($password)
	{
		$username = $this->input->post('username');
		$this->load->model('main_model');
		$result = $this->main_model->login($username, $password);
		if($result){
			$session_array = array();
			foreach($result as $row){
				$session_array = array(
					'id' => $row->account_id,
					'username' => $row->username
				);
				$this->session->set_userdata('logged_in', $session_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('check_database', 'Invalid Username or Password');
			return false;
		}
	}

	public function home()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$this->load->model('main_model');
			$info['data'] = $this->main_model->get_data('users');
			$this->load->view('main', $info);
		}else{
			redirect('main_controller');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('main_controller');
	}
}
?>