<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_Controller extends CI_Controller{
	public function subjects_offered()
	{
		$this->load->model('subject_model');
		$info['data'] = $this->subject_model->display_subjects_offered('subjects');
		$this->load->view('subjects/subject_offered', $info);
	}

	public function subjects_enrolled()
	{
		$this->load->view('subjects/subject_enrolled');
	}

	public function subjects_finished()
	{
		$this->load->view('subjects/subject_finished');
	}

	public function subject_info()
	{
		$subjId = $this->input->post('subjInfo');
		$this->load->model('subject_model');
		$result['info'] = $this->subject_model->subject_data($subjId);
		$this->load->view('subjects/subject_info', $result);
	}
}
?>