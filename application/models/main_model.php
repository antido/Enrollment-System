<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Model extends CI_Model{
	public function login($username, $password)
	{
		$this->db->select('account_id, username, password');
		$this->db->from('accounts');
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function register_data()
	{
		$insertInfo = array(
			'first_name' => $this->input->post('fName'),
			'middle_name' => $this->input->post('mName'),
			'last_name' => $this->input->post('lName'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'contact_number' => $this->input->post('contactNum'),
			'home_address' => $this->input->post('homeAddr'),
			'created_date' => date('Y-m-d H:i:s'),
			'updated_date' => date('Y-m-d H:i:s')
		);

		$insertAccount = array(
			'account_type' => 'Student',
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'created_date' => date('Y-m-md H:i:s'),
			'updated_date' => date('Y-m-d H:i:s')
		);

		$this->db->insert('users', $insertInfo);
		$this->db->insert('accounts', $insertAccount);
	}

	public function get_data($info)
	{
		$this->load->database('');
		$data = $this->db->get('users', $info);
		return $data->result();
	}

	public function add_data()
	{
		$insert = array(
			'first_name' => $this->input->post('fName'),
			'middle_name' => $this->input->post('mName'),
			'last_name' => $this->input->post('lName'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'contact_number' => $this->input->post('contactNum'),
			'home_address' => $this->input->post('homeAddr'),
			'created_date' => date('Y-m-d H:i:s'),
			'updated_date' => date('Y-m-d H:i:s')
		);

		$this->db->insert('users', $insert);
	}

	public function edit_data($id)
	{
		$data = $this->db->get_where('users', array('user_id' => $id))->row();
		return $data;
	}

	public function update_data($id)
	{
		$update = array(
			'first_name' => $this->input->post('fName'),
			'middle_name' => $this->input->post('mName'),
			'last_name' => $this->input->post('lName'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'contact_number' => $this->input->post('contactNum'),
			'home_address' => $this->input->post('homeAddr'),
			'created_date' => $this->input->post('createdDate'),
			'updated_date' => date('Y-m-d H:i:s')
		);

		$this->db->where('user_id', $id);
		$this->db->update('users', $update);
	}

	public function delete_data($id)
	{
		$this->db->delete('users', array('user_id' => $id));
	}
}
?>