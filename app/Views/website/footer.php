<!------Footer Section------>
<section class="footer-landing-main">
	<div class="container">
		<div class="footer-landing">
			<div class="footer-landing1 landing_F">				
				<ul>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="javascript:void(0)">Terms & Conditions</a></li>
					<li><a href="javascript:void(0)">Privacy Policy</a></li>
				</ul>
			</div>	
			
			<div class="footer-landing2 landing_F">
				<ul>			
					<li><a href="tel:+919769951611">+91 97699 51611</a></li>
					<li><a href="mailto:hedge.square@gmail.com">hedge.square@gmail.com</a></li>
				</ul>				
			</div>
			
			<div class="footer-landing3 landing_F">				
				1st Floor, D N Mahajan & Brothers,<br> 
				Building No 1, Mahajan Silk Mill Compound,<br> 
				Behind Union Bank, LBS Marg, Vikhroli West,<br> 
				Mumbai - 400079.
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="clearfix"></div>
            
		<div class="footer-copyright">
			© Copyright 2022 hedge-square. All rights reserved Powered by <a href="https://sumcircle.com/" target="_blank" style="color:#efff00;">Sumcircle Technologies Pvt. Ltd.</a>
		</div>
    </div>
</section>

<!--Back to Top--->
<div class="go-top"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/custom.js"></script>


<script src="assets/resource/swiper/swiper.min.js"></script>

<script>
if (window.innerWidth < 1200) {
  new Swiper(".swiper-container", {
    direction: "horizontal",
    slidesPerView: 1,
    nextButton: ".swiper-button-next",
    prevButton: ".swiper-button-prev",
    paginationClickable: !0,
    spaceBetween: 0,
    autoplay: 2500,
    loop: !0 });

} else {
  new Swiper(".swiper-container", {
    direction: "horizontal",
    slidesPerView: 1,
    parallax: !0,
    nextButton: ".swiper-button-next",
    prevButton: ".swiper-button-prev",
    paginationClickable: !0,
    spaceBetween: 0,
    speed: 1500,
    parallax: !0,
    autoplay: 2500,
    loop: !0 });

}
</script>


<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
    $('#clients-slider').owlCarousel({
		autoplay: true,
        autoplaySpeed: 1500,
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        },
        navText: ["<i class='bi bi-chevron-left'></i>","<i class='bi bi-chevron-right'></i>"]
    });
});
</script>


<link href="assets/css/aos.css" rel="stylesheet">
<script src="assets/js/aos.js"></script>
<script>
/*** Animation on scroll */
window.addEventListener('load', () => {
	AOS.init({
	  duration: 1000,
	  easing: 'ease-in-out',
	  once: true,
	  mirror: false
	})
});

/*** Navbar background color chagne */
$(function () {
  $(document).scroll(function () {
	  var $nav = $(".fixed-top");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
});
</script>

<script>
//Main Banner Slider
$(document).ready(function() {  
	var $slider = $(".slider"),
	$slideBGs = $(".slide__bg"),
	diff = 0,
	curSlide = 0,
	numOfSlides = $(".slide").length-1,
	animating = false,
	animTime = 500,
	autoSlideTimeout,
	autoSlideDelay = 6000,
	$pagination = $(".slider-pagi");
  
	function createBullets() {
		for (var i = 0; i < numOfSlides+1; i++) {
			var $li = $("<li class='slider-pagi__elem'></li>");
			$li.addClass("slider-pagi__elem-"+i).data("page", i);
			if (!i) $li.addClass("active");
			$pagination.append($li);
		}
	};
  
	createBullets();
  
	function manageControls() {
		$(".slider-control").removeClass("inactive");
		if (!curSlide) $(".slider-control.left").addClass("inactive");
		if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
	};
  
	function autoSlide() {
		autoSlideTimeout = setTimeout(function() {
			curSlide++;
			if (curSlide > numOfSlides) curSlide = 0;
			changeSlides();
		}, autoSlideDelay);
	};
  
	autoSlide();
  
	function changeSlides(instant) {
		if (!instant) {
			animating = true;
			manageControls();
			$slider.addClass("animating");
			$slider.css("top");
			$(".slide").removeClass("active");
			$(".slide-"+curSlide).addClass("active");
			setTimeout(function() {
				$slider.removeClass("animating");
				animating = false;
			}, animTime);
		}
		window.clearTimeout(autoSlideTimeout);
		$(".slider-pagi__elem").removeClass("active");
		$(".slider-pagi__elem-"+curSlide).addClass("active");
		$slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
		$slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
		diff = 0;
		autoSlide();
	}

	function navigateLeft() {
		if (animating) return;
		if (curSlide > 0) curSlide--;
		changeSlides();
	}

	function navigateRight() {
		if (animating) return;
		if (curSlide < numOfSlides) curSlide++;
		changeSlides();
	}

	$(document).on("mousedown touchstart", ".slider", function(e) {
		if (animating) return;
		window.clearTimeout(autoSlideTimeout);
		var startX = e.pageX || e.originalEvent.touches[0].pageX,
			winW = $(window).width();
		diff = 0;
		
		$(document).on("mousemove touchmove", function(e) {
			var x = e.pageX || e.originalEvent.touches[0].pageX;
			diff = (startX - x) / winW * 70;
			if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
			$slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
			$slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
		});
	});
  
	$(document).on("mouseup touchend", function(e) {
		$(document).off("mousemove touchmove");
		if (animating) return;
		if (!diff) {
			changeSlides(true);
			return;
		}
		if (diff > -8 && diff < 8) {
			changeSlides();
			return;
		}
		if (diff <= -8) {
			navigateLeft();
		}
		if (diff >= 8) {
			navigateRight();
		}
	});
  
	$(document).on("click", ".slider-control", function() {
		if ($(this).hasClass("left")) {
			navigateLeft();
		} else {
			navigateRight();
		}
	});
  
	$(document).on("click", ".slider-pagi__elem", function() {
		curSlide = $(this).data("page");
		changeSlides();
	});
});
</script>

<script>
// header When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};
function myFunction() {
	var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	var scrolled = (winScroll / height) * 100;
	document.getElementById("myBar").style.width = scrolled + "0%";  
}


//Social share toggle
$('.toggle-button').each( function() {
	$(this).on( 'click', function(e) {
		$(this).prev('.social-share .icons').toggleClass("visible");
		$(this).toggleClass('icon-close').toggleClass('icon-share');
	});
});

$(function(){
	//Go To Top Scroll
	$(window).scroll(function(){
		var scrolled = $(window).scrollTop();
		if (scrolled > 200) $('.go-top').fadeIn('slow');
		if (scrolled < 200) $('.go-top').fadeOut('slow');
	});  
	//Click event
	$('.go-top').click(function () {
		$("html, body").animate({ scrollTop: "0" },  500);
	});
});
</script>

</body>
</html>