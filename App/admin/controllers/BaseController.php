<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class BaseController extends CI_Controller {
	
	/**
	*  构造函数,判断是否有权限访问url
	* @date: 2015-4-9
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	public $data = [];
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library("Auth");
		//判断是否登陆.
		if(!$this->auth->check())
			show_404();
			//redirect('/login');
		//判断是否有访问权限
		if($this->uri->uri_string() != '')
		if(!$this->auth->checkroute($this->auth->id(),$this->uri->uri_string()))
				show_404();
		//有访问权限则写入routes
		//先判断一级大类目.
		//再判断二级中等类目.
		//再判断小级三等目录.
		
		$this->data['route']['gongzuotai'] = ['aaa','bbb'];
		//读取后台用户的基础信息.
		//$data['user'] = [];
	}
	
	
	

	//more code
		
	
	
	
	
}