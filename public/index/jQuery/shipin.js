$(function(){

/*left_a1b居中*/
function juzhong(){
	var cur = parseInt((788-Number($(".left_a1b").outerWidth()))/2);
	$(".left_a1b").css("margin-left",cur+"px");
	
	var ber = parseInt((788-Number($(".left_b2").outerWidth()))/2);
	$(".left_b2").css("margin-left",ber+"px");
	
};
juzhong();

/*隔行变色*/
function gehangbianse(){
	$(".left_a").filter(":odd").css("background-color","#ecebeb");
	$(".right_c1").children(":odd").css("color","#3dbe93");
};
gehangbianse();

/*input第一次光标激活时间*/
$(".right_a1a").one("focus",function(){
	$(".right_a1a").val("");
});

/*分类目录*/
$(".right_b1").on("click",function(e){
	$(this).next().show();
	e.stopPropagation();
});
$(document).click(function(){
	$(".right_b2").hide();
});
$(".right_b2>li").click(function(){
	var cur = $(this).text();
	$(this).parent().prev().text(cur).css("color","#222");
	
});


















});













































