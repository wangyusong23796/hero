<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class BaseController extends CI_Controller {
	
	/**
	*  构造函数,判断是否有权限访问url
	* @date: 2015-4-9
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library("Auth");
		//判断是否登陆.
		if(!$this->auth->check())
			show_404();
			//redirect('/login');
		//判断是否有访问权限

		if(!$this->auth->checkroute($this->auth->id(),$this->uri->uri_string()))
				show_404();
	}
	
	
	

	//more code
		
	
	
	
	
}