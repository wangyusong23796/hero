<?php


require "UserController.php";

class Home extends UserController
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		//TODO 显示Home首页
		$this->load->view('user/public/left',$this->data);
		$this->load->view('user/home/index');
	}

}