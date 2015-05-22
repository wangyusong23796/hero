<?php

class BaseController extends CI_Controller{
	
	protected $data=[];
	/**
	*  构造函数 加载网站头部
	* @date: 2015-4-26
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	/**
	*  构造函数 加载网站头部
	* @date: 2015-4-26
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function __construct()
	{
		parent::__construct();
		//TODO 查询基本配置.
		$this->load->model('WebConfig');
		$this->load->model('WebDaohang');
		$this->load->helper('clicktop');
		//TODO 查询网站底部链接.
		$this->data['webconfig'] = WebConfig::find(1);
		
		$this->data['topdaohang'] = $this->gettopdaohang();
		
		$this->data['foot'] = $this->getfoot(); 

		$this->load->view('public/head',$this->data);
	}
	
<<<<<<< HEAD
	public function gettopdaohang()
	{
		return WebDaohang::where('fid','=',0)->get();
	}

=======
	public function __construct()
	{
		echo 'start';
	}
	
	
	/**
	*  析构函数 加载网站底部.
	* @date: 2015-4-26
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	public function __destruct()
	{
		
		
		echo 'die';
	}
	
>>>>>>> eeaf7f2b9f733634454aec2bce25ae591f2abf7b
	
	public function getfoot()
	{
		return WebDaohang::where('fid','=',0)->get();
	}
}