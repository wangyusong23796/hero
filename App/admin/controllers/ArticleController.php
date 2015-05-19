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
	
	}
	
	public function index()
	{
	
	}
	
	public function update()
	{
	
	}
	
	public function delete()
	{
	
	}
	
	public function edit()
	{
	
	}
	
	
}