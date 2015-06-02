<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class ArticleController extends BaseController{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('WebDaohang');
	}
	

	
	public function add()
	{
		$this->load->view('article/add');
	}
	
	public function index()
	{
		$this->load->view('article/index');
	}
	
	public function update()
	{
		
	}
	
	public function delete()
	{
		//WebDaohang::destroy($id);
		return redirect('article/index');
	}
	
	public function edit()
	{
		
		$this->load->view('article/edit');
	}
	
	
}