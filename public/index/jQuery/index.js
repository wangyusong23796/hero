$(function(){

/*banner的切换*/
function banner_Roll(){
	var cur = 0;
	var inow=0;
	var number = $(".banner_but").children().length;
	var onewidth=$(".banner_img").children().outerWidth(true);
	var ber_he=onewidth*number;
	
	function imgroll (){
		if(cur == 0){
			$(".banner_img").children().eq(0).css({
				"position":"static",
			});
			$(".banner_img").css("left","0")
			inow=0;
		};
		if(cur == number-1){
			cur = 0;
			$(".banner_img").children().eq(0).css({
				"position":"relative",
				"left":ber_he+'px'
			});
							
		}else{
			cur++;	
		};
		inow++;
		$(".banner_but").children().eq(cur).attr("class","banner_but1").siblings().attr("class","banner_but2");
		$(".banner_img").animate({left:-370*inow},500);
	}
	var time = setInterval(imgroll,2000);
	
	/*点击变换图片*/
	$(".banner_but").children().click(function(){
		var ber = $(this).index();
		$(".banner_but").children().eq(ber).attr("class","banner_but1").siblings().attr("class","banner_but2");
		$(".banner_img").stop().animate({left:-370*ber},500);
		inow=ber;
		cur=ber;
	});
	/*鼠标经过停止事件*/
	$(".banner_tv,.banner_but").hover(function(){
		clearInterval(time);
	},function(){
		time = setInterval(imgroll,2000);
	})
};
banner_Roll();
	
/*居中*/
function a3_center(){
	var cur = parseInt((1100-Number($(".one_a3").outerWidth()))/2);
	$(".one_a3").css("margin-left",cur+"px");
};
a3_center();

/**/
$(".one_c1a").mouseenter(function(){
	$(this).children().last().show();
}).mouseleave(function(){
	$(this).children().last().hide();
});



















});













































