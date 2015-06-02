<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><title>用户中心注册-源码库（aspku.com）</title>
<meta content="IE=7" http-equiv="X-UA-Compatible">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"><link rel="stylesheet" type="text/css" href="/user/css/css.css">
<meta name="GENERATOR" content="MSHTML 8.00.6001.18702">
<script src="/user/images/j.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="/user/js/reg_new.js"></script>
<script type="text/javascript" language="javascript" src="/user/js/CheckPassStrength.js"></script>
<script type="text/javascript" language="javascript">


$(document).ready(function(){ 
	$("#passwordLevel").removeClass().addClass("rank r0");
	$("#vdcode").focus(function(){
	  var leftpos = $("#vdcode").position().left;
	  var toppos = $("#vdcode").position().top - 42;
	  $('#ver_code').css('left', leftpos+'px');
	  $('#ver_code').css('top', toppos+'px');
	  $('#ver_code').css('visibility','visible');
	});
	$("input[type='password']").click(function(){
	  hideVc()
	});
	$("#txtUsername").click(function(){
	  hideVc()
	});
	$("input[type='radio']").focus(function(){
	  hideVc()
	});
	/*
	$("#vdcode").blur(function(){
		  $('#ver_code').css('visibility','hidden');
	});
	*/
})


</script>
<!--弹窗-->
<style type="text/css" media="all">
@import "/member/templets/ajax/jBox.css";
</style>
<script src="/user/images/jquery-1.js" type="text/javascript"></script>
<script src="/user/images/jBox-1.js" type="text/javascript"></script>
<script type="text/javascript">
function serializeParams(){
   var ret='';
   $('input[@grp=jBoxParam]').each( function(){
      var $this = $(this);
	  if ($this.attr('type')=='input')
	  {
	
	     if( $this.val().length > 0 && $this.attr('disabled')!=true  )
		  ret+=','+ $this.attr('name')+'='+$this.val();
	  }
	  else if ($this.attr('type')=='checkbox')
	  {
	     if (this.checked==true)
	     {
		     ret+=','+ $this.attr('name')+'='+$this.val();
	     }
	  }
   });
   ret = ret.substring(1);
   $('#jBoxAttr').html( 'boxAttr Values:'+ret );
   return ret;
}
</script>
<!--弹窗结束-->
</head>
<body>
<div id="wrap">
<div id="main">
<div class="top">
<div class="right"><a href="http://www.aspku.com/">回到首页</a> </div></div>
<div class="logo"></div>
<div class="content">
<div class="left content_le">
<div class="main01"><img alt="源码下载" src="/user/images/pic_00.jpg"> </div>
<div class="main04">
<div class="main03">
<div class="left main06"><img src="/user/images/pic_01.jpg"> </div>
<div class="right main05">
<div class="font14 a4405f">精美网站模板下载 </div>
<div class="width100% 707070"><a>源码库提供上千套各类精美网页模板下载.</a></div></div></div>
<div class="main03">
<div class="left main06"><img src="/user/images/pic_02.jpg"> </div>
<div class="right main05">
<div style="COLOR: #0068b7" class="font14">最新站长行业资讯 </div>
<div class="width100% 707070"><a>源码库提供最新站长新闻,实时了解站长行业状况.</a>
</div></div></div>
<div class="main03">
<div class="left main06"><img src="/user/images/pic_03.jpg"> </div>
<div class="right main05">
<div style="COLOR: #ac6a00" class="font14">商业网站源码免费下载 </div>
<div class="width100% 707070"><a>源码库提供极具价值的各类商业网站源码免费下载服务.</a> </div></div></div>
<div class="main03">
<div class="left main06"><img src="/user/images/pic_04.jpg"> </div>
<div class="right main05">
<div style="COLOR: #33a600" class="font14">50万用户首选的互动平台 </div>
<div class="width100% 707070"><a>上万注册站长会员,轻松互动交流.</a>
</div></div></div></div></div><div class="left main02"></div>
<div class="right content_ri">
<div class="content_ri01">
<div class="login">源码库<font color="red">注册中心</font></div>
<div style="PADDING-BOTTOM: 32px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 5px; _padding: 29px 0" class="content_ri02">
<div class="notice">
<div class="notice02">•  &nbsp;用户名由4-8个(字母,数字)形成或组合<br>•  &nbsp;用户昵称使你的账号更加个性化<br>•  &nbsp;<font style="color:#E21B1B;">请使用真实邮箱注册,否则不能下载任何资源</font></div></div>
    <form method="post" action="reg.php" id="regUser" name="form2">
      <input value="regbase" name="dopost" type="hidden">
      <input value="1" name="step" type="hidden">
      <input value="个人" name="mtype" type="hidden">
