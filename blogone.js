$(document).ready(function(){

	var pageHeight = $('.lightbox').height();
	pageHeight = pageHeight+100 + "px";
	$('.lightbox').css('top',pageHeight);

	$('.sub-list').hide();

	$('.has-sub-list').click(function(){
		var $thisClosestSubList = $(this).next('.sub-list');
		$thisClosestSubList.slideToggle("slow");
		$(this).children('span').toggleClass('genericon-rightarrow genericon-downarrow');
	});

	$('.post-text img').click(function(){
		var imgUrl = $(this).attr('src');
		var imgUrlArr = imgUrl.split("-440x");
		console.log(imgUrlArr[0], imgUrlArr[1]);
		var newUrl = imgUrlArr[0] + ".jpg";
		$('.lightbox img').attr('src',newUrl);
		$('.lightbox').animate({top:"0"},function(){
			$('.lightbox').toggleClass('lightbox-inframe');
		});
	});

	$('.lightbox span').click(function(){
		$('.lightbox').toggleClass('lightbox-inframe').one('transitionend',function(){
			$('.lightbox').animate({top:pageHeight});
		});
	});

	$('.lightbox').on('click', function(e) { 
   		if( e.target !== this ) 
       	return;
    	$('.lightbox').toggleClass('lightbox-inframe').one('transitionend',function(){
    		$('.lightbox').animate({top:pageHeight});
    	});
	});

});