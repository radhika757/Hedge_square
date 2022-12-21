<?php

use Config\DocTypes;

echo view('website/header');
?>

<!----------- Main Slider ----------->
<div class="slider-container">
	<div class="slider-control left inactive"><i class="bi bi-chevron-left"></i></div>
	<div class="slider-control right"><i class="bi bi-chevron-right"></i></div>
	<ul class="slider-pagi"></ul>

	<div class="slider">
		<div class="slide slide-0 active">
			<div class="slide__bg"></div>
			<div class="slide__content">
				<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
					<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				</svg>
				<div class="slide__text">
					<h1 class="slide__text-heading">Expand your business globally</h1>
					<p class="slide__text-desc">
						Single point contact for your Global expansion<br>
						Discover the power of Global Expansion and tap emerging markets<br>
						We setup your international operations<br>
						Assistance in ongoing compliances of entities situated abroad
					</p>
					<!---<a href="#" class="slide__text-link">EXPLORE MORE <i class="bi bi-caret-right-fill"></i></a>--->
				</div>
			</div>
		</div>
		<div class="slide slide-1 ">
			<div class="slide__bg"></div>
			<div class="slide__content">
				<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
					<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				</svg>
				<div class="slide__text">
					<h1 class="slide__text-heading">Make most of your business</h1>
					<p class="slide__text-desc">
						Corporate Laws Advisory<br>
						Foreign Exchange Controls<br>
						Management Advisory<br>
						Helping start-ups
					</p>
					<!---<a href="#" class="slide__text-link">EXPLORE MORE <i class="bi bi-caret-right-fill"></i></a>--->
				</div>
			</div>
		</div>
		<div class="slide slide-2">
			<div class="slide__bg"></div>
			<div class="slide__content">
				<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
					<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				</svg>
				<div class="slide__text">
					<h1 class="slide__text-heading">Your Technology Portress</h1>
					<p class="slide__text-desc">
						IT / ITES services & Solecting<br>
						Web & APP Infrastructure<br>
						Technology Migration<br>
						Designing & Developement<br>
					</p>
					<!---<a href="#" class="slide__text-link">EXPLORE MORE <i class="bi bi-caret-right-fill"></i></a>--->
				</div>
			</div>
		</div>
		<div class="slide slide-3">
			<div class="slide__bg"></div>
			<div class="slide__content">
				<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
					<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				</svg>
				<div class="slide__text">
					<h1 class="slide__text-heading">Experience the power of Outsourcing</h1>
					<p class="slide__text-desc">
						Outsourcing Services<br>
						Consulting<br>
						Employee Evaluation
					</p>
					<!---<a href="#" class="slide__text-link">EXPLORE MORE <i class="bi bi-caret-right-fill"></i></a>--->
				</div>
			</div>
		</div>
	</div>
</div>


<style>
	.nagative_margin {
		position: relative;
		margin: -100px 10px 0px;
	}

	.nagative_margin [class*='col-'] {
		padding-right: 7px;
		padding-left: 7px;
	}

	.techno_flipbox {
		position: relative;
		z-index: 1;
	}

	.techno_flipbox:hover .techno_flipbox_font {
		background: #ffd0d2;
		box-shadow: 0 5px 20px rgb(0 0 0 / 10%);
		border-radius: 8px;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		overflow: hidden;
		transition: .5s;
	}

	.techno_flipbox .techno_flipbox_font {
		min-height: 250px;
		height: auto;
		box-shadow: 0px 1px 51.3px 5.7px rgba(137, 143, 156, .15);
		transition: transform .7s ease, -webkit-transform .7s ease;
		background: #fff;
		border-radius: 8px;
		box-shadow: 0 5px 20px rgb(0 0 0 / 10%);
	}

	.techno_flipbox .techno_flipbox_inner {
		text-align: center;
		padding: 0 10px;
		position: absolute;
		left: 0;
		top: 50%;
		width: 100%;
		-webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
		transform: translateY(-50%) translateZ(60px) scale(0.94);
	}

	.techno_flipbox_icon {
		display: inline-block;
		color: #fff;
		overflow: hidden;
	}

	.techno_flipbox .flipbox_title h3 {
		font-size: 20px;
		color: #232323;
		font-weight: 700;
		margin-top: 15px;
	}

	.techno_flipbox_font .icon {
		color: #fff;
		font-size: 30px;
		line-height: 80px;
		height: 80px;
		width: 80px;
		background: #ec1e24;
		border-radius: 33% 66% 70% 30%/49% 62% 38% 51% !important;
	}
