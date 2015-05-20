<?php

require 'BaseController.php';


class Article extends BaseController{

	public function __construct()
	{
		parent::__construct();
	}
	
	
	
	public function index()
	{
		
		 $this->load->view('article/index');
		 $this->load->view('public/foot');
	}

}