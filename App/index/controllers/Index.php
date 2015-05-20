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



	
	/**
	*  析构函数 加载网站底部.
	* @date: 2015-4-26
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	public function __destruct()
	{


	}
}