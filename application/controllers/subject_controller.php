<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_Controller extends CI_Controller{
	public function subjects_offered()
	{
		$this->load->model('subject_model');
		$info['data'] = $this->subject_model->display_subjects_offered('subjects');
		$this->load->view('subjects/subject_offered', $info);
	}
}
?>