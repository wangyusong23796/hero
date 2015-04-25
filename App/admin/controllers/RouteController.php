<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';
use App\admin\models\AdminUsersGroup;

class RouteController extends BaseController{
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('Auth');
	}
	
	
	
	public function group()
	{
		$data['groups'] = AdminUsersGroup::all();
		$data['route'] = $this->auth->getmenu('1');
		$data['name'] = '权限组管理';
		$this->load->view('group/index',$data);
		
	}
	
	
	public function edit($id=NULL)
	{
		if ($this->input->post())
		{
			//var_dump($this->input->post());
			$str = "";
			$route = $this->input->post();
			foreach($route['route'] as $v)
			{
				$str .= ",".$v;
			}
			$str  = substr($str,1);
			
			//group id ,$Str 字符串
			
			$this->auth->setgroup($id,$str);
			redirect('routes/group');
		}
		$data['routes']=$this->auth->getmenu($id,true);
		//获取到基本的结构.
		$data['name'] = '权限组管理';
		//TODO 发送到视图 并完成js
		$data['id'] = $id;
		
		//确定更改..
		$this->load->view('group/edit',$data);
	}
	
}