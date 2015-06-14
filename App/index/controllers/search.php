<?php
require 'BaseController.php';

class search extends BaseController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('WebDocument');
		$this->load->model('WebArticles');
		$this->load->model('Search_Model');
		$this->load->library('pagination');
	}
	

	
	public function search($search = null,$page=0){
	    

           var_dump($page);
	       $this->data['name'] = $search;
 
	       $count = $this->Search_Model->countSearch($this->input->get('search')!='');
	       $config['total_rows'] = $count[0]['count'];
	       $config['per_page'] = 1;
	       
	       $searchContent = $this->Search_Model->getSearch($this->input->get('search'),$page,$config['per_page']);
	       $this->data['searchContent'] = $searchContent;
	       
	       $config['base_url'] =site_url("search/search/".$search);
	       
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

	}
	
	
}