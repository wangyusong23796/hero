<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use App\admin\models\AdminUser;
require 'BaseController.php';

class AdminUserController extends BaseController {

	public function __construct()
	{

		parent::__construct();
	}
	
	
	/**
	*  后台用户管理首页
	* tags
	* @param unknowtype
	* @return return_type
	* @author Wang yusong
	* @date 2015-5-5下午8:58:00
	* @version v1.0.0
	*/ 

	public function index()
	{
		$data['user'] = AdminUser::all();
		$data['name'] = '后台用户管理';
		//
		$this->load->view('adminuser/index',$data);
	}
	
	
	/**
	 *  后台用户管理编辑页
	 * tags
	 * @param unknowtype
	 * @return return_type
	 * @author Wang yusong
	 * @date 2015-5-5下午8:58:00
	 * @version v1.0.0
	 */
	
	
	public function edit($id)
	{
		
	}
	
	/**
	 *  后台用户删除
	 * tags
	 * @param unknowtype
	 * @return return_type
	 * @author Wang yusong
	 * @date 2015-5-5下午8:58:00
	 * @version v1.0.0
	 */
	
	public function delete($id)
	{
		
	}
	
	
	/**
	 *  后台用户删除
	 * tags
	 * @param unknowtype
	 * @return return_type
	 * @author Wang yusong
	 * @date 2015-5-5下午8:58:00
	 * @version v1.0.0
	 */
	
	public function create()
	{

		$this->load->view('adminuser/create');
	}	
	
	
}