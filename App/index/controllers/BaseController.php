<?php

class BaseController extends CI_Controller{
	
	protected $data=[];

	
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
	

	public function gettopdaohang()
	{
		return WebDaohang::where('fid','=',0)->get();
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
	

	
	public function getfoot()
	{
		return WebDaohang::where('fid','=',0)->get();
	}
}