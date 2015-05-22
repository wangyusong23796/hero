<?php

require 'BaseController.php';


class Index extends BaseController{
	
	public function __construct()
	{
		parent::__construct();

	}
	
	
	
	public function index()
	{
		//查询网站基本文章.
		 $this->load->view('index/index');
		 $this->load->view('public/foot');
	}
}