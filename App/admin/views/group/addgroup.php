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
    
    <div class="formbody">
    <?php echo form_open('routes/addgroup')?>
    <div class="formtitle"><span>基本信息</span></div>
    
    <ul class="forminfo">
    <li><label>权限组名称</label><input name="groupname" type="text" class="dfinput" /><i>权限组名称不得超过30个字</i></li>
    <li><label>是否启用</label><cite><input name="status" type="radio" value="1" checked="checked" />是&nbsp;&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="0" />否</cite></li>
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

</table>




    </ul>
    
    
    </div>
<?php echo form_submit(array('class'=>'loginbtn','value'=>'添加'))?>
<?php echo form_close()?>


</body>
</html>
