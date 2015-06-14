<?php


require "UserController.php";


class Operation extends UserController
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

	
			//查询并显示
			$this->load->view('user/public/left',$this->data);
			$this->load->view('user/home/operation');
	}

}