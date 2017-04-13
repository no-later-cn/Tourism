$(function(){
	var t =setInterval(move,2000);
	var now =0;
	var next=0;
	var w = $(".ban_tu").width();
	var z=2;
	function move(){
		next++
		if (next==3) {
			next=0;
		}
		if (next==-1) {
			next=2;
		}
		$(".hot").eq(now).css({background:"#fff"}).end().eq(next).css({background:"#2296F0"})
		$(".ban_tu").eq(next).css({left:w,zIndex:z++}).animate({left:0}).end().eq(now).animate({left:-w})
		now = next;
	}
})