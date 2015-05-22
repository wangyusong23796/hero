<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $webconfig['titile']?></title>
<link href="/index/style/index.css" rel="stylesheet" type="text/css" />
<link href="/index/style/Everyone.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/index/jQuery/jquery-1.11.2.min.js"></script>
<script language="javascript" src="/index/jQuery/index.js"></script>
<script language="javascript" src="/index/jQuery/Everyone.js"></script>
</head>
<body bgcolor="#f2f1f1">

<!--top-->
<div class="top" id="top">
	
    <!--top-->
    <div class="top_box">
    	<ul class="top_left">
        	<li class="top_left1on">CG新闻速递</li>
            <li class="top_left2">|</li>
            <li class="top_left1">CG数字教育</li>
        </ul>
        <dl class="top_right">
        	<dd class="top_right1" style=" cursor:default;">移动设备与微信
            	<div class="top_right1_img"><img src="/index/images/CG_03.png" /></div>
            </dd>
            <dt class="top_right2">|</dt>
            <a href="#"><dd class="top_right1">实时动态</dd></a>
            <dt class="top_right2">|</dt>
            <a href="#"><dd class="top_right1">帮助中心</dd></a>
            <dt class="top_right2">|</dt>
            <a href="#"><dd class="top_right1">登录</dd></a>
        </dl>
    </div>
    
    <!--logo-->
    <div class="top_nav">
    	<a href="#" target="_blank" ><div class="nav_logo"></div></a>
        <div class="nav_also">
        	   <ul class="also">
               <a href="<?php site_url('/')?>"><li class="also_a">首页</li></a>
                <?php foreach($topdaohang as $top):?>

                    <li class="also_a"><?php echo $top->name;?>
                    <!-- TODO 判断是否有二级栏目有二级栏目则输出二级栏目 -->


                    <?php   
                        $two = clicktop($top->id);
                        if($two != false)
                        {
                            echo '<div class="also_box"><p class="also_boxp"></p><ul class="also_boxa">';
                            foreach($two as $t)
                            {

                                echo '<a href="'.$t->url.'"}"><li class="also_boxa1">'.$t->name.'</li></a>';
                                echo '<li class="also_boxa2"></li>';
                            }
                            echo '</ul></div>';
                        }
                    ?>        
            
                    </li>

                <?php endforeach;?>

                <li class="also_a">CG瀑布流</li>
                <li class="also_a">关于我们</li>
            </ul>
        </div>
    </div>
</div>


