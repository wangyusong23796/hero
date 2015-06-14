<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible">
<meta name="GENERATOR" content="MSHTML 8.00.7601.17785">
<title>用户中心-cg</title>
<link href="/user/css/boxy.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/user/js/jquery.js"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/user/css/style.css" media="screen"><!--[if lte IE 7]>
<STYLE type=text/css>#sidebar #main-nav UL LI A {
	_padding: 10px 15px; _display: block; _margin-bottom: -11px
}
.content-box-header {
	MARGIN-TOP: 0px
}
UL.content-box-tabs {
	_position: relative; _top: 2px
}
.action-button:hover {
	CURSOR: pointer
}
.input-notification {
	POSITION: relative; TOP: -5px; _background-position: left 6px
}
#login-wrapper #login-content INPUT {
	MARGIN: 0px
}
</STYLE>
<![endif]-->
<style type="text/css">#cg-main-content {
	PADDING-BOTTOM: 0px; MARGIN: 0px 30px 0px 260px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 10px
}
FORM LABEL.error {
	PADDING-BOTTOM: 2px; BACKGROUND-COLOR: transparent; MARGIN: 0px 0px 0px 5px; PADDING-LEFT: 22px; PADDING-RIGHT: 0px; DISPLAY: inline; BACKGROUND-REPEAT: no-repeat; BACKGROUND-POSITION: left 2px; PADDING-TOP: 2px
}
.select {
	WIDTH: 600px
}
.digest {
	HEIGHT: 100px
}
.cgred {
	COLOR: #d40000
}
.cgform {
	CLEAR: both
}
.tips {
	COLOR: #d40000; FONT-SIZE: 12px
}
#cgthumb {
	FLOAT: left
}
#cgthumb UL {
	PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
#cgthumb .preview {
	WIDTH: 146px; HEIGHT: 100px
}
#cg-thumb .preview {
	WIDTH: 146px; HEIGHT: 100px
}
#cgthumb UL LI {
	PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BACKGROUND: none transparent scroll repeat 0% 0%; FLOAT: left; CURSOR: pointer; PADDING-TOP: 0px
}
#cg-thumb {
	DISPLAY: none; HEIGHT: 140px; OVERFLOW: scroll
}
#cg-thumb LI {
	PADDING-BOTTOM: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; BACKGROUND: none transparent scroll repeat 0% 0%; FLOAT: left; CURSOR: pointer; PADDING-TOP: 5px
}
.thumb {
	WIDTH: 120px; HEIGHT: 81px; CURSOR: pointer
}
.avatar {
	PADDING-LEFT: 0px; FLOAT: left
}
.sjump {
	TEXT-ALIGN: center; WIDTH: 5%
}
.pagination B {
	BORDER-BOTTOM-COLOR: #459300 !important; PADDING-BOTTOM: 3px; BORDER-TOP-COLOR: #459300 !important; MARGIN: 0px 5px 0px 0px; PADDING-LEFT: 6px; PADDING-RIGHT: 6px; BACKGROUND: #469400; COLOR: white !important; BORDER-RIGHT-COLOR: #459300 !important; BORDER-LEFT-COLOR: #459300 !important; PADDING-TOP: 3px
}
#tooltip {
	Z-INDEX: 3000; POSITION: absolute; BORDER-BOTTOM-STYLE: none; PADDING-BOTTOM: 10px; BORDER-RIGHT-STYLE: none; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; BORDER-TOP-STYLE: none; BACKGROUND: #222; BORDER-LEFT-STYLE: none; PADDING-TOP: 10px; -moz-border-radius: 5px; -webkit-border-radius: 5px
}
#tooltip H3 {
	MARGIN: 0px
}
#tooltip DIV {
	MARGIN: 0px
}
</style>
<link href="/user/css/base.css" rel="stylesheet" type="text/css">
<div id="body-wrapper">
<div id="sidebar">
<div id="sidebar-wrapper"><a href=""><img id="logo" alt="cg" src="/user/images/logo.png"></a>
<div id="profile-links">
<a title="进入空间" href="" target="_blank" style="color:#87CEFA; FONT-WEIGHT: 700;font-size:12px;"><?php echo $user['name']?></a>
<script type="text/javascript">
 var now=(new Date()).getHours();
 if(now>0&&now<=6){
document.write("午夜好");
 }else if(now>6&&now<=11){
 document.write("早上好");
 }else if(now>11&&now<=14){
 document.write("中午好");
 }else if(now>14&&now<=18){
 document.write("下午好");
 }else{
 document.write("晚上好");
 }
</script><br>
<a title="管理首页" href="<?php echo site_url('user/home'); ?>">管理首页</a>
<a title="退出" href="<?php echo site_url('user/login/logout'); ?>">注销登录</a></div>
<ul id="main-nav">
<!-- <li><a class="nav-top-item">推广中心</a></li>
<ul>
<li><a href="<?php echo site_url('user/tuiguang'); ?>">推广中心</a></li>
</ul> -->
<!--    <li><a id="cg-nav" class="nav-top-item no-submenu">信息管理</a>
<ul>
    <li><a href="">我的好友</a>
    </li><li><a href="<?php echo site_url('user/message'); ?>">消息管理</a></li>
</ul> -->
  </li><li><a class="nav-top-item">个人设置</a></li>
<ul>
    <li><a href="<?php echo site_url('user/config'); ?>">基本设置</a></li>
</ul>
  </li><li><a class="nav-top-item">文章投稿</a></li>
<ul>
    <li><a href="<?php echo site_url('user/article'); ?>">文章发布</a></li>
    <li><a href="<?php echo site_url('user/ziyuan'); ?>">出售资源</a></li>
</ul>

  </li><li><a class="nav-top-item">充值金币</a></li>
<ul>
    <li><a href="<?php echo site_url('user/pay'); ?>">充值金币</a></li>
</ul>
<!--   <li><a class="nav-top-item">意见与建议</a></li>
<ul>
    <li>
	<a href="" target="_blank">提交建议</a>
  </li>
</ul> -->
</ul>
</div>
</div>


  

<div id="main-content">
<ul class="shortcut-buttons-set">
<!--   <li>
  <a class="shortcut-button" href="">
  <span><img alt="会员首页" src="/user/images/ims-upload.png"><br>推广中心</span>
  </a>
  </li> -->

  <li><a class="shortcut-button" href="<?php echo site_url('user/config'); ?>">
  <span><img alt="个人设置" src="/user/images/ims-return.png"><br>个人设置</span>
  </a>
  </li>

  <li><a class="shortcut-button" href="<?php echo site_url('user/article'); ?>">
  <span><img alt="文章投稿" src="/user/images/ims-checked.png"><br>文章投稿</span>
  </a>
  </li>

<!--   <li><a class="shortcut-button" href=""><span>
  <img alt="我的消息" src="/user/images/ims-pm.png"><br>我的消息</span>
  </a>
  </li> -->

  <li><a class="shortcut-button" href="<?php echo site_url('user/pay'); ?>"><span><img alt="充值中心" src="/user/images/pay.png"><br>充值中心</span></a></li>
   
	<li><a class="shortcut-button" href="<?php echo site_url('/'); ?>">
	<span><img alt="主页" src="/user/images/ims-home.png"><br>网站首页</span>
	</a>
	</li>

  </ul>
<div class="clear"></div>