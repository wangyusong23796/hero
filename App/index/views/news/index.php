<link href="/index/style/shipin.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/index/jQuery/shipin.js"></script>


<!--页面顺序-->
<ul class="shunxu">

</ul>


<!--center-->
<div class="center">
    <p class="center_top"><span>视频教程</span></p>
    <div class="center_left">
    
    <?php if(!empty($article)){
           foreach ($article as $value){?>
        <div class="left_a">
            <div class="left_a1">
                <p class="left_a1a"><?=$value['title']?></p>
                <ul class="left_a1b">
                    <li class="left_a1b1"><span>Posted</span><?=$value['create_time']?></li>
                    <li class="left_a1b2"><span>by</span><?=$value['auther']?></li>
                    <li class="left_a1b2"><span>在</span><?=$value['key']?></li>
<!--                     <li class="left_a1b2"><span>with</span>0 评论</li> -->
                </ul>
            </div>
            <div class="left_a2">
                <img src="<?=$value['picurl']?>" alt="<?=$value['desc']?>" title="<?=$value['title']?>" />
            </div>
        </div>
     <?php            }
           }?>   
        
         <!--页码-->
         <div class="left_b">
            <p class="left_b1">第<span>1</span>页，共<a>87</a>页</p>
            <ul class="left_b2">
<!--                 <li class="left_b2a">首页</li> -->
<!--                 <li class="left_b2a">上一页</li> -->
<!--                 <li class="left_b2b">1</li> -->
<!--                 <li class="left_b2bon">2</li> -->
<!--                 <li class="left_b2b">3</li> -->
<!--                 <li class="left_b2b">4</li> -->
<!--                 <li class="left_b2b">5</li> -->
<!--                 <li class="left_b2b">87</li> -->
<!--                 <li class="left_b2a">下一页</li> -->
<!--                 <li class="left_b2a">尾页</li> -->
            <?=$this->pagination->create_links()?>
            </ul>
            
         </div>
    </div>
    <div class="center_right">
        <div class="right_a">
            <p class="right_top">即时搜索</p>
            <div class="right_a1">
            <form action ="<?=site_url('search/search')?>" method ="get">
                <input class="right_a1a" name="search" type="text" value="赶紧搜索" />
                <input class="right_a1b" name="" type="submit" value="" />
            </form>    
            </div>
        </div>
        
        <div class="right_b">
            <p class="right_top">分类目录</p>
            <p class="right_b1"></p>
            <ul class="right_b2">
            <?php if(!empty($secondNav)){
                     foreach ($secondNav as $value){?>
                <a href="<?=site_url('news/'.$value['url'])?>"><li class="right_b2li"><?=$value['nav_name']?></li></a>
            <?php 
                     }
                  }?>    
            </ul>
        </div>
        
        <div class="right_c">
            <p class="right_top">标签</p>
            <ul class="right_c1">
                <li>*CWWS</li>
                <li>*KANYAYAN</li>
                <li>*JUNE</li>
                <li>*NEROBLACK</li>
                <li>*PURPLESUN</li>
                <li>*CWW</li>
                <li>*CWW</li>
                <li>*CWW</li>
                <li>*CWW</li>
                <li>*CWW</li>
                <li>*CWW</li>
                <li>*CWW</li>
                <li>*CWW</li>
                <li>*KANYAYAN</li>
                <li>*JUNE</li>
                <li>*JUNE</li>
                <li>*NEROBLACK</li>
                <li>*PURPLESUN</li>
                <li>*CWWS</li>
                <li>*KANYAYAN</li>
                <li>*JUNE</li>
                <li>*NEROBLACK</li>
                <li>*PURPLESUN</li>
                <li>*CWWS</li>
                <li>*KANYAYAN</li>
                <li>*JUNE</li>
                <li>*NEROBLACK</li>
                <li>*PURPLESUN</li>
            </ul>
        </div>
    </div>
</div>