</style>
<div class="flipbox_area top_feature">
	<div class="container-fluid">
		<div class="row nagative_margin">
			<div class="col-lg-2 col-md-6 col-sm-12 col-xs-6">
				<div class="techno_flipbox mb-30">
					<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
							<div class="techno_flipbox_icon">
								<div class="icon">
									<img src="assets/images/icons/corporate-icon.svg" style="width:50px;">
								</div>
							</div>
							<div class="flipbox_title">
								<h3>Corporate Laws</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-12 col-xs-6">
				<div class="techno_flipbox mb-30">
					<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
							<div class="techno_flipbox_icon">
								<div class="icon">
									<img src="assets/images/icons/private-equity-icon.svg" style="width:50px;">
								</div>
							</div>
							<div class="flipbox_title">
								<h3>Finance & Accounting</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-12 col-xs-6">
				<div class="techno_flipbox mb-30">
					<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
							<div class="techno_flipbox_icon">
								<div class="icon">
									<img src="assets/images/icons/private-wealth-icon.svg" style="width:50px;">
								</div>
							</div>
							<div class="flipbox_title">
								<h3>Assistance in Global Expansion</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-12 col-xs-6">
				<div class="techno_flipbox mb-30">
					<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
							<div class="techno_flipbox_icon">
								<div class="icon">
									<img src="assets/images/icons/it-ites-icon.svg" style="width:50px;">
								</div>
							</div>
							<div class="flipbox_title">
								<h3>IT and ITES</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-12 col-xs-6">
				<div class="techno_flipbox mb-30">
					<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
							<div class="techno_flipbox_icon">
								<div class="icon">
									<img src="assets/images/icons/legal-icon.svg" style="width:50px;">
								</div>
							</div>
							<div class="flipbox_title">
								<h3>Legal</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-12 col-xs-6">
				<div class="techno_flipbox mb-30">
					<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
							<div class="techno_flipbox_icon">
								<div class="icon">
									<img src="assets/images/icons/compliances-icon.svg" style="width:50px;">
								</div>
							</div>
							<div class="flipbox_title">
								<h3>Payroll Compliances</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<section class="section-top-vart-40 section-bottom-vart-40">
	<div class="container">
		<div class="section-title title-center">
			<h2>What You Get</h2>
			<p>Our team provides consulting services focusing on the most critical business issues.</p>
		</div>

		<div class="bord"></div>
		<div class="row about-info-grids">
			<div class="col-sm-4 about-info about-info1">
				<i class="bi bi-grid-fill"></i>
				<h4>One Stop</h4>
				<div class="h4-underline"></div>
				<p>We provide one stop solution for all your business needs pertaining to compliance, legal, accounting and finance.</p>
			</div>
			<div class="col-sm-4 about-info about-info2">
				<i class="bi bi-lightbulb-fill"></i>
				<h4>UTS Approach</h4>
				<div class="h4-underline"></div>
				<p>We follow this formula towards task assigned to us. Our team believes in Understanding, Thinking and then Solving Problem.</p>
			</div>
			<div class="col-sm-4 about-info about-info3">
				<i class="bi bi-people-fill"></i>
				<h4>People</h4>
				<div class="h4-underline"></div>
				<p>We believe that people are only appreciating assets and we give you qualified team as your backbone for business solutions.</p>
			</div>
		</div>
	</div>
</section>

<!--<section class="client-success-hover">
    <div class="home-client-list-wrap">
        <div class="client-success-list horizontal-scroll">
            
			<a href="#" id="" class="items firstchild" target="_blank">
				<div id="view_imgCard" class="img" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample12.jpg)"></div>
				<div class="content">
					<p class="half-circle-white-label">One Stop</p>
					<p class="desc">
						We provide one stop solution for all your business needs pertaining to compliance, legal, accounting and finance.
					</p>
					<p class="mt-auto"><span class="common-btn">Explore More</span></p>
				</div>
			</a>
		
			<a href="#" id="" class="items midchild" target="_blank">
				<div id="view_imgCard" class="img" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample12.jpg)"></div>
				<div class="content">
					<p class="half-circle-white-label">UTS Approach</p>
					<p class="desc">
						We follow this formula towards task assigned to us. Our team believes in Understanding, Thinking and then Solving Problem.
					</p>
					<p class="mt-auto"><span class="common-btn">Explore More</span></p>
				</div>
			</a>
		
			<a href="#" id="" class="items lastchild" target="_blank">
				<div id="view_imgCard" class="img" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample12.jpg)"></div>
				<div class="content">
					<p class="half-circle-white-label">People</p>
					<p class="desc">
						We believe that people are only appreciating assets and we give you qualified team as your backbone for business solutions.
					</p>
					<p class="mt-auto"><span class="common-btn">Explore More</span></p>
				</div>
			</a>
                
        </div>
    </div>
</section>-->



