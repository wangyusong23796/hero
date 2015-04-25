<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class ConfigController extends BaseController{
	
	public function __construct()
	{
		parent::__construct();
			
	}
	public function web()
	{
		echo 'a';
	}
	
	public function reg()
	{
		echo 'show';
	}
	
}