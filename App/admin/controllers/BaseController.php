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
		$user = $this->auth->user($this->auth->id());
		foreach($user as $v)
			$user = $v;
		//获取当前用户的routes
		$routes = $this->auth->getroutes($user->group);
		
		//获取顶级routes
		foreach($routes as $r)
		{
			//顶级
			if($r->fid == 0)
			{
				$this->data['route'][$r->route] = (array)$r;
			}
		}
		
		//获取2级route
		foreach($this->data['route'] as $v)
		{
			foreach($routes as $r){
				if($v['id'] == $r->fid)
				{
					$this->data['route'][$v['route']]['son'][$r->route] = (array)$r;
				}
			}
		}
		
		//获取3级 route
		foreach($this->data['route'] as $v){
			$sonname = '';
			if(empty($v['son']))
				continue;
		
			foreach($v['son'] as $s)
			{
		
				foreach($routes as $r)
				{
					//判断正在显示的.
					if($s['id'] == $r->fid && $r->status != 0)
					{
		
						$this->data['route'][$v['route']]['son'][$s['route']]['son'][] = (array)$r;
					}
				}
					
			}
		
		}
		}
		
	
	

	//more code
		
	
	
	
	
}