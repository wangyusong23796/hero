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
		
		
		//TODO 根据传递进来的id判断栏目类型.并显示相应的模板.
		
		
		
		//显示详细内容页面
	}
	

	//默认显示列表方法
	public function index($name)
	{
		if($name == NULL)
			show_404();
		$document = $this->_findlanmu($name);
		if(empty($document->toArray()))
			show_404();
		
		//根据栏目名称寻找栏目配置.
		
		//根据配置加载相应的视图.
		

		
		//var_dump($document);
		
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
	
}