<!--<section class="blog-section section-top-vart-60 section-bottom-vart-40">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 pl-5">
				<div class="section-title">
					<h2>HSQ' DOMAIN EXPERTISE ACROSS INDUSTRIES</h2>
				</div>
				
				<div class="about_content">
					<div class="about_content_text pb-2">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<a class="aux-modern-button">
						<div class="aux-overlay"></div>
						<div class="aux-text">EXPLORE MORE <i class="bi bi-caret-right-fill"></i></div>
					</a>
				</div>
			</div>
			<div class="col-lg-6 card-list">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="feature_style aux-widget-advanced-text mb-30" data-aos="fade-up" data-aos-delay="50">
							<div class="card-box">
								<div class="space">

								</div>
								<div class="overlay-content" style="font-size: 18px;">
									<h4 style="font-size: 20px;">Retail Banking</h4>
									<p style="font-size: 18px;">
										For retail banks, digital is rewriting the rules of customer engagement and risk management.
									</p>
									<div class="group-btn">
										<a class="common-white-text-btn m-black-text" href="#">Explore More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="feature_style mt-40" data-aos="fade-up" data-aos-delay="100">
							<div class="card-box aux-widget-advanced-text2">
								<div class="space">

								</div>
								<div class="overlay-content" style="font-size: 18px;">
									<h4 style="font-size: 20px;">Retail Banking</h4>
									<p style="font-size: 18px;">
										For retail banks, digital is rewriting the rules of customer engagement and risk management.
									</p>
									<div class="group-btn">
										<a class="common-white-text-btn m-black-text" href="#">Explore More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="feature_style mb-30" data-aos="fade-up" data-aos-delay="150">
							<div class="card-box aux-widget-advanced-text3">
								<div class="space">

								</div>
								<div class="overlay-content" style="font-size: 18px;">
									<h4 style="font-size: 20px;">Retail Banking</h4>
									<p style="font-size: 18px;">
										For retail banks, digital is rewriting the rules of customer engagement and risk management.
									</p>
									<div class="group-btn">
										<a class="common-white-text-btn m-black-text" href="#">Explore More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="feature_style mt-40 mb-30"  data-aos="fade-up" data-aos-delay="200">
							<div class="card-box aux-widget-advanced-text4">
								<div class="space">

								</div>
								<div class="overlay-content" style="font-size: 18px;">
									<h4 style="font-size: 20px;">Retail Banking</h4>
									<p style="font-size: 18px;">
										For retail banks, digital is rewriting the rules of customer engagement and risk management.
									</p>
									<div class="group-btn">
										<a class="common-white-text-btn m-black-text" href="#">Explore More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
</section>-->


