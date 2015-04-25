<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $name?></title>
<link href="../../../admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../admin/js/jquery.js"></script>
<script language="javascript">
$(function(){	
	//导航切换
	$(".imglist li").click(function(){
		$(".imglist li.selected").removeClass("selected")
		$(this).addClass("selected");
	})

    $("#title").click(function(event) {
        /* Act on the event */
        $('#title > input').attr({
            checked: 'checked'
        });
    });

})	



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
    
<!--     <div class="tools">
    
    	<ul class="toolbar">

        <li class="click"><span><img src="../../../admin/images/t01.png" /></span>添加</li>
        <li class="click"><span><img src="../../admin/images/t02.png" /></span>修改</li>
        <li><span><img src="../../admin/images/t03.png" /></span>删除</li>
        <li><span><img src="../../admin/images/t04.png" /></span>统计</li>

        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="../../admin/images/t05.png" /></span>设置</li>
        </ul>
    
    </div> -->
    
    
  <table cellspacing="0" cellpadding="0" width="100%" class="imgtable">
        <thead>
        <tr>
            <th>
                系统模块
            </th>
            <th>
                二级目录
            </th>
            <th>权限类目</th>
        </tr>
        </thead>

<?php echo form_open('routes/edit/'.$id)?>
        <input type="hidden" name="route[]" value="4"/>

            <tbody>

                <?php foreach($routes as $r){?>
                    <?php foreach($r as $c){?>
                        <?php if(!empty($c['son'])){?>
                            <tr>
                                    <td>
                                        <?php echo $c['name']?><input type="checkbox" name="route[]" value="<?php echo $c['id']?>" checked/>
                                    </td>
                                    <td>
                                        <?php foreach($c['son'] as $s){?>
                                        <table border="0">
                                            <tr>
                                                <td>
                                                <input type="checkbox" name="route[]" value = "<?php echo $s['id']?>" checked />
                                                    &nbsp;<?php echo $s['name']?>&nbsp;&nbsp;

                                                </td>

                                            </tr>
                                        <?php }?>
                                        </table>

                                    </td>

                                    <td>
                                    <?php foreach($c['son'] as $s){?>
                                    <table border="0">
                                        <tr>
                                            <?php foreach($s['son'] as $v){?>
                                        
                                            <td align=left width=25%>
                                                <input type="checkbox" name="route[]" value = "<?php echo $v['id']?>" checked />
                                                &nbsp;<?php echo $v['name']?>&nbsp;&nbsp;
                                            </td>       
                                        
                                            <?php }?>
                                        </tr>
                                    <?php }?>
                                    </table>

                                    </td>



                            </tr>
                        <?php }?>
                    <?php }?>
                <?php }?>

</tbody>
<?php echo form_submit(array('class'=>'loginbtn','value'=>'更改'))?>
<?php echo form_close()?>
</table>
        <div class="tip">
        <div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="../../../admin/images/ticon.png" /></span>
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
<script type="text/javascript">
	$('.imgtable tbody tr:odd').addClass('odd');
    
    function checkAll(var dom)
    {
        dom.click(function(event) {
            /* Act on the event */
            dom.('input[type="checkbox"]').attr({
                checked: 'checked'
            });

        });
    }

</script>
    

</body>
</html>
