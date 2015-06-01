<?php
require 'BaseController.php';

class news extends BaseController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('WebDocument');
		$this->load->model('WebArticles');
	}
	
	//显示文章方法.
	public function show($id=NULL)
	{
		if($id == NULL)
			show_404();	
		$document = $this->_Document_find($id);
		if(empty($document->toArray()))
			show_404();
		$article = $this->_WebArticles($document->id);
		if(empty($article->toArray()))
			show_404();
		
		//判断是否购买.
		
		
		// 已经购买直接显示 未购买跳转到购买页
	
		
		
		
		
		
		//显示详细内容页面
	}
	

	//默认显示列表方法
	public function index($name)
	{
		if($name == NULL)
			show_404();

		
		//根据栏目名称寻找栏目配置.
		$daohang = $this->_finddaohang($name);
		if($daohang === false){
			show_404();
		}
		//根据配置加载相应的视图.
		
		$this->data['name'] = $daohang['0']->name;
		
		$this->data['article'] = $this->_Document_daohang($daohang['0']->id);
		
		$this->load->view('public/head_article',$this->data);
		$this->load->view('news/index');
		$this->load->view('public/foot');
	}
	
	
	
	public function _Document_findtype($type)
	{
		$document= WebDocument::where('article_id','=',$type)->get();
		
		foreach($document as $v)
			$document = $v;
		return  $document;
	}
	
	public function _Document_daohang($type)
	{
		$document= WebDocument::where('daohang_id','=',$type)->get();

		return  $document;
	}
	
	
	public function _Document_find($id)
	{
		return WebDocument::find($id);
	}
	
	public function _WebArticles($did)
	{
		$web = WebArticles::where('document_id','=',$did)->get();
		foreach($web as $a)
			$web = $a;
		return $web;
	}
	
	
	public function _findlanmu($name)
	{
		$web = WebDocument::where('lanmumingcheng','=',$name)->get();
		foreach($web as $a)
			$web = $a;
		return $web;
	}
	
	public function _finddaohang($lanmuname)
	{
		//判断有没有此栏目.
		$this->load->model('WebDaohang');
		$daohang = WebDaohang::where('url','=',$lanmuname)->get();
		$a = $daohang->toArray();
		if(empty($a)){
			return false;
		}

		return $daohang;

	}
	
}