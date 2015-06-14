<?php
require 'BaseController.php';

class news extends BaseController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('WebDocument');
		$this->load->model('WebArticles');
		$this->load->model('Article_Model');
		$this->load->library('pagination');
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
	public function index($name=NULL,$page=0)
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
		
		$secondNav = $this->Article_Model->getSecondNavNameByNavId($daohang['0']->id);
		
		
// 		$this->data['article'] = $this->_Document_daohang($daohang['0']->id);
		$this->data['secondNav'] =$secondNav;
		$count = $this->Article_Model->CountArticleByDaohangId($daohang['0']->id);
		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = 1;
	    $this->data['article'] = $this->Article_Model->getArticleByDaohangId($daohang['0']->id,$page,$config['per_page']);
		$config['base_url'] = site_url('news/'.$daohang['0']->url);
		
		
// 		//自定义起始链接
// 		$config['first_link'] = FALSE;             //你希望在分页的左边显示“第一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 
// 		$config['full_tag_open'] = '<li >';            //“第一页”链接的打开标签。
// 		$config['first_tag_close'] = '</li>';       //“第一页”链接的关闭标签。
		
		
// 		//自定义结束链接
// 		$config['last_link'] = FALSE;                //你希望在分页的右边显示“最后一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
// 		$config['last_tag_open'] = '<li >';           //“最后一页”链接的打开标签。
// 		$config['last_tag_close'] = '</li>';         //“最后一页”链接的关闭标签
		
		//自定义“下一页”链接
		$config['next_link'] = '下一页';                //你希望在分页中显示“下一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
		$config['next_tag_open'] = '<li class="left_b2a">';           //“下一页”链接的打开标签。
		$config['next_tag_close'] = '</li>';         //“下一页”链接的关闭标签。
		
		//自定义“上一页”链接
		$config['prev_link'] = '上一页';                //你希望在分页中显示“上一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 
		$config['prev_tag_open'] = '<li class="left_b2a">';           //“上一页”链接的打开标签。
		$config['prev_tag_close'] = '</li>';         //“上一页”链接的关闭标签。
		
		//自定义“当前页”链接
		$config['cur_tag_open'] = '<li class="left_b2bon">';              //“当前页”链接的打开标签。
		$config['cur_tag_close'] = '</li>';            //“当前页”链接的关闭标签。
		
		//自定义“数字”链接
		$config['num_tag_open'] = '<li class="left_b2b">';            //“数字”链接的打开标签。
		$config['num_tag_close'] = '</li>';          //“数字”链接的关闭标签。
		$this->pagination->initialize($config);
        
		$this->load->view('public/head_article',$this->data);
		$this->load->view('news/index');
		$this->load->view('public/foot');
	}
	
	public function search($search = null,$page=0){
	    if($this->input->get() && ($this->input->get('search')!=''||$search != null ) ){

	       $this->data['name'] = $this->input->get('search');
	        
	       $count = $this->Article_Model->countSearch($this->input->get('search')!='');
	       $config['total_rows'] = $count[0]['count'];
	       $config['per_page'] = 1;
	       
	       $searchContent = $this->Article_Model->getSearch($this->input->get('search'),$page,$config['per_page']);
	       $this->data['searchContent'] = $searchContent;
	       
	       $config['base_url'] =site_url("news/search/".$this->input->get('search'));
	       
	       // 		//自定义起始链接
	       // 		$config['first_link'] = FALSE;             //你希望在分页的左边显示“第一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE
	       // 		$config['full_tag_open'] = '<li >';            //“第一页”链接的打开标签。
	       // 		$config['first_tag_close'] = '</li>';       //“第一页”链接的关闭标签。
	       
	       
	       // 		//自定义结束链接
	       // 		$config['last_link'] = FALSE;                //你希望在分页的右边显示“最后一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
	       // 		$config['last_tag_open'] = '<li >';           //“最后一页”链接的打开标签。
	       // 		$config['last_tag_close'] = '</li>';         //“最后一页”链接的关闭标签
	       
	       //自定义“下一页”链接
	       $config['next_link'] = '下一页';                //你希望在分页中显示“下一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
	       $config['next_tag_open'] = '<li class="left_b2a">';           //“下一页”链接的打开标签。
	       $config['next_tag_close'] = '</li>';         //“下一页”链接的关闭标签。
	       
	       //自定义“上一页”链接
	       $config['prev_link'] = '上一页';                //你希望在分页中显示“上一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE
	       $config['prev_tag_open'] = '<li class="left_b2a">';           //“上一页”链接的打开标签。
	       $config['prev_tag_close'] = '</li>';         //“上一页”链接的关闭标签。
	       
	       //自定义“当前页”链接
	       $config['cur_tag_open'] = '<li class="left_b2bon">';              //“当前页”链接的打开标签。
	       $config['cur_tag_close'] = '</li>';            //“当前页”链接的关闭标签。
	       
	       //自定义“数字”链接
	       $config['num_tag_open'] = '<li class="left_b2b">';            //“数字”链接的打开标签。
	       $config['num_tag_close'] = '</li>';          //“数字”链接的关闭标签。
	       $this->pagination->initialize($config);
	       
	       
	       $this->load->view('public/head_article',$this->data);
	       $this->load->view('news/search');
	       $this->load->view('public/foot');
	    }else{
	        
	    }
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