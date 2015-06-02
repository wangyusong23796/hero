$(function(){

/*left_a1b居中*/
function juzhong(){
	var cur = parseInt((1100-Number($(".Waterfall_3").outerWidth()))/2);
	$(".Waterfall_3").css("margin-left",cur+"px");
	
	var ber = parseInt((1100-Number($(".left_b2").outerWidth()))/2);
	$(".left_b2").css("margin-left",ber+"px");
};
juzhong();

$(".Waterfall_3>li").click(function(){
	$(this).attr("class","Waterfall_3aon").siblings().attr("class","Waterfall_3a");
});


/*piece第一排*/
$(".piece").each(function(index, element) {
    if(index<5){
		$(".piece").eq(index).css("margin-top","0px");
	};
	
});

/**/


















});













































