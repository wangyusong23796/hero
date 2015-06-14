<?php


class UserController extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->_isUser();
		$this->data['user'] = $this->session->userdata('user');
	}
	
	public function _isUser()
	{
		if(!$this->session->userdata('is_login')){
			redirect(site_url('user/login'));
		};
	}
}