<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';
use App\admin\models\AdminUsersGroup;

class RouteController extends BaseController{
	
	
	public function __construct()
	{
		parent::__construct();
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
		//$this->auth->getmenu($id)
		//获取到基本的结构.
		
		//TODO 发送到视图 并完成js
		
		
		//确定更改..
	}
	
}