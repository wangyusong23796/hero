<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class ErrorController extends CI_Controller{
	
	
	public function Error404()
	{
		$this->load->helper('url');
		$data['name'] = "错误页面404";
		$this->load->view('error404',$data);
	}
	
}