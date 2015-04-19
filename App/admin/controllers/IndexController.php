<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class IndexController extends BaseController {
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library('session');
		
	}
	

	public function index()
	{
		var_dump($this->session->all_userdata());
	}
	



}