<ul>
  <li class="li02">用户名： </li>
  <li><input class="input" maxlength="20" name="userid" required="required" id="txtUsername">
   <span id="_userid"></span> </li> 
  <li class="li02">用户昵称： </li>
  <li><input class="input" maxlength="20" name="uname" required="required" id="uname">
   <span id="_uname"></span></li> 
  <li class="li02">登录密码： </li>
  <li><input class="input" required="required" minlength="4" id="txtPassword" name="userpwd" onkeyup="passwordStrength(this.value)" type="password">
    <span id="passwordStrength" class="strength0"><label id="passwordDescription"></label></span>
  </li> 
    <li class="li02">确认密码： </li>
  <li><input class="input" required="required" minlength="4" id="userpwdok" name="userpwdok" type="password">
  <span id="_userpwdok"></span>
  </li> 
    <li class="li02">电子邮箱： </li>
  <li><input class="input" name="email" required="required" id="email">
<span id="_email"></span>
<input checked="checked" value="" id="agree" name="agree" type="checkbox">
          已阅读并接受<a href="javascript://" onclick="jBox.open('iframe-jBoxID','iframe','/member/templets/xieyi.html','源码库服务协议','width=530,height=400,center=true,minimizable=true,draggable=true,model=true,scrolling=true');">服务协议</a>
</li><li class="submit02" style="text-align:left; border:none; padding-right:10px;width:300px;">
<font color="#828282">我已有账号了？</font>&nbsp;&nbsp;&nbsp;<a href="http://www.aspku.com/member/login.php" title="登陆源码库" style="color:#E21B1B;"><strong>立即登陆</strong></a>
<input id="btnSignCheck" class="submit" value="注&nbsp;&nbsp;册" name="login_submit" type="submit">
  </li></ul></form></div>
<div class="content_ri04">
</div></div></div></div>
<div class="bottom"></div></div></div>
<div id="footer">
<div class="footer_logo"></div>
<div class="footer_menu"><a href="http://www.aspku.com/about/about.html" target="_blank">关于源码库</a><span>|</span><a href="http://www.aspku.com/about/lianxi.html" target="_blank">联系源码库</a><span>|</span><a href="http://www.aspku.com/about/copyright.html" target="_blank">隐私条款</a><span>|</span><a href="http://www.aspku.com/about/copyright.html" target="_blank">法律声明</a><span>|</span><a href="http://www.aspku.com/about/copyright.html" target="_blank">免责声明</a><span>|</span><a href="http://www.aspku.com/about/link.html" target="_blank">友情链接</a><span>|</span><a href="#" target="_blank">意见反馈</a><span><br><span class="eng"><script type="text/javascript">
copyright=new Date();
update=copyright.getFullYear();
document.write("Copyright &copy; 2011-"+ update + " www.aspku.com All rights reserved.");
</script>Copyright © 2011-2015 www.aspku.com All rights reserved.
<script type="text/javascript">niu(foot);</script></span> </span></div></div>
<div style="DISPLAY: none" id="counter"></div>
</body></html>