<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class ColumnController extends BaseController{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('WebDaohang');
		$this->load->model('WebType');
	}
	
	
	public function index()
	{
		
		$daohang = WebDaohang::all();
		$data['name'] = '网站栏目管理';
		$data['lanmu'] = $daohang;
		$this->load->view('lanmu/index',$data);
	}
	
	
	
	public function add()
	{
		$data['name'] = '添加网站栏目';
		$daohang = WebDaohang::all();
		$data['lanmu'] = $daohang;
		$data['type'] = WebType::all();
		if($this->input->post())
		{
			$daohang = new WebDaohang();
			$post = $this->input->post();
			$daohang->name = $post['name'];
			$daohang->fid = $post['fid'];
			$daohang->type = $post['type'];
			$daohang->listviewpath = $post['listviewpath'];
			$daohang->articleviewpath = $post['articleviewpath'];
			$daohang->viewpath = $post['viewpath'];
			$daohang->display = $post['display'];
			if($daohang->save())
			{
				return redirect('lanmu/index');
				
			}else{
				show_error("网站栏目保存出错");
			}
			
			
		}else{
			$this->load->view('lanmu/add',$data);
		}
	}
	
	public function edit($id)
	{
		$daohang = WebDaohang::find($id);
		
		$data['daohang'] = $daohang;
		$this->load->view('lanmu/edit',$data);
	}
	
	public function update()
	{
		if ($this->input->post())
		{
			$post = $this->input->post();
			
		}
	}
	
	
	public function delete($id)
	{
		WebDaohang::destroy($id);
		return redirect('lanmu/index');
	}
}