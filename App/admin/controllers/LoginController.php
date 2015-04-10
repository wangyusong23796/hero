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
		$this->load->library('Auth');
	}
	
	
	/**
	*  登陆网站后台
	* @date: 2015-4-9
	* @author: wangyusong  admin@wangyusong.com
	* @return:
	*/

	public function index()
	{
		//var_dump($this->auth->user());
		//
		$data = $this->input->post();
		if(!empty($data))
		{
			if(!empty($data['rememberme']))
			{
				/* 记住密码登陆方式 */
				$auth = $this->auth->login($data['username'],$data['password'],true);
				
				if($auth)
				{
						
					echo '登陆成功!';
						
				}else{
						
					echo '登陆失败了';
				}
				
			}else
			{
				/* 普通登陆方式  */
				
				$auth = $this->auth->login($data['username'],$data['password']);
				
				if($auth)
				{
					
					echo '登陆成功!';
					
				}else{
					
					echo '登陆失败了';
				}
			}
			
		}else
		{
			$this->load->view('login');
		}
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