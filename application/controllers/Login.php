<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$meta['page_title'] = 'Login';
		$data['page_title'] = 'Login';
		$this->load->view('common/blank_header',$meta);
		$this->load->view('login',$data);
		$this->load->view('common/blank_footer');
	}
}
?>