<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $name?></title>
<link href="/admin/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="<?php site_url('/')?>">首页</a></li>
    <li><a href="#"><?php echo $name?></a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>网站基本配置</span></div>
    <?php echo form_open('lanmu/add')?>
    <ul class="forminfo">
    <li><label>栏目名称</label><input name="name" type="text" class="dfinput" value="<?php echo $config['titile']?>" /><i>标题不能超过30个字符</i></li>
    <li><label>父级栏目</label><input name="fid" type="text" class="dfinput" value="<?php echo $config['key']?>" /><i>多个关键字用,隔开</i></li>
    <li><label>栏目类型</label><cite><input name="type" type="radio" value="1" checked="checked" />是&nbsp;&nbsp;&nbsp;&nbsp;<input name="auth" type="radio" value="0" />否</cite></li>
    <li><label>网站栏目视图</label><input name="listviewpath" type="text" class="dfinput" value="<?php echo $config['banquan']?>"  /></li>
    <li><label>网站内页视图</label><input name="articleviewpath" type="text" class="dfinput" value="<?php echo $config['beian']?>"  /></li>
    <li><label>网站封面视图</label>X<input name="viewpath" type="text" class="dfinput" value="<?php echo $config['pic_x']?>"  /></li>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
    <?php echo form_close()?>
    
    </div>



</body>
</html>
