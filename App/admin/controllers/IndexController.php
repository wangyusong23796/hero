<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class IndexController extends BaseController {
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library('session');
		$this->load->library('Auth');
		
	}
	

	public function index()
	{
		
		$this->load->view('main');
	}
	
	
	/**
	*  top 最上方导航..
	* @date: 2015-4-19
	* @author: 王玉松 admin@wangyusong.com
	* @return:
	*/
	public function top()
	{
		if(empty($this->data['route']['top']))
			show_404();
		
		$this->data['user'] = $this->auth->user($this->auth->id());
	
		$this->load->view('top',$this->data);
	}
	
	/**
	 *  工作台 左侧导航
	 * @date: 2015-4-19
	 * @author: 王玉松 admin@wangyusong.com
	 * @return:
	 */
	public function gongzuotai()
	{
		if(empty($this->data['route']['gongzuotai']))
			show_404();
		//var_dump($this->data['route']['gongzuotai']);
		$this->load->view('left',$this->data);
	}
	


}