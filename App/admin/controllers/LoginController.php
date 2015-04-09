<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class LoginController extends CI_Controller {
	
	
	/**
	*  默认构造函数
	* @date: 2015-4-9
	* @author: Administrator
	* @return:
	*/
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
	
	
	/**
	*  登陆网站后台
	* @date: 2015-4-9
	* @author: wangyusong  admin@wangyusong.com
	* @return:
	*/

	public function index()
	{
		
		
		
		$this->load->view('login');
	}
	
	/**
	*  后台用户登出
	* @date: 2015-4-9
	* @author: Administrator
	* @return:
	*/
	
	
	public function logout()
	{
		
	}




}