<style>
	.centerx,
	.header__basic--black .header__img,
	.section__crazy__color .wrapper__color .wrapper__panel .color .color__el h3,
	.section__handsketch__color .wrapper__audrio .color .color__el h3,
	.section__handsketch__color .wrapper__audrio img,
	.section__woy__color .wrapper__audrio .color .color__el h3,
	.section__woy__color .wrapper__audrio img {
		position: absolute;
		left: 50%;
		transform: translateX(-50%);
	}

	.centery,
	.header__basic--studio .header__img,
	.section__404 .title__block,
	.section__jobs .jobs__ul .jobs__ul__li .jobs__ul__li__a i,
	.section__site .site__template .site__template__bar .template__button {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
	}

	.centerxy,
	.flux__el--twitter p,
	.job__title .close--profil i,
	.job__title .title__block,
	.loading .loading__elements #display,
	.loading .loading__elements #progress,
	.navigation__project .navigation__project__block .content__text,
	.navigation__project .navigation__project__block:nth-child(2) .link,
	.other__team .profil__team .profil__team__li a img,
	.section__404 .overlay__404,
	.section__about .background__about .play i,
	.section__customer .customers .customers__li img,
	.section__projets .awards .awards__li a img,
	.section__projets .swiper-projets .swiper-slide .swiper-slide-block-content .text__content,
	.section__team .swiper-slide .slide__img .overlay,
	nav .center__navigation {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translateY(-50%) translateX(-50%);
	}

	.main__title {
		color: #f2f3f3;
		text-transform: uppercase;
		font-weight: 900;
		font-size: 2.6em;
		letter-spacing: 1px;
		margin: 0;
	}

	.main__title span {
		color: #ff2d71;
	}

	.main__subtitle {
		margin: 2px 0;
		font-weight: 700;
		font-size: .9em;
		color: #f2f3f3;
	}

	.main__subtitle span {
		color: #00a8af;
		font-style: italic;
	}


	.link {
		display: inline-block;
		width: auto;
		position: relative;
		text-decoration: none;
		color: #21272b;
		font-size: .7em;
		font-weight: 400;
		letter-spacing: 1px;
		text-transform: uppercase;
		color: #00a8af !important;
		transition: all .3s ease-in-out;
		z-index: 10;
	}

	.link:hover {
		letter-spacing: 2px;
	}

	.link__apply {
		display: block;
		width: 150px;
		padding: 16px 12px;
		background-color: #00a8af;
		border: 2px solid #00a8af;
		border-radius: 1px;
		color: #f2f3f3;
		text-decoration: none;
		text-transform: uppercase;
		text-align: center;
		font-weight: 700;
		font-size: .813em;
		letter-spacing: 1px;
		transition: all .3s ease-in-out;
	}

	.link__apply:hover {
		background-color: transparent;
		letter-spacing: 3px;
		border-radius: 1px;
	}

	.link__apply:active {
		background-color: transparent;
		letter-spacing: 3px;
		border-radius: 1px;
	}

	.link__apply:focus {
		background-color: transparent;
		letter-spacing: 3px;
		border-radius: 1px;
	}

	.swiper-container {
		width: 100%;
		height: auto;
		margin-left: auto;
		margin-right: auto;
		position: relative;
		cursor: -webkit-grab;
		cursor: grab;
	}

	.swiper-button-next,
	.swiper-button-prev {
		width: 50px;
		height: 50px;
		background-image: none;
		background-color: #e4e4e4;
		z-index: 2;
		cursor: pointer;
		text-align: center;
	}

	.swiper-button-next i,
	.swiper-button-prev i {
		font-size: 34px;
		color: #21272b;
		transition: all .3s ease-in-out;
	}

	.swiper-button-next:hover i,
	.swiper-button-prev:hover i {
		-webkit-animation: arrowRight 1s infinite;
		animation: arrowRight 1s infinite;
	}

	.swiper-button-next {
		position: absolute;
		top: 0;
		right: 0;
		margin-top: 0;
	}

	.swiper-button-prev {
		position: absolute;
		top: auto;
		bottom: 0;
		left: 0;
	}

	@-webkit-keyframes arrowRight {
		0% {
			transform: translate(0, -50%);
		}

		50% {
			transform: translate(-10px, -50%);
		}

		100% {
			transform: translate(0, -50%);
		}
	}

	@keyframes arrowRight {
		0% {
			transform: translate(0, -50%);
		}

		50% {
			transform: translate(-10px, -50%);
		}

		100% {
			transform: translate(0, -50%);
		}
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		width: 100%;
		display: flex;
	}

	.swiper-slide__block {
		width: 100%;
		margin: 0 auto;
		height: 100%;
		text-align: left;
	}

	.swiper-slide__block .swiper-slide__block__img {
		width: 100%;
		height: auto;
		overflow: hidden;
	}

	.swiper-slide__block .swiper-slide__block__img a {
		display: block;
		width: 100%;
		height: 100%;
	}

	.swiper-slide__block .swiper-slide__block__img img {
		width: 100%;
		height: auto;
		transition: all .3s ease-in-out;
	}

	.swiper-slide__block .swiper-slide__block__img:hover img {
		transform: scale(1.1);
		filter: brightness(.5);
	}

	.swiper-slide__block .swiper-slide__block__text {
		width: 85%;
		height: auto;
		margin: 0 auto;
		margin-top: 50px;
		position: relative;
	}

	.swiper-slide__block .main__title {
		color: #f2f3f3;
		text-transform: uppercase;
		font-weight: 900;
		font-size: 2.6em;
		letter-spacing: 1px;
		margin: 0;
		text-shadow: 7px 7px 16px #d2d2d2;
	}

	.swiper-slide__block .main__title span {
		color: #ff2d71;
	}

	.swiper-slide__block .main__subtitle {
		margin: 2px 0;
		font-weight: 700;
		font-size: .9em;
		color: #f2f3f3;
	}

	.swiper-slide__block .main__subtitle span {
		font-style: normal;
		color: #00a8af;
		letter-spacing: 1px;
	}

	.swiper-slide__block .main__subtitle,
	.swiper-slide__block .main__title,
	.swiper-slide__block .paragraphe {
		color: #21272b;
		z-index: 2;
		position: relative;
	}

	.swiper-slide__block .paragraphe {
		max-width: 413px;
		text-shadow: 7px 7px 16px #d2d2d2;
		margin-top: 24px;
	}

	.swiper-slide__block .number {
		font-size: 12em;
		font-weight: 900;
		width: 100%;
		display: block;
		color: rgba(16, 47, 65, .04);
		position: relative;
		bottom: 100px;
		z-index: 1;
		text-align: right;
		line-height: 120px;
		font-family: sans-serif;
	}

	.loading {
		width: 100%;
		height: 100vh;
		background-color: #f8f8f8;
		position: fixed;
		left: 0;
		top: 0;
		z-index: 9999;
		transform-origin: left top;
		overflow: hidden;
	}

	.loading .loading__elements {
		width: 100%;
		height: 50%;
	}

	.loading .loading__elements #progress {
		display: block;
		width: 300px;
		height: 30px;
		z-index: 1;
		background-color: #000;
		transition: all .3s ease-in-out;
	}

	.loading .loading__elements #progress::-webkit-progress-bar {
		display: block;
		width: 100%;
		-webkit-transition: all .3s;
		transition: all .3s;
	}

	.loading .loading__elements #progress::-webkit-progress-value {
		background-color: rgba(131, 201, 207, .8);
		background: -webkit-linear-gradient(#00a8af, #83c9cf);
	}

	.loading .loading__elements progress[value]::-webkit-progress-bar {
		background-color: #f8f8f8;
		border-radius: 2px;
		box-shadow: none;
	}

	.loading .loading__elements #display {
		display: block;
		font-size: 5em;
		z-index: 2;
		font-weight: 900;
		text-align: center;
		margin-bottom: 50px;
		color: #21272b;
	}

	.section__slider {
		width: 100%;
		height: auto;
		background-color: #f2f3f3;
		padding: 100px 0;
	}

	.section__slider .container__center {
		width: 100%;
		position: relative;
		margin-left: auto;
		margin-right: auto;
	}

	@media (min-width:1200px) {
		.swiper-container {
			height: 550px;
		}

		.swiper-slide__block .main__title {
			margin-top: 100px;
		}

		.swiper-slide__block .number {
			margin-top: 100px;
			font-size: 15em;
		}

		.swiper-slide__block .swiper-slide__block__text {
			width: 40%;
			height: 100%;
			max-height: 476px;
			max-width: 400px;
			position: absolute;
			background-color: transparent;
			top: 0;
			right: 0;
			margin-top: 0;
			padding: 0;
		}

		.swiper-slide__block .swiper-slide__block__text:before {
			content: "";
			display: block;
			width: 200px;
			max-width: 408px;
			height: 100%;
			background-color: #e4e4e4;
			position: absolute;
			left: -100px;
		}

		.swiper-slide__block .swiper-slide__block__img {
			width: 65%;
			max-height: 476px;
			height: 476px;
			max-width: 735px;
			overflow: hidden;
			position: relative;
		}

		.swiper-slide__block .swiper-slide__block__img img {
			position: absolute;
			top: 0;
			left: 0;
			width: auto;
			height: 100%;
		}

		.swiper-button-prev {
			bottom: 74px;
			background-color: #f2f3f3;
		}

		.swiper-button-next {
			right: 300px;
			background-color: #f2f3f3;
		}
	}

	@media (min-width:768px) {
		.swiper-slide__block .main__title {
			font-size: 3em;
		}

		.swiper-slide__block .main__subtitle {
			font-size: .9em;
		}

		.swiper-slide__block .swiper-slide__block__text {
			margin-top: 0px;
		}

		.main__subtitle {
			font-size: 1.1em;
		}
	}

	@media (min-width:992px) {
		.section__slider .container__center {
			max-width: 1200px;
			width: 85%;
		}

		.section__slider .container__center:after {
			content: "";
			display: block;
			width: 100%;
			height: 50px;
			position: absolute;
			bottom: 0;
			left: 0;
			z-index: 2;
			background: linear-gradient(to top, #f2f3f3, rgba(248, 248, 248, 0));
		}
	}
</style>

<section class="section__slider">
	<div class="container__center">
		<div class="section-title">
			<h2>Powered by Key Accelerators</h2>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="swiper-slide__block">
						<div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
							<a href="<?php echo base_url() ?>/blog_single/<?php echo $top_blog['id'] ?>">
								<img src="<?php echo app_path2 . $top_blog['file'] ?>" alt="img">
							</a>
							<!-- <a target="_blank" href="#">
								<img src="https://images.unsplash.com/photo-1456518563096-0ff5ee08204e?auto=format&amp;fit=crop&amp;w=1351&amp;q=60&amp;ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
							</a> -->
						</div>
						<div class="swiper-slide__block__text">
							<h2 data-swiper-parallax-x="-60%" class="main__title">
								<?php echo $top_blog['title']; ?>
								<h3 data-swiper-parallax-x="-50%" class="main__subtitle">
									<?php echo $top_blog['posted_on']; ?> <?php echo $top_blog['views']; ?> Views
								</h3>
								<p data-swiper-parallax-x="-40%" class="paragraphe"><?php echo $top_blog['short_descr']; ?></p>
								<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>
								<span data-swiper-parallax-y="60%" class="number">1</span>
						</div>
					</div>
				</div>
				<!-- </h2> -->
				<div class="swiper-slide">
					<div class="swiper-slide__block">
						<div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
						<a href="<?php echo base_url() ?>/blog_single/<?php echo $sec_blog['id'] ?>">
								<img src="<?php echo app_path2 . $sec_blog['file'] ?>" alt="img">
							</a>
						</div>
						<div class="swiper-slide__block__text">
							<h2 data-swiper-parallax-x="-60%" class="main__title">
								<?php echo $sec_blog['title']; ?>
							</h2>
							<h3 data-swiper-parallax-x="-50%" class="main__subtitle">
								<?php echo $sec_blog['posted_on']; ?> <?php echo $sec_blog['views']; ?> Views
							</h3>
							
							<p data-swiper-parallax-x="-40%" class="paragraphe"><?php echo $sec_blog['short_descr']; ?></p>
							<a data-swiper-parallax-x="-30%" style="z-index: 5;" class="link" target="_blank" href="#">Discover</a>
							<span data-swiper-parallax-y="60%" class="number">2</span>
						</div>
					</div>
				</div>
				<!-- third slide -->
				<div class="swiper-slide">
					<div class="swiper-slide__block">
						<div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
						<a href="<?php echo base_url() ?>/blog_single/<?php echo $third_blog['id'] ?>">
								<img src="<?php echo app_path2 . $third_blog['file'] ?>" alt="img">
							</a>
						</div>
						<div class="swiper-slide__block__text">
							<h2 data-swiper-parallax-x="-60%" class="main__title">
								<?php echo $third_blog['title']; ?>
							</h2>
							<h3 data-swiper-parallax-x="-50%" class="main__subtitle">
								<?php echo $third_blog['posted_on']; ?> <?php echo $third_blog['views']; ?> Views
							</h3>
							<p data-swiper-parallax-x="-40%" class="paragraphe"><?php echo $third_blog['short_descr']; ?></p>
							<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>
							<span data-swiper-parallax-y="60%" class="number">3</span>
						</div>
					</div>
				</div>

			</div>

			<div class="swiper-button-next">
				<i class="bi bi-arrow-right-short"></i>
			</div>

			<div class="swiper-button-prev">
				<i class="bi bi-arrow-left-short"></i>
			</div>
		</div>
	</div>
</section>


<section class="lets-discuss">
	<div class="container">
		<div class="row">
			<div class="col-md-10 lets_getin_info" data-aos="fade-in">
				<h3>We Make the Best Business Solutions</h3>
			</div>
			<div class="col-md-2 lets_getin">
				<a href="#" data-aos="fade-in" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Let's Discuss</a>
			</div>
		</div>
	</div>
</section>


<style>
	.features-section {
		/*background: #f4f4f4;*/
		padding-top: 120px;
	}

	.features-section .card {
		background: transparent;
		padding: 15px;
		border: 1px solid rgb(61 89 167 / 11%);
	}

	.feature_style {
		background: #fff;
		box-shadow: 0 20px 50px 5px #e9eef7;
		text-align: center;
		transition: .5s;
		border-radius: 7px;
	}

	.feature_style .space {
		opacity: 0;
		transition: all 0.3s ease;
		width: 100%;
		max-width: 100%;
		height: 330px;
	}

	.feature_style .overlay-content {
		position: absolute;
		top: 0;
		left: 0;
		height: 100%;
		width: 100%;
		box-sizing: border-box;
		padding: 30px;
		display: flex;
		flex-direction: column;
		z-index: 1;
	}

	.feature_style .overlay-content h4 {
		transition: all 0.3s ease;
	}

	.feature_style .overlay-content p {
		letter-spacing: 0.67px;
		transition: all 0.3s ease;
		color: #3c3c3c;
	}


	.aux-widget-advanced-text:hover {
		background-color: #fd346e;
		box-shadow: -20px 40px 70px rgb(253 52 110 / 30%);
		transition: all .3s ease-out;
	}

	.aux-widget-advanced-text2:hover {
		background-color: #6001d3;
		box-shadow: -20px 40px 70px rgb(96 1 211 / 30%);
		transition: all .3s ease-out;
	}

	.aux-widget-advanced-text3:hover {
		background-color: #fd346e;
		box-shadow: -20px 40px 70px rgb(253 52 110 / 30%);
		transition: all .3s ease-out;
	}

	.aux-widget-advanced-text4:hover {
		background-color: #6001d3;
		box-shadow: -20px 40px 70px rgb(96 1 211 / 30%);
		transition: all .3s ease-out;
	}

	.aux-modern-button {
		padding: 12px 23px;
		font-size: 1rem;
		font-weight: 500;
		color: #fff;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		flex-flow: row wrap;
		white-space: nowrap;
		user-select: none;
		line-height: 1.5;
		position: relative;
		transition: all .15s ease-in-out;
		cursor: pointer;
	}

	.aux-modern-button .aux-overlay {
		width: 100%;
		color: #fff;
	}

	.aux-text {
		z-index: 1;
	}

	.aux-modern-button .aux-overlay:before {
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		right: 0;
	}

	.aux-modern-button .aux-overlay:before {
		box-shadow: -15px 20px 50px 0 rgb(253 52 110 / 30%);
		border-radius: 28px;
		background-color: #fd346e;
	}

	.aux-modern-button:hover .aux-overlay:before {
		background-color: #fcdc00;
		box-shadow: -15px 20px 50px 0 rgb(252 220 0 / 30%);
		border-radius: 28px;
	}

	@media (min-width: 767px) {
		.feature_style:hover .card-box {
			transition: all 0.3s ease;
			padding: 0px;
			border-radius: 7px;
		}

		.feature_style:hover h4 {
			color: #fff;
			margin-bottom: 15px;
		}

		.feature_style:hover p {
			color: #fff;
		}
	}

	@media (min-width: 992px) {
		.features-info {
			position: absolute;
			top: -30px;
			left: 30px;
			z-index: 9;
		}

		.features-center-grid {
			margin-top: -120px;
		}
	}
</style>

<div class="features-section section-bottom-vart-60">
	<div class="container clearfix">
		<!--<div class="row justify-content-start justify-content-sm-center justify-content-md-start">
			<div class="col-lg-4 col-md-6 pb-20">
				<div class="heading-block features-info">
					<div class="section-title">
						<h2>Testimonials</h2>
					</div>
				</div>
			</div>
		</div>-->
		<div class="row align-items-md-center mt-3">
			<div class="col-md-4">
				<div class="card mt-3 mt-lg-3" data-aos="fade-up">
					<div class="feature_style aux-widget-advanced-text">
						<div class="card-box">
							<div class="space">

							</div>
							<div class="overlay-content">
								<h4 style="font-size: 20px;">Koye Health Happiness</h4>
								<p style="font-size: 15px;">
									One of the few advisory firms providing problem solving approach to the issues. You can expect quick solutions to the complex issues in the areas of compliance, legal and accounting. Be it international expansion or be it domestic set-up/ compliance issues, team at Hedge-Square has always helped us by going out of the way.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 features-center-grid">
				<div class="card mt-3" data-aos="fade-up" data-aos-delay="100">
					<div class="feature_style">
						<div class="card-box aux-widget-advanced-text2">
							<div class="space">

							</div>
							<div class="overlay-content">
								<h4 style="font-size: 20px;">Welding Alloys</h4>
								<p style="font-size: 15px;">
									It was really nice experience to work with team at Hedge-Square. We really appreciate professional approach and time bound services. We also appreciate your quick communication, response time and coordination to complete the tasks. We were able to complete all the activities related to this project within defined schedule with the help of your services.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="card mt-3 mt-lg-4" data-aos="fade-up" data-aos-delay="150">
					<div class="feature_style">
						<div class="card-box aux-widget-advanced-text3">
							<div class="space">

							</div>
							<div class="overlay-content">
								<h4 style="font-size: 20px;">Kartavya Healtheon</h4>
								<p style="font-size: 15px;">
									Hedge-Square is assisting us 360 degree. They have been doing regular internal checks and due-diligence so that to immune us from the risk of non-compliance. They have been providing Capital structuring solutions assisted us raising funds and structuring the deal in a way it is beneficial to both Investor as well as to the Company.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mt-3 mt-lg-3" data-aos="fade-up" data-aos-delay="200">
					<div class="feature_style">
						<div class="card-box aux-widget-advanced-text4">
							<div class="space">

							</div>
							<div class="overlay-content">
								<h4 style="font-size: 20px;">Homely</h4>
								<p style="font-size: 15px;">
									Being a start-up it was very important for us to have right advice on various matter of business operation and Hedge-Square exactly filled space of consultant. They helped us in creating various processes, creating financial model drafting legal documents and capital structuring for our start-up. Once you step in with Hedge-Square we doubt you need to go anywhere else for various things.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.client-inners {
		padding: 20px;
		display: flex;
		align-items: center;
		border: 1px solid #f7f7f7;
		height: 100px;
	}

	#clients-slider .owl-prev i,
	#clients-slider .owl-next i {
		position: absolute;
		top: 50%;
		margin-top: -20px;
		font-size: 22px;
	}

	#clients-slider .owl-prev i {
		left: -35px;
	}

	#clients-slider .owl-next i {
		right: -35px;
	}
