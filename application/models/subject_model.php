<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_Model extends CI_Model{
	public function display_subjects_offered($info)
	{
		$this->load->database('');
		$data = $this->db->get('subjects', $info);
		return $data->result();
	}
}
?>