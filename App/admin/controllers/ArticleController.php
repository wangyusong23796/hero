<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'BaseController.php';

class ArticleController extends BaseController{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('WebDaohang');
		$this->load->model("Article_Model");
	}
	

	
	public function add()
	{
	    $data['name'] = '添加网站文章';
	    $daohang = WebDaohang::all();
	    $data['lanmu']= $daohang;
	    if($this->input->post())
	    {   
	        $daohang_id = $this->input->post('daohang_id');
	        $title = $this->input->post('title');
            $key = $this->input->post('key');
            $desc = $this->input->post('desc');
            $picurl = $this->input->post('picurl');
            $auther = $this->input->post('auther');
            $lanmumingcheng = $this->input->post('lanmumingcheng');
            $text = $this->input->post('text');
            if($daohang_id ==''){
                show_error("请选择所属栏目");
            }else if($title ==''){
                show_error("请添加标题");
            }else if ($daohang_id ==0 && $lanmumingcheng ==''){
                show_error("单页模式必须添加栏目名称");
            }else{
                $param = array(
                    "lanmumingcheng"=>$lanmumingcheng,
                    "title" =>$title,
                    "key" => $key,
                    "desc" => $desc,
                    "picurl" => $picurl,
                    "auther" =>$auther,
                    "daohang_id" =>$daohang_id
                );
                
                $querySave = $this->Article_Model->addArticle($param);
                $updateCount = $querySave["insertCount"];
                if($updateCount<1){
                    show_error("系统繁忙");
                }else{
                    $article_id = $querySave["id"];
                    var_dump($querySave);
                    $param2 = array(
                        "document_id" => $article_id,
                        "text" => $text
                    );
                    $querySave2 = $this->Article_Model->addArticleText($param2);
                    if($querySave2["insertCount"]<1){
                        show_error("系统繁忙");
                    }else{
                        return redirect('article/index/1');
                    }
                }
            }
	    }
		$this->load->view('article/add',$data);
	}
	
	public function index($curpage)
	{  
	    $pagenum = 5;   //每页显示数量
	    $query = $this->Article_Model->getAllArticle(($curpage-1)*$pagenum,$pagenum);
	    $result_array = $query->result(); 
	    $result_array_rows = $this->Article_Model->getCountArticle();
        $count = $result_array_rows->row()->num;//总数
        $data["result_array"] = $result_array;
        
        $pagecount =1;  //页数
        if($count%$pagenum ==0){
            $pagecount = $count / $pagenum;
        }else if($count%$pagenum >=1){
            $pagecount = ceil($count/$pagenum);
        }else{
            $pagecount = 1;
        }
        $data["count"]=$count;
        $data["curpage"] = $curpage;
        $data["pagecount"]= $pagecount;
		$this->load->view('article/index',$data);
	}
	
	public function update()
	{
	    if($this->input->post())
	    {   
	        $id = $this->input->post('id');
	        $daohang_id = $this->input->post('daohang_id');
	        $title = $this->input->post('title');
	        $key = $this->input->post('key');
	        $desc = $this->input->post('desc');
	        $picurl = $this->input->post('picurl');
	        $auther = $this->input->post('auther');
	        $lanmumingcheng = $this->input->post('lanmumingcheng');
	        $text = $this->input->post('text');
	        
	        $param1 = array(
	            "lanmumingcheng"=>$lanmumingcheng,
	            "title" =>$title,
	            "key" => $key,
	            "desc" => $desc,
	            "picurl" => $picurl,
	            "auther" =>$auther,
	            "daohang_id" =>$daohang_id
	        );
	        
	        $param2 = array(
	            "text" => $text
	        );
	        $flag1 = $this->Article_Model->updateArticleById($id,$param1);
	        $flag2 = $this->Article_Model->updateArticleTextById($id,$param2);
	        if($flag1 && $flag2){
	            return redirect('article/index/'.$id);
	        }else{
	            show_error("系统繁忙");
	        }
	        
	    }
	}
	
	public function delete($id)
	{
		$flag1 = $this->Article_Model->deleteArticleById($id);
		$flag2 = $this->Article_Model->deleteArticleTextById($id);
		return redirect('article/index/'.$id);
	}
	
	public function edit($id)
	{
	    $data['name'] = '修改网站文章';
	    $daohang = WebDaohang::all();
	    $data['lanmu'] = $daohang;
	    
	    $article = $this->Article_Model->getArticleById($id);
	    $data['article'] = $article;
		$this->load->view('article/edit',$data);
	}
	
	
}