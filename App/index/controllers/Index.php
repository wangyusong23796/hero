<?php

require 'BaseController.php';


class Index extends BaseController{
	
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('WebDocument');
		$this->load->model('WebArticles');
	}
	
	
	
	public function index()
	{
		//查询网站基本文章.
		$this->data['zixun'] = WebDocument::where('typeid','=','1')->get();
		$this->data['shipin'] = WebDocument::where('typeid','=','2')->get();
		$this->data['tuwen'] = WebDocument::where('typeid','=','3')->get();
		
		//var_dump($this->data['zixun'][0]);
		$this->load->view('index/index');
		$this->load->view('public/foot');
	}
	
	
	
	public function display($name)
	{
		$this->load->model('WebDocument');
		$this->load->model('WebArticles');
		if($name == NULL)
			show_404();
		$document = $this->_finddisplay($name);
		if(empty($document->toArray()))
			show_404();
		if($document->typeid != 4)
			show_404();
		$article = $this->_WebArticles($document->id);
		$this->data['document'] = $document;
		$this->data['article'] = $article;
		//TODO 加载单页内容.
		$this->load->view('index/index');
		$this->load->view('public/foot');
	}
	
	
	public function _finddisplay($name)
	{
		$document = WebDocument::where('lanmumingcheng','=',$name)->get();
		foreach($document as $v)
			$document = $v;
		return $document;
	}
	
	public function _WebArticles($did)
	{
		$web = WebArticles::where('document_id','=',$did)->get();
		foreach($web as $a)
			$web = $a;
		return $web;
	}
	
	

}