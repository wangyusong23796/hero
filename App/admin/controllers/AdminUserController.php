<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use App\admin\models\AdminUser;
require 'BaseController.php';

class AdminUserController extends BaseController {

	public function __construct()
	{

		parent::__construct();
	}
	

	public function index()
	{
		$data['user'] = AdminUser::all();
		$data['name'] = '后台用户管理';
		$this->load->view('adminuser/index',$data);
	}
	
	
	
}