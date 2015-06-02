<?php 

require 'BaseController.php';


class Cg extends BaseController{
	
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('WebDocument');
		$this->load->model('WebArticles');
	}
	
	
	public function index()
	{
		//查询网站基本文章.
		$this->data['name'] = '首页';
		$this->data['zixun'] = WebDocument::where('typeid','=','1')->get();
		$this->data['shipin'] = WebDocument::where('typeid','=','2')->get();
		$this->data['tuwen'] = WebDocument::where('typeid','=','3')->get();
	
		//var_dump($this->session->userdata('user'));
	
		//var_dump($this->data['zixun'][0]);
		$this->load->view('public/head',$this->data);
		$this->load->view('index/index');
		$this->load->view('public/foot');
	}
	
	
}
?>