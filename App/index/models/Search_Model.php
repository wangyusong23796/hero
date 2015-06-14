<?php if (! defined("BASEPATH")) exit ("No direct script access allowed");

class Search_Model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function getArticleByDaohangId($daohang_id,$page,$limit) {
        $sql="select * 
              from 
                  hero_web_documents 
              where 
              daohang_id =".$daohang_id." 
              order by id desc 
              limit ".$page.",".$limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function CountArticleByDaohangId($daohang_id){
        $sql = "select count(*) as count
                from 
                    hero_web_documents
                where 
                daohang_id =".$daohang_id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function getSecondNavNameByNavId($navId){
        $sql="SELECT
                	`name` AS nav_name,
                     url   AS url
                FROM
                	hero_web_daohangs
                WHERE
                	type = (
                		SELECT
                			type
                		FROM
                			hero_web_daohangs
                		WHERE
                			id = 3
                	)
                AND fid <> 0;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    
    function getSearch($content,$page,$limit){
        $sql="  SELECT
	                       *
                  FROM
                	    hero_web_documents
                 WHERE
                	    title LIKE '%".$content."%'
               UNION
                 SELECT
                		   *
                   FROM
                		 hero_web_documents
                  WHERE
                		 `key` LIKE '%".$content."%'
               UNION
                 SELECT
                		   *
                   FROM
                		  hero_web_documents
                  WHERE
                		  `desc` LIKE '%".$content."%'
                limit ".$page.",".$limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function countSearch($content){
        $sql=" select count(*) as count from (
            
              SELECT
	                       *
                  FROM
                	    hero_web_documents
                 WHERE
                	    title LIKE '%".$content."%'
               UNION
                 SELECT
                		   *
                   FROM
                		 hero_web_documents
                  WHERE
                		 `key` LIKE '%".$content."%'
               UNION
                 SELECT
                		   *
                   FROM
                		  hero_web_documents
                  WHERE
                		  `desc` LIKE '%".$content."%' 
                ) as web_documents";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
