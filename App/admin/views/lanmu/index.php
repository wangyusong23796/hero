<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../../admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../admin/js/jquery.js"></script>
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
    <li><a href="<?php echo site_url('index')?>">首页</a></li>
    <li><a href="#"><?php echo $name?></a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">

        <a href="<?php echo site_url('lanmu/add')?>"><li class="click"><span><img src="../../admin/images/t01.png" /></span>添加</li></a>
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
		<th width="100px;">栏目名称</th>
		<th>是否显示</th>
        <th>操作</th>
    </tr>
    </thead>
    
    <tbody>
        <?php foreach($lanmu as $v):?>
        <tr>
           <td><?php echo $v->name;?></td>
           <td><?php if($v->name == 1){echo '是';}else{echo '否';}?></td>
           <td><a href="<?php echo site_url('lanmu/edit/'.$v->id)?>">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('lanmu/delete/'.$v->id)?>">删除</a></td>


        </tr>
    
        <?php endforeach;?>
    </tbody>
  
    
    
   
<!--     <div class="pagin">
    	<div class="message">共<i class="blue">1256</i>条记录，当前显示第&nbsp;<i class="blue">2&nbsp;</i>页</div>
        <ul class="paginList">
        <li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>
        <li class="paginItem"><a href="javascript:;">1</a></li>
        <li class="paginItem current"><a href="javascript:;">2</a></li>
        <li class="paginItem"><a href="javascript:;">3</a></li>
        <li class="paginItem"><a href="javascript:;">4</a></li>
        <li class="paginItem"><a href="javascript:;">5</a></li>
        <li class="paginItem more"><a href="javascript:;">...</a></li>
        <li class="paginItem"><a href="javascript:;">10</a></li>
        <li class="paginItem"><a href="javascript:;"><span class="pagenxt"></span></a></li>
        </ul>
    </div>
    
    
    <div class="tip">
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
