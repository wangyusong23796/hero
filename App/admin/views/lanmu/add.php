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
    <li><label>栏目名称</label><input name="name" type="text" class="dfinput"  /><i>标题不能超过30个字符</i></li>
    <li><label>父级栏目</label><select name="fid">
    <option value="0">顶级栏目</option>
    <?php foreach($lanmu as $v):?>
        <option value="<?php echo $v->id?>"><?php echo $v->name?></option>
    <?php endforeach; ?>
    </select> <i>多个关键字用,隔开</i></li>
    <li><label>栏目类型</label>
    <cite>
    <?php foreach($type as $t):?>

<input name="type" type="radio" value="<?php echo $t->type_id;?>" checked="checked" /><?php echo $t->type_name;?>&nbsp;&nbsp;&nbsp;&nbsp;

    <?php endforeach;?>
    </cite>
</li>
    <li><label>是否显示</label><cite><input name="display" type="radio" value="1" checked="checked" />是&nbsp;&nbsp;&nbsp;&nbsp;<input name="display" type="radio" value="0" />否</cite></li>
    <li><label>网站栏目视图</label><input name="listviewpath" type="text" class="dfinput"   /></li>
    <li><label>网站内页视图</label><input name="articleviewpath" type="text" class="dfinput"  /></li>
    <li><label>网站封面视图</label><input name="viewpath" type="text" class="dfinput"/></li>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
    <?php echo form_close()?>
    
    </div>



</body>
</html>
