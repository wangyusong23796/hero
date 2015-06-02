<?php



class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->_is_login();
		
		//TODO 显示login视图.
		$this->data['name'] = '登陆';
		$this->load->view('public/head',$this->data);
		
		$this->load->view('public/foot');
	}
	
	public function returnindex()
	{
		
		if($this->session->userdata('is_login'))
		{
			$this->load->model("User");
			$user = $this->session->userdata('user');
			
			$count = User::where('uid','=',$user['uid'])->count();
			if($count > 0)
			{
				

				redirect(site_url('user/home'));
				
				
			}else{
				//创建账户
				$dbuser  = new User();
				$dbuser->uid = $user['uid'];
				$dbuser->image = $user['image'];
				$dbuser->username = $user['name'];
				$dbuser->nikename = $user['screen_name'];
				$dbuser->via = $user['via'];
				$dbuser->logintime = "now()";
				$dbuser->save();
				redirect(site_url('user/home'));
			}

			//show_error($this->session->userdata('info'));
			//echo $this->session->userdata('info');
		}else{
			
			//TODO 输出错误页面.
			show_error($this->session->userdata('info'));

		}
	
	}
	
	public function reg()
	{
		$this->_is_login();
		//TODO 显示reg视图
		$this->data['name'] = '注册';
		$this->load->view('public/head',$this->data);
		$this->load->view('public/foot');
	}
	
	public function returnreg()
	{
		//返回的注册
		
	}
	

	public function logout()
	{
			$this->session->set_flashdata('info',NULL);
			$this->session->set_userdata('user',NULL);
			$this->session->set_userdata('is_login',NULL);
			redirect(site_url('user/login'));
	}
	
	public function _is_login()
	{
		if($this->session->userdata('is_login')){
			redirect(site_url('user/home'));
		};
	}
	
	
}