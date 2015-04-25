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
		
		$routes = $this->CI->Auth_Model->getroutes($user->group);
		//TODO 遍历出用户组中ROUTE 
		$ifroute = 0;
		foreach($routes as $routes_v)
		{

			//old $routes_v->route == $route
			//old strpos($route, $routes_v->route) === false
			//更改成正则表达式模式..
			//preg_match($routes_v->route,$route)
			$v = "{".$routes_v->route."}";
			
			if(preg_match($v,$route))
			{
				$ifroute = 1;
			}
		}
		if($ifroute == 1)
		{
			return true;
		}else
		{
			return false;
		}
		
		//TODO 逐条 判断.如果存在则返回true 不存在返回flase
		
		
		
	} 
	
	/**
	*  获取当前用户的Routes
	* @date: 2015-4-19
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function getroutes($group=NULL)
	{
		return $this->CI->Auth_Model->getroutes($group);
	}
	
	
	public function getmenu($group = NULL,$n=NULL)
	{
		$data = [];
// 		$user = $this->user($this->id());
// 		foreach($user as $v)
// 			$user = $v;
		//获取当前用户的routes
		if($n != NULL)
		{
			$routes = $this->getallroutes();
		}else{
			$routes = $this->groupgetroutes($group);
		}
		//获取顶级routes
		foreach($routes as $r)
		{
			//顶级
			if($r->fid == 0)
			{
				$data['route'][$r->route] = (array)$r;
			}
		}
		
		//获取2级route
		foreach($data['route'] as $v)
		{
			foreach($routes as $r){
				if($v['id'] == $r->fid)
				{
					$data['route'][$v['route']]['son'][$r->route] = (array)$r;
				}
			}
		}
		
		//获取3级 route
		foreach($data['route'] as $v){
			$sonname = '';
			if(empty($v['son']))
				continue;
		
			foreach($v['son'] as $s)
			{
		
				foreach($routes as $r)
				{
		
					if($s['id'] == $r->fid)
					{
		
						$data['route'][$v['route']]['son'][$s['route']]['son'][] = (array)$r;
					}
				}
					
			}
		
		}
		return $data;
	
	}
	
	/**
	*  函数用途描述
	* @date: 2015-4-20
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function groupgetroutes($group=NULL)
	{

		return $this->CI->Auth_Model->groupgetroutes($group);
	}
	
	
	/**
	*  获取所有lutous
	* @date: 2015-4-25
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function getallroutes()
	{
		return $this->CI->Auth_Model->getallroutes();
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
	
	
	/**
	*  设置权限组
	* @date: 2015-4-25
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function setgroup($id=NULL,$str=NULL)
	{
		return $this->CI->Auth_Model->setgroup($id,$str);
	}
	
}