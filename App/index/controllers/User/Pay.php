<?php


require "UserController.php";


class Pay extends UserController
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		//TODO 显示Home首页
		if($this->input->post())
		{
			//post 提交过来的..处理更新至
			//return redirect('user/pay');
			
			//显示充值的页面.选择支付方式
			
			
			
			
		}else{
			//查询并显示
			$this->load->view('user/public/left',$this->data);
			$this->load->view('user/home/pay');
		}
	}

}