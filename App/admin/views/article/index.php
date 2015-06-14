<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admin/js/jquery.js"></script>
<script language="javascript">
$(function(){	
	//导航切换
	$(".imglist li").click(function(){
		$(".imglist li.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>
<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>
</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="">首页</a></li>
    <li><a href="#"></a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">

        <a href="<?=site_url('article/add')?>"><li class="click"><span><img src="/admin/images/t01.png" /></span>添加</li></a>
<!--         <li class="click"><span><img src="../../admin/images/t02.png" /></span>修改</li>
        <li><span><img src="../../admin/images/t03.png" /></span>删除</li>
        <li><span><img src="../../admin/images/t04.png" /></span>统计</li> -->

        </ul>
        
<!--         
        <ul class="toolbar1">
        <li><span><img src="../../admin/images/t05.png" /></span>设置</li>
        </ul> -->
    
    </div>
    
    <table class="imgtable">
    
    <thead>
    <tr>
		<th width="100px;">ID</th>
		<th>文章标题</th>
        <th>所属栏目</th>
        <th>操作</th>
    </tr>
    </thead>
    <?php if(!empty($result_array)){?>
    <tbody>
        <?php foreach($result_array as $v){?>
        <tr>
    
           <td><?=$v->id ?></td>
           <td> <?=$v->title ?></td>
           <td> <?=$v->name ?></td>
           <td><a href="<?=site_url('article/edit/'.$v->id)?>">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=site_url('article/delete/'.$v->id)?>">删除</a></td>

        </tr>
    
        <?php }?>
    </tbody>
  
  </table>
  
  <!--  <li ><a href="<?=site_url('article/index/1')?>">首页</a></li>
    
    <?php if($curpage!=1){?>
    <li ><a href="<?=site_url('article/index/'.($curpage-1))?>">上一页</a></li>
    <?php }else{?>
    <li >上一页</li>
    <?php }?>
    
    <?php for($i=1;$i<=$pagecount;$i++){?>
    <li><a href="<?=site_url('article/index/'.$i)?>"><?=$i?></a></li>
    <?php }?>
    <li ><a href="<?=site_url('article/index/'.($curpage+1))?>">下一页</a></li>
    
    <li ><a href="<?=site_url('article/index/'.$pagecount)?>">尾页</a></li>-->
    
   
     <div class="pagin">
    	<div class="message">共<i class="blue"><?=$count?></i>条记录，当前显示第&nbsp;<i class="blue"><?=$curpage?>&nbsp;</i>页</div>
        <ul class="paginList">
        <?php if($curpage!=1){?>
        <li class="paginItem"><a href="<?=site_url('article/index/'.($curpage-1))?>"><span class="pagepre"></span></a></li>
        <?php }else{?>
        <li class="paginItem"><a href=""><span class="pagepre"></span></a></li>
        <?php }?>
        
        <?php if($curpage-2>0){?>
        <li class="paginItem"><a href="<?=site_url('article/index/'.($curpage-2))?>"><?=$curpage-2?></a></li>
        <?php }?>
        
        <?php if($curpage-1>0){?>
        <li class="paginItem"><a href="<?=site_url('article/index/'.($curpage-1))?>"><?=$curpage-1?></a></li>
        <?php }?>
        <li class="paginItem current"><a href="javascript:;"><?=$curpage?></a></li>
        
        <?php if($curpage+1<=$pagecount){?>
        <li class="paginItem"><a href="<?=site_url('article/index/'.($curpage+1))?>"><?=$curpage+1?></a></li>
        <?php }?>
        
        <?php if($curpage+2<=$pagecount){?>
        <li class="paginItem"><a href="<?=site_url('article/index/'.($curpage+2))?>"><?=$curpage+2?></a></li>
        <?php }?>
        
        <li class="paginItem more"><a href="javascript:;">...</a></li>
        <li class="paginItem"><a href="<?=site_url('article/index/'.$pagecount)?>"><?=$pagecount?></a></li>
        
        <?php if($pagecount!=$curpage){?>
        <li class="paginItem"><a href="<?=site_url('article/index/'.$pagecount)?>"><span class="pagenxt"></span></a></li>
        <?php }else{?>
        <li class="paginItem"><a href=""><span class="pagenxt"></span></a></li> 
        <?php }?>
        </ul>
    </div>
    
    <?php }?>
  <!--  <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    
    
    
    </div>
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="../../admin/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div> -->
    
<script type="text/javascript">
	$('.imgtable tbody tr:odd').addClass('odd');
	</script>
    

</body>
</html>