</style>
<section class="our-clients section-top-vart-40 section-bottom-vart-40">
	<div class="container">
		<div class="section-title title-center">
			<h2>Client Stories</h2>
		</div>

		<div id="clients-slider" class="owl-carousel">
			<div class="item">
				<div class="client-inners">
					<img src="assets/images/clients-brand/legato/1.png" alt="">
				</div>
			</div>
			<div class="item">
				<div class="client-inners">
					<img src="assets/images/clients-brand/legato/2.png" alt="">
				</div>
			</div>
			<div class="item">
				<div class="client-inners">
					<img src="assets/images/clients-brand/legato/3.png" alt="">
				</div>
			</div>
			<div class="item">
				<div class="client-inners">
					<img src="assets/images/clients-brand/legato/4.png" alt="">
				</div>
			</div>
			<div class="item">
				<div class="client-inners">
					<img src="assets/images/clients-brand/legato/5.png" alt="">
				</div>
			</div>
			<div class="item">
				<div class="client-inners">
					<img src="assets/images/clients-brand/legato/6.png" alt="">
				</div>
			</div>
			<div class="item">
				<div class="client-inners">
					<img src="assets/images/clients-brand/legato/7.png" alt="">
				</div>
			</div>
		</div>

		<a href="client-stories.php" class="white-btn">View All Clients</a>

	</div>
