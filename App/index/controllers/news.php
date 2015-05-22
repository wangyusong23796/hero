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
	
	//默认路由方法
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
		//显示详细内容页面
	}
	
	
	public function index($id)
	{
		
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
	
}