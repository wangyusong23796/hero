<?php
require "UserController.php";

class Config extends UserController
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->model('UsersConfig');
		//TODO 显示Home首页
		if($this->input->post())
		{
			//post 提交过来的..处理更新至
			$data = $this->input->post();

			$config  = UsersConfig::where('uid','=',$this->data['user']['uid'])->get();
			foreach($config as $v)
			{
				$config = $v;
			}
			
			if($config->toArray())
			{
				if($config->password == $data['oldpwd'])
					if($config->tswt == $data['safequestion'] && $config->daan == $data['safeanswer']){
						$config->password = $data['userpwd'];
						$config->safe_int = $data['userpwd'];
						$config->tswt = $data['newsafequestion'];
						$config->daan = $data['newsafeanswer'];
						
						if($config->save())
						{
							return redirect('user/config');
						}
				}else{
					
					show_404('参数填写错误');
					
				}
			}else{
				$config = new UsersConfig();
				$config->uid = $this->data['user']['uid'];
				$config->password = $data['userpwd'];
				$config->safe_int = $data['userpwd'];
				$config->tswt = $data['newsafequestion'];
				$config->daan = $data['newsafeanswer'];
				
				if($config->save())
				{
					return redirect('user/config');
				}

			}
			
		}else{
			//查询并显示
			$this->load->view('user/public/left',$this->data);
			$this->load->view('user/home/config');
		}

	}
}