</section>

<!------Footer ------>
<?php
echo view('website/footer');
?>


<!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Let's Discuss</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="bi bi-x-lg" aria-hidden="true"></i>
				</button>
			</div>

			<style>
				.error {
					color: #ec1e24;
					font-size: 10px;
					font-weight: bold;
				}
			</style>
			<div class="modal-body">
				<form method="POST" onsubmit="validate()" action="insert_enq">
					<div class="form-group">
						<label>Name<span class="label-star">*</span></label>
						<input type="text" class="form-control popup-input" name="name" id="name" placeholder="Full Name" onkeyup="val_name()" required>
						<span class="error" id="name_err"></span>
					</div>

					<div class="form-group">
						<label>Email<span class="label-star">*</span></label>
						<input type="email" class="form-control popup-input" name="email" id="email" placeholder="E-mail" onkeyup="val_email()" required>
						<span class="error" id="email_err"></span>
					</div>

					<div class="form-group">
						<label>Mobile Number<span class="label-star">*</span></label>
						<input type="text" class="form-control popup-input" name="mobile_number" id="mobile_number" pattern="[0-9]{10}" placeholder="Mobile Number" onkeyup="val_num()" required>
						<span class="error" id="mobile_err"></span>
					</div>

					<div class="form-group">
						<label>Services Required</label>
						<input type="text" class="form-control popup-input" name="serv" id="serv" placeholder="Your Services Required" onkeyup="val_ser()" required>
						<span class="error" id="servic_err"></span>
					</div>

					<button type="submit" class="button btn-red" id="letus">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>


