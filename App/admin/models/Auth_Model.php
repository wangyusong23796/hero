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



class Auth_Model extends CI_Model{
	

	protected $config=array(
			'users' => 'admin_users', //用户表
			'groups' => 'admin_users_groups',// 用户组
			'routes'=> 'admin_users_routes' //用户访问规则表
	);
	
	/**
	*  构造函数初始化 数据库表
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function __construct($array = NULL)
	{
		parent::__construct();
		$this->load->database();
		if($array != NULL)
		{
			$this->config['users'] = $array['users'];
			$this->config['groups'] = $array['group'];
			$this->config['routes'] = $array['routes'];
		}
	}
	
	/**
	*  判断用户名是否存在
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return: true or false
	*/
	
	
	public function chackname($name=NULL)
	{
		$query = $this->db->get_where($this->config['users'],array('user'=>$name));
		if(!empty($query))
		{
			return true;
		}else
		{
			return false;
		}
		
	}
	
	
	/**
	*  判断用户名密码是否正确
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return: 正确返回对象本身,错误返回false
	*/
	
	public function chackpassword($name=NULL,$password=NULL,$token=null)
	{
		$password = base64_encode($password);
		if($this->chackname($name))
		{
			$query = $this->db->get_where($this->config['users'],array('user'=>$name,'password'=>$password));
			
			if(!empty($query))
			{
				$query_val = [];
				foreach($query->result_array() as $v)
				{
					$query_val = $v;
				}
				return $query_val;
			}else{
				return false;
			}
			
		}else
		{
			return false;
		}
		
	}
	
	
	
	
	
	/**
	*  获取用户名函数.
	* @date: 2015-4-10
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function getuser($id = NULL)
	{
		if($id!=NULL)
		{
			return $this->db->get_where($this->config['users'],array('id'=>$id))->result();
		}else
		{
			return $this->db->get($this->config['users'])->result();
		}
		
	}
	
	
	/**
	*  根据group获取routes
	* @date: 2015-4-19
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function getroutes($group=NULL)
	{
		$this->db->like('uid',$group);
		$this->db->from($this->config['groups']);
		$query = $this->db->get()->result();
		foreach($query as $v)
			$query = $v;
		
		return $this->geturl($query->routeid);
	}
	
	/**
	*  根据routesid 获取 url
	* @date: 2015-4-19
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function geturl($routes=NULL)
	{
		$route = explode(",",$routes);
		$this->db->where_in('id',$route);
		$this->db->from($this->config['routes']);
		$query = $this->db->get()->result();
		return $query;
	}
	
	
	
	
	
	
}