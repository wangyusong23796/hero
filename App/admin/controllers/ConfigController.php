<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class ConfigController extends BaseController{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('WebConfig');
			
	}
	
	/**
	*  网站基本配置
	* @date: 2015-5-17
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	
	public function web()
	{
		//echo 'a';
		//加载视图模板.
		//$this->webconfig->all();
		$config = WebConfig::all();
		foreach($config as $v)
			$config = $v;
		if ($this->input->post())
		{
			$post = $this->input->post();
			$config->titile = $post['titile'];
			$config->key = $post['key'];
			$config->desc = $post['desc'];
			$config->beian = $post['beian'];
			$config->banquan = $post['banquan'];
			$config->auth = $post['auth'];
			$config->pic_x = $post['pic_x'];
			$config->pic_y = $post['pic_y'];
			$config->status = $post['status'];
			if($config->save())
			{
				return redirect('config/web');
				
			}else{
				show_error('页面出错请找程序员!!');
			}
		}

		
		$data['config'] = $config;
		$data['name']  = "网站基本配置";
		//如果是post提交方式则更改数据库.
		$this->load->view('webconfig/index.php',$data);
	}
	
	
	
	public function reg()
	{
		echo 'show';
	}
	
}