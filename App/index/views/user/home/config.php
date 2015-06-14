<div class="content-box">
<div class="content-box-header">
<h3>更改帐号基本资料</h3>
<div class="clear"></div></div>
<div class="content-box-content">
    <div id="mcpmain">
      <div id="appTab">
        <ul>
          <li class="thisTab"><a href="#">基本资料</a></li>

        </ul>
      </div>
       <?php echo form_open('user/config')?>

     <input name="dopost" value="save" type="hidden">
      <div id="mainCp">
        <h3 class="meTitle"><strong>基本资料</strong></h3>
        <div class="postForm">
          <p>
            <label>用户名：</label><?php echo $user['name'] ?>
          </p>

          <p>
            <label>旧密码：</label>
            <input name="oldpwd" id="oldpwd" class="intxt" type="password"><span style="color:red;">*</span><span>旧密码必须填写</span>
          </p>

          <p>
            <label>新密码：</label>
            <input name="userpwd" id="userpwd" class="intxt" type="password">
            <span id="_userpwdok">不修改密码请保留此项为空</span>
          </p>

          <p>
            <label>确认新密码：</label>
            <input name="userpwdok" id="userpwdok" value="" class="intxt" type="password">
          </p>
          <p>
            <label>原安全问题：</label>
            <select name="safequestion" id="safequestion"><option value="0" selected="selected">没安全提示问题</option>
<option value="1">你最喜欢的格言什么？</option>
<option value="2">你家乡的名称是什么？</option>
<option value="3">你读的小学叫什么？</option>
<option value="4">你的父亲叫什么名字？</option>
<option value="5">你的母亲叫什么名字？</option>
<option value="6">你最喜欢的偶像是谁？</option>
<option value="7">你最喜欢的歌曲是什么？</option>
</select>
          <span id="_safequestion">忘记密码时重设密码用</span>
          </p>
          <p>
            <label>原问题答案：</label>
            <input name="safeanswer" id="safeanswer" class="intxt" type="text">
          </p>

          <p>
            <label>新安全问题：</label>
            <select name="newsafequestion" id="newsafequestion"><option value="0" selected="selected">没安全提示问题</option>
<option value="1">你最喜欢的格言什么？</option>
<option value="2">你家乡的名称是什么？</option>
<option value="3">你读的小学叫什么？</option>
<option value="4">你的父亲叫什么名字？</option>
<option value="5">你的母亲叫什么名字？</option>
<option value="6">你最喜欢的偶像是谁？</option>
<option value="7">你最喜欢的歌曲是什么？</option>
</select>
               <span id="_safequestionnew">不修改可不用填写</span> 
          </p>
          <p>
            <label>新问题答案：</label>
            <input name="newsafeanswer" id="newsafeanswer" class="intxt" type="text">
          </p>
<!--           <p>
            <label><span class="tdl">电子邮箱</span>：</label>
            <input name="email" id="email" value="<?php echo $user['']?>" class="intxt" type="text"><br>
            <span id="_email" style="margin-left:80px"> <span style="color:red;">*</span> (每个电子邮箱只能注册一个帐号，要修改电子邮箱必须填写正确安全问题的答案)</span> 
          </p>  -->
<!--           <p>
            <label>性别：</label>
			<input name="sex" value="男" type="radio">
             男 &nbsp;
            <input name="sex" value="女" type="radio">
             女 &nbsp;
          </p> -->

<input id="btnSubmit2" class="button" value="修&nbsp;&nbsp;改" type="submit">      </p>
    </div>
      </div>
     <?php echo form_close()?>
      <!--主操作区域 -->
    </div>
  </div>
<div id="footer"><small>© Copyright ©2001-2011 源码库. All rights 
reserved | <a href="#">Top</a></small></div></div></div>


</div>

</body></html>