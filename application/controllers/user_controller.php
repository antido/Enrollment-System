<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller{
	public function register_form()
	{
		$this->load->view('register_form');
	}


	public function register_user()
	{
		$this->load->model('main_model');
		$this->main_model->register_data();
		redirect('main_controller');
	}

	public function add_form()
	{
		$this->load->view('add_form');
	}

	public function add_user()
	{
		$this->load->model('main_model');
		$this->main_model->add_data();
		redirect('main_controller/home');
	}

	public function user_info()
	{
		$id = $this->uri->segment(3);
		if($id == NULL){
			redirect('main_controller/home');
		}else{
			$this->load->model('main_model');
			$user_data = $this->main_model->edit_data($id);
			$data['fName'] = $user_data->first_name;
			$data['mName'] = $user_data->middle_name;
			$data['lName'] = $user_data->last_name;
			$data['age'] = $user_data->age;
			$data['gender'] = $user_data->gender;
			$data['contactNum'] = $user_data->contact_number;
			$data['homeAddr'] = $user_data->home_address;
			$data['createdDate'] = $user_data->created_date;
			$data['updatedDate'] = $user_data->updated_date;
			$data['id'] = $id;
			$this->load->view('update_form', $data);
		}
	}

	public function edit_user()
	{
		if($this->input->post('edit')){
			$id = $this->input->post('id');
			$this->load->model('main_model');
			$this->main_model->update_data($id);
			redirect('main_controller/home');
		}
	}

	public function delete_user()
	{
		$id = $this->uri->segment(3);
		$this->load->model('main_model');
		$this->main_model->delete_data($id);
		redirect('main_controller/home');
	}
}
?>