<script>
	// validations 

	let nameErr = document.getElementById('name_err');
	let emailErr = document.getElementById('email_err');
	let numErr = document.getElementById('mobile_err');
	let serErr = document.getElementById('servic_err');

	function val_name() {
		let name = document.getElementById('name').value;

		if (String(name).length == 0) {
			nameErr.innerHTML = "Name required";
			return false;
		} else if (String(name).length < 2) {
			nameErr.innerHTML = "Enter your name";
			return false;
		} else {
			nameErr.innerHTML = "Valid";
			return true;
		}
	}

	function val_email() {
		let email = document.getElementById('email').value;

		if (email.length == 0) {
			emailErr.innerHTML = "Email required";
			return false;
		} else if (!email.match(/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/)) {
			emailErr.innerHTML = "Email format invalid";
			return false;
		} else {
			emailErr.innerHTML = "Email valid";
			return true;
		}
	}

	function val_num() {
		let num = document.getElementById('mobile_number').value;

		if (num.length == 0) {
			numErr.innerHTML = "Number required";
			return false;
		} else if (num.length < 10 || num.length >= 11) {
			numErr.innerHTML = "Number format invalid";
			return false;
		} else {
			numErr.innerHTML = "Valid number";
			return true;
		}
	}

	function val_ser() {
		let service = document.getElementById('serv').value;

		if (service.length == 0) {
			serErr.innerHTML = "required";
			return false;
		} else {
			serErr.innerHTML = "valid";
			return true;
		}
	}

	function validate() {
		if (val_name() && val_email() && val_num() && val_ser() == true) {
			alert('Thank you!');
		} else {
			alert('Credentials required');
		}
	}
</script>