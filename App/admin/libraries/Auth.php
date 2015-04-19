<?php

/**
*  Auth.php
* ==============================================
* 版权所有 2010-2016 http://www.wangyusong.com
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* ==============================================
* @date: 2015-4-10
* @author: wangyusong admin@wangyusong.com
* @version:
*/


class Auth{
	protected $CI;
	
	protected $config=array(
		'users' => 'admin_users', //用户表
		'group' => 'admin_users_groups',// 用户组
		'routes'=> 'admin_users_routes' //用户访问规则表
	);
	
	
	
	/**
	*  构造函数加载使用的库
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Auth_Model');
		$this->CI->load->helper('url');
		$this->CI->load->library('session');
		
	}
	
	
	/**
	*  用户注册方法
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	
	public function registr()
	{
		
		
	}
	
	
	/**
	*  用户登陆方法
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	
	public function login($user=null,$password=null,$remamberme = null,$time=null)
	{
		if($remamberme != null)
		{
			//记住密码方式的登陆
			//base64 加密当前登陆及时间
			
			$auth = $this->CI->Auth_Model->chackpassword($user,$passwor,$token);
			if($auth)
			{
				
				$this->CI->session->set_userdata("auth",$auth);
				$this->path();
				
			}else
			{
				
				redirect('/login');
				
			}
			
						
		}else{
			//普通方式的登陆
			
			$auth = $this->CI->Auth_Model->chackpassword($user,$password);
			
			if($auth)
			{
				$this->CI->session->set_userdata("auth",$auth);
				
				$this->path();
			}else
			{
				redirect('/login');
			}
		}
	}
	
	
	/**
	*  判断用户是否已经登陆
	* @date: 2015-4-19
	* @author: 王玉松 admin@wangyusong.com
	* @return: true or false
	*/

	public function check()
	{
		$auth = $this->CI->session->userdata("auth");
		
		$user = $this->user($auth['id']);

		if($user[0]->user == $auth['user'] && $user[0]->password == $auth['password'])
		{
			return true;
		}else {
			return false;
		}
		
	}
	
	/**
	*  检测用户是否有访问url的权限
	* @date: 2015-4-19
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function checkroute($id=NULL,$route = NULL)
	{
		//TODO 遍历用户组.
		$user = $this->user($id);
		foreach($user as $v)
			$user = $v;
		
		var_dump($user);
		die();
		//TODO 遍历出用户组中ROUTE 
		
		//TODO 逐条 判断.如果存在则返回true 不存在返回flase
		
		
		
	} 
	
	
	/**
	*  用户登出.
	* @date: 2015-4-19
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	
	public function logout()
	{
		if($this->CI->session->userdata("auth"))
		{
			$this->CI->session->unset_userdata('auth');
			$this->path();
		}
	}
	
	
	/**
	*  获取用户
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function user($id = NULL)
	{
		return $this->CI->Auth_Model->getuser($id);	
	}
	
	
	/**
	*  获取已经登陆的用户id
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function id()
	{
		
		return $this->CI->session->userdata("auth")['id'];
		
	}
	
	
	/**
	*  用户访问之后的跳转地址
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function path()
	{
		redirect(site_url('/'));
	}
	
	
	
}