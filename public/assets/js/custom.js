$(document).ready(function(){	
	
	if ($(window).width() > 1024) {
		$('.client-success-list .items').mouseenter(function () {
			$('.items').find('.img').removeClass('active');
			$(this).find('.img').addClass('active');
			if ($(this).hasClass('firstchild')) {
				$('.client-success-list').addClass('left');
			} else if ($(this).hasClass('lastchild')) {
				$('.client-success-list').removeClass('left');
				$('.client-success-list').addClass('right');
			} else {
				$('.client-success-list').removeClass('left');
				$('.client-success-list').removeClass('right');
			}
		});
		$('.client-success-list .items').mouseleave(function () {
			$('.items').find('.img').removeClass('active');
			$('.client-success-list').removeClass('left');
			$('.client-success-list').removeClass('right');
		})
	}
	
	
	
});




