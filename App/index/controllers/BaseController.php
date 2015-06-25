<?php

class BaseController extends CI_Controller{
	
	
	/**
	*  构造函数 加载网站头部
	* @date: 2015-4-26
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	
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
	
	
	
}