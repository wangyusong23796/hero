$(function(){

	/*二维码的显示*/
	$(".top_right>dd").mouseenter(function(){
		$(this).children().stop().slideDown();
	}).mouseleave(function(){
		$(this).children().stop().slideUp();
	});
	
	/*导航点击切换*/
	$(".also>li").click(function(){
		$(this).attr("class","also_aon").siblings().attr("class","also_a");
	});
	
	/**/
	$(".also>li").mouseenter(function(){
		$(this).children().stop().slideDown();
	}).mouseleave(function(){
		$(this).children().stop().slideUp();
	});






















});













































