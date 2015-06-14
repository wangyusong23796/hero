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
    <?php echo form_open('article/add',['id'=>"form_id"])?>
    <ul class="forminfo">
    <li><label>文章标题</label><input name="title" type="text" class="dfinput"  /><i>标题不能超过30个字符</i></li>
    <li><label>所属栏目</label><select name="daohang_id">
   
    <?php foreach($lanmu as $v):?>
        <option value="<?php echo $v->id?>"><?php echo $v->name?></option>
    <?php endforeach; ?>
    <option value="0">单页模式</option>
    </select> <i>多个关键字用,隔开</i></li>
    
</li>
    <li><label>关键字</label><input name="key" type="text" class="dfinput"   /></li>
    <li><label>摘要</label><input name="desc" type="text" class="dfinput"  /></li>
    <li><label>缩略图</label><input name="picurl" type="text" class="dfinput"/></li>
    <li><label>作者</label><input name="auther" type="text" class="dfinput"/></li>
    <li><label>内容</label><input name="text" type="text" class="dfinput"/></li>
    <li><label>单页栏目名称（选择单页模式必填，其他可不填写）</label><input name="lanmumingcheng" type="text" class="dfinput"/></li>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
    <?php echo form_close()?>
    
    </div>



</body>
</html>
