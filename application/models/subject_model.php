<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_Model extends CI_Model{
	public function display_subjects_offered($info)
	{
		$this->load->database('');
		$data = $this->db->get('subjects', $info);
		return $data->result();
	}

	public function subject_data($subjId)
	{
		$this->db->select('*');
		$this->db->from('subjects');
		$this->db->where('subject_id', $subjId);
		$data = $this->db->get();
		return $data->result();
	}
}
?>