<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class RouteController extends BaseController{
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Auth');
	}
	
	
	
	public function group()
	{
		
		$data['route'] = $this->auth->getmenu('1');
		$data['name'] = '权限组管理';
		$this->load->view('group/index',$data);
	}
	
	
	public function edit($id)
	{
		var_dump($this->auth->getmenu('1'));
	}
	
}