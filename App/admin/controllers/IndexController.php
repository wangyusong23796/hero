<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class IndexController extends BaseController {
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library('session');
		
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
		$this->load->view('top');
	}
	
	/**
	 *  lift 左侧导航
	 * @date: 2015-4-19
	 * @author: 王玉松 admin@wangyusong.com
	 * @return:
	 */
	public function left()
	{
		$this->load->view('left');
	}
	


}