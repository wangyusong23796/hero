<?php if (! defined("BASEPATH")) exit ("No direct script access allowed");

class Article_Model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllArticle($offside,$limit){
        $sql="select t1.id         as id,
                       t1.title      as title,
                       t2.name       as name
                from
                  hero_web_documents t1
                left join 
                  hero_web_daohangs  t2 
                on 
                 t1.daohang_id = t2.id
                order by         t1.id
                limit ".$offside.",".$limit;
        $query = $this->db->query($sql);
        return $query;
    }
    
    function getCountArticle(){
        $sql = "select count(*) as num
                from
                  hero_web_documents t1
                left join
                  hero_web_daohangs  t2
                on
                 t1.daohang_id = t2.id";
        $query = $this->db->query($sql);
        return $query;
    }
    
    function addArticle($data){
        $this->db->insert("hero_web_documents", $data);
        
        $query['id'] = $this->db->insert_id();
        $query['insertCount'] = $this->db->affected_rows();
        return $query;
    }
    
    function addArticleText($data){
         $this->db->insert("hero_web_articles", $data);
        $query['insertCount'] = $this->db->affected_rows();
        return $query;
    }
    
    function getArticleById($id) {
        $sql="SELECT
               t1.id      as id, 
	           t1.title,
               t2.id      as daohang_id,
	           t2. `name` as web_name,
	           t1. `key`  as web_key,
	           t1. `desc` as web_desc,
	           t1.picurl,
	           t1.auther,
	           t3.text,
	           t1.lanmumingcheng
             FROM
	               (
                    hero_web_documents  t1
		            LEFT JOIN 
                    hero_web_daohangs   t2 
                    ON 
                    t1.daohang_id = t2.id
	                )
             LEFT JOIN 
                    hero_web_articles   t3 
             ON 
               t1.id = t3.document_id
             WHERE
	         t1.id =".$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function updateArticleById($id, $data) {
        $this->db->where("id", $id);
        return $this->db->update("hero_web_documents", $data);
    }
    
    function updateArticleTextById($id, $data) {
        $this->db->where("id", $id);
        return $this->db->update("hero_web_articles", $data);
    }
    
    function deleteArticleById($id){
        return $this->db->delete('hero_web_documents', array('id' => $id));
    }
    
    function deleteArticleTextById($id){
        return $this->db->delete('hero_web_articles', array('document_id' => $id));
    }
    
    
}
