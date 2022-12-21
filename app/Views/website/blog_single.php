<?php include "header.php"?>
<br>
<br>
<br>
<br>
<!----------- Inner Slider ----------->

<style>
/* ------------------------------
		 Layouts
------------------------------ */
.masonry-layout .card {
  border: 0;
  border-radius: 0;
  margin-bottom: 0px;
  background-color: transparent;
}

.masonry-layout .card-columns {
  -webkit-column-count: 3;
  column-count: 3;
  -webkit-column-gap: 30px;
          column-gap: 30px;
}
.col2-layout .card-columns {
  -webkit-column-count: 2;
  column-count: 2;
}

.masonry-layout .card-columns .card {
  margin-bottom: 20px;
  margin-top: 40px;
}

.post-card {
    background-color: #ffffff !important;
    padding: 30px;
	margin-bottom: 0px;
    border-radius: 20px !important;
    display: block;
    position: relative;
    -webkit-box-shadow: 0px 5px 20px 0px rgb(69 67 96 / 10%);
    box-shadow: 0px 5px 20px 0px rgb(69 67 96 / 10%);
}

.post-card-image {
    margin-top: -60px;
    margin-bottom: 30px;
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    -webkit-box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 0 transparent;
    box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 0 transparent;
}
.post-card-image img {
    border-radius: 20px;
    -webkit-transition: all 0.9s ease-in-out;
    transition: all 0.9s ease-in-out;
}
.post-card-image img:hover {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.post-card-content .categorie {
    margin-bottom: 20px;
}
.categorie {
    background-color: #f67280;
    color: #ffffff;
    padding: 3px 15px;
    display: inline-block;
    margin: auto;
    text-align: center;
    font-size: 13px;
    border-radius: 20px;
    font-weight: 700;
    text-transform: capitalize;
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.categorie:hover {
  background-color: #2b2b2b;
  color: #ffffff !important;
}
.post-card-content h5 {
	font-size: 20px;
	font-weight: 700;
	line-height: 1.4;   
    margin-bottom: 8px;
}
.post-card-content h5 a {
	color: #152035;
  	-webkit-transition: all 0.5s ease-in-out;
  	transition: all 0.5s ease-in-out;
}

.post-card-content h5 a:hover {
  color: #f67280;
}

.post-card-content .short-desc {
  margin-bottom: 30px;
}
.post-card-info ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
		  margin:0px;
}

.post-card-info img {
  width: 40px !important;
  height: 40px;
  border-radius: 50%;
  margin-right: 7px;
}

.post-card-info li {
  margin-bottom: 0;
  font-size: 13px;
  color: #506172;
  text-transform: capitalize;
  font-weight: 500;
}
.post-card-info li a{
	color: #506172;
}
.post-card-info li a:hover {
  color: #f67280;
}
.post-card-info li.dot {
  margin: 2px 15px !important;
  width: 4px;
  height: 4px;
  background-color: #f67280;
  border-radius: 50%;
  display: block;
}
.btn-simple {
    color: #8F9BAD;
    padding: 10px 40px;
    background: #fff;
    border: solid 1px #EBEBEB;
	border-radius: 30px;
}
.btn-simple:hover {
    color: #ec1e24;
    border-color: #ec1e24;
}
.Loadmore{margin:30px 0 30px 0;}
.widget {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 20px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0px 5px 20px 0px rgb(69 67 96 / 10%);
    box-shadow: 0px 5px 20px 0px rgb(69 67 96 / 10%);
}
.widget .section-title {
    margin-bottom: 30px;
    margin-top: 5px;
	padding:0px;
}
.widget .section-title h5 {
    text-transform: capitalize;
    position: relative;
	font-weight: 700;
}
.widget .section-title h5:after {
    background-color: #ec1e24;
    display: block;
    position: absolute;
    content: "";
    left: auto;
    top: -5px;
    width: 30px;
    height: 2px;
}

.widget-latest-posts .last-post {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 30px;
  position: relative;
}
.widget-latest-posts .last-post:last-child {
    margin-bottom: 0;
}

.widget-latest-posts .last-post .image {
  width: 90px;
  height: 90px;
  margin-right: 15px;
  overflow: hidden;
  position: relative;
  border-radius: 20px;
}

.widget-latest-posts .last-post .image img {
  border-radius: 20px;
  width: 90px;
  height: 90px;
  -webkit-transition: all 0.9s ease-in-out;
  transition: all 0.9s ease-in-out;
}

.widget-latest-posts .last-post .image img:hover {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.widget-latest-posts .last-post .nb {
  position: absolute;
  content: "";
  left: -5px;
  top: -5px;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: #f67280;
  text-align: center;
  color: #ffffff;
  font-size: 13px;
  font-weight: 800;
  line-height: 2;
  z-index: 1;
}
.widget-latest-posts .last-post .content {
  width: calc(100% - 90px);
}
.widget-latest-posts .last-post .content p, .widget-latest-posts .last-post .content a {
  font-weight: 900;
  color: #152035;
  margin-bottom: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.widget-latest-posts .last-post .content a:hover {
  color: #f67280 !important;
}
.widget-latest-posts .last-post .content small {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 8px;
  text-transform: capitalize;
  font-size: 13px;
  color: #506172;
  font-weight: 400;
}

.widget-latest-posts .last-post .content small .dot {
  margin: 0px 6px  0px 0px !important;
}

.widget-latest-posts .last-post .content small span {
  color: #f67280;
  margin-right: 5px;
  direction: ltr;
}

.widget-categories li {
  background-color: #F9F9FF;
  padding: 15px 20px;
  border-radius: 10px;
  margin-bottom: 15px;
}

.widget-categories li a {
  font-weight: 700;
}

.widget-categories li a:hover {
  color: #f67280;
}

.widget-categories li span {
  float: right;
  color: #506172;
  padding: 2px 10px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 700;
}

.widget-categories li:last-child {
  margin-bottom: 0px;
}

.widget-instagram {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: auto auto auto;
      grid-template-columns: auto auto auto;
  -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
  grid-gap: 10px;
}

.widget-instagram li {
  overflow: hidden;
  border-radius: 5px;
}

.widget-instagram li img {
  border-radius: 5px;
  -webkit-transition: all 0.9s ease-in-out;
  transition: all 0.9s ease-in-out;
}

.widget-instagram li img:hover {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.widget-tags ul li {
  background-color: #F9F9FF;
  display: inline-block;
  padding: 4px 11px;
  margin-bottom: 5px;
  margin-right: 2px;
  border-radius: 20px;
  font-size: 13px;
  text-transform: capitalize;
  font-weight: 600;
}
.widget-tags ul li a{
	color: #506172;
}
.widget-tags ul li a:hover {
  color: #506172;
}

@media screen and (max-width: 768px){
.masonry-layout .card-columns, .col2-layout .card-columns {
    -webkit-column-count: 1; column-count: 1;
}
.post-card{margin-bottom:20px;}
.Loadmore{margin:0 0 40px 0;}
}

.post-bottom{display:flex; margin-bottom: 15px;}
.social-share{margin-left: auto!important;}

.social-share .toggle-button{
    font-size: 16px;
    color: #9faabb;
    background-color: transparent;
    border: 0;
    padding: 0;
    vertical-align: middle;
}
.icon-share:before {
	font-family: bootstrap-icons; 
	content:'\F52E';
}
.icon-close:before {
	font-family: bootstrap-icons; 
    content: "\F623";
}
.social-share .icons {
    display: inline;
    vertical-align: middle;
}
.social-share .icons:after {
    content: "";
    background: #DDD;
    display: inline-block;
    height: 1px;
    margin-left: 10px;
    margin-right: 10px;
    vertical-align: middle;
    width: 30px;
}
.social-share .icons {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.social-share .icons.visible {
    opacity: 1;
    visibility: visible;
}

.social-share .icons li:not(:last-child) {
    margin-right: 0.8rem;
}
.social-share .icons li a {
    color: #9faabb;
    font-size: 14px;
}
.list li {
    position: relative;
    padding-left: 15px;
    margin-bottom: 10px;
}
.list li:before {
    background-color: #506172;
    border-radius: 50%;
    position: absolute;
    content: "";
    left: 0;
    top: 10px;
    width: 5px;
    height: 5px;
}
</style>

<!--mansory-layout-->
<section class="masonry-layout section-top-vart-60 section-bottom-vart-20" style="background-color: #F9F9FF;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 mt--10 ">
				<!--Post-1-->
				<div class="card">
					<div class="post-card">
						<div class="post-card-image">
							<a href="blog-single.php">
								<img src="<?php echo app_path2 . $single_blog['file'] ?>" alt="img">
							</a>
						</div>
						<div class="post-card-content">
							<div class="post-bottom">
								<a href="#" class="categorie" style="text-align: left; margin: 0;"><?php echo $single_blog['category'] ?></a>

								<div class="social-share">
									<ul class="icons mb-0">
										<li class="list-inline-item"><a href="#"><i class="bi bi-whatsapp"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="bi bi-facebook"></i></a></li>
									</ul>
									<button class="toggle-button icon-share"></button>
								</div>								
							</div>

							<h5><?php echo $single_blog['title'] ?></h5>
							
							<div class="post-card-info">
								<ul class="list-inline">
									<li>
										<img src="https://noonpost.netlify.app/html/template/assets/img/author/1.jpg" alt="">
									</li>
									<li><?php echo 
                                    $single_blog['created_by'] ?></li>
									<li class="dot"></li>
									<li><?php echo $single_blog['posted_on'] ?></li>
									<li class="dot"></li>
									<li><?php echo $single_blog['views'] ?> views</li>
								</ul>
							</div>
							<div class="full-desc mt-20 text-justify">
								<?php echo $single_blog['descr'] ?>
						</div>
					</div>
				</div>

				<!--widget-comments-->
				<div class="widget mt-30">
					<div class="section-title">
						<h5>3 Comments</h5>
					</div>
					<ul class="widget-comments">
						<li class="comment-item">
							<img src="https://noonpost.netlify.app/html/template/assets/img/user/1.jpg" alt="">
							<div class="content post-card-info">
								<ul class="info list-inline">
									<li>Mohammed Ali</li>
									<li class="dot"></li>
									<li> January 15, 2021</li>
								</ul>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
							</div>
						</li>
						<li class="comment-item">
							<img src="https://noonpost.netlify.app/html/template/assets/img/author/1.jpg" alt="">
							<div class="content post-card-info">
								<ul class="info list-inline">
									<li>Simon Albert</li>
									<li class="dot"></li>
									<li> January 15, 2021</li>
								</ul>
													
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci
								</p>
							</div>
						</li>
						<li class="comment-item">
							<img src="https://noonpost.netlify.app/html/template/assets/img/user/2.jpg" alt="">
							<div class="content post-card-info">
								<ul class="info list-inline">
									<li>Adam bobly</li>
									<li class="dot"></li>
									<li> January 15, 2021</li>
								</ul>
				
								<p>Lorem ipsum dolor, sit amet</p>
							</div>
						</li>
					</ul>
                
                
					<!--Leave-comments-->
					<div class="section-title">
						<h5>Leave a Reply</h5>
					</div>
					<form class="widget-form" action="#" method="POST">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message*" required="required"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="Name*" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
								</div>
							</div>
							<div class="col-12 mb-10">
								<div class="form-group">
									<input type="text" name="website" id="website" class="form-control" placeholder="website">
								</div>
							</div>
							<div class="col-12">
								<button type="submit" name="submit" class="button btn-red">
									Submit
								</button>
							</div> 
						</div>
					</form>
				</div>
			</div>
            </div>
<style>
.widget-form .form-control {
    background-color: #F9F9FF;
    border: 1px solid #eee;
    border-radius: 20px;
    padding: 22px 20px;
    font-size: 14px;
    color: #152035;
    display: inline-block;
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.widget-form .form-control:focus, .widget-form .form-control:hover {
  -webkit-box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);
          box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);
  background-color: #ffffff;
}
.widget-comments {
  margin-bottom: 40px;
}

.widget-comments .comment-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 30px;
}

.widget-comments .comment-item img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-right: 15px;
}

.widget-comments .comment-item .content p {
  margin-bottom: 15px;
}

.widget-comments .comment-item .content .info {
  margin-bottom: 10px;
}

.widget-comments .comment-item .content .info li {
  margin-bottom: 0;
  font-size: 14px;
  color: #506172;
  text-transform: capitalize;
  font-weight: 400;
}
</style>
			<div class="col-lg-4 max-width">
				<!--widget-latest-posts-->
				<div class="widget ">
					<div class="section-title">
						<h5>Latest Posts</h5>
					</div>
					<ul class="widget-latest-posts mb-0">
						<li class="last-post">
							<div class="image">
								<a href="blog-single.php">
									<img src="https://noonpost.netlify.app/html/template/assets/img/latest/1.jpg" alt="...">
								</a>
							</div>
							<div class="nb">1</div>
							<div class="content">
								<p>
									<a href="blog-single.php">5 Things I Wish I Knew Before Traveling to Malaysia</a>
								</p>
								<small>
									<span class="bi bi-clock"></span> August 24, 2022</small>
							</div>
						</li>
						<li class="last-post">
							<div class="image">
								<a href="blog-single.php">
									<img src="https://noonpost.netlify.app/html/template/assets/img/latest/2.jpg" alt="...">
								</a>
							</div>
							<div class="nb">2</div>
							<div class="content">
								<p>
									<a href="blog-single.php">Everything you need to know about visiting the Amazon.</a>
								</p>
								<small>
									<span class="bi bi-clock"></span> August 24, 2022</small>
							</div>
						</li>
						<li class="last-post">
							<div class="image">
								<a href="blog-single.php">
									<img src="https://noonpost.netlify.app/html/template/assets/img/latest/3.jpg" alt="...">
								</a>
							</div>
							<div class="nb">3</div>
							<div class="content">
								<p>
									<a href="blog-single.php">How to spend interesting vacation after hard work?</a>
								</p>
								<small>
									<span class="bi bi-clock"></span> August 24, 2022</small>
							</div>
						</li>
						<li class="last-post">
							<div class="image">
								<a href="blog-single.php">
									<img src="https://noonpost.netlify.app/html/template/assets/img/latest/4.jpg" alt="...">
								</a>
							</div>
							<div class="nb">4</div>
							<div class="content">
								<p>
									<a href="blog-single.php">10 Best and Most Beautiful Places to Visit in Italy</a>
								</p>
								<small>
									<span class="bi bi-clock"></span> August 24, 2022</small>
							</div>
						</li>
					</ul>
				</div>
				<!--/-->
				
				<!--widget-categories-->
				<div class="widget">
					<div class="section-title">
						<h5>Categories</h5>
					</div>
					<ul class="widget-categories mb-0">
						<li>
							<a href="#" class="categorie">Legal</a>
							<span class="ml-auto">22 Posts</span>
						</li>
						<li>
							<a href="#" class="categorie">Business</a>
							<span class="ml-auto">18 Posts</span>
						</li>
						<li>
							<a href="#" class="categorie">CA</a>
							<span class="ml-auto">14 Posts</span>
						</li>
						<li>
							<a href="#" class="categorie">Real Estate</a>
							<span class="ml-auto">10 Posts</span>
						</li>
					</ul>
				</div>
				<!--/-->
				
				<!--widget-instagram-->
				<div class="widget">
					<div class="section-title">
						<h5>Instagram</h5>
					</div>
					<ul class="widget-instagram mb-0">
						<li>
							<a class="image" href="#">
								<img src="https://noonpost.netlify.app/html/template/assets/img/instagram/1.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="https://noonpost.netlify.app/html/template/assets/img/instagram/2.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="https://noonpost.netlify.app/html/template/assets/img/instagram/3.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="https://noonpost.netlify.app/html/template/assets/img/instagram/4.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="https://noonpost.netlify.app/html/template/assets/img/instagram/5.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="https://noonpost.netlify.app/html/template/assets/img/instagram/6.jpg" alt="">
							</a>
						</li>
					</ul>
				
				</div>
				<!--/-->
				<!--widget-tags-->
				<div class="widget">
					<div class="section-title">
						<h5>Tags</h5>
					</div>
					<div class="widget-tags">
						<ul class="list-inline mb-0">
							<li>
								<a href="#">Legal</a>
							</li>
							<li>
								<a href="#">Business</a>
							</li>
							<li>
								<a href="#">CA</a>
							</li>
							<li>
								<a href="#">Real Estate</a>
							</li>
							<li>
								<a href="#">beach</a>
							</li>
							<li>
								<a href="#">fashion</a>
							</li>
							<li>
								<a href="#">livestyle</a>
							</li>
							<li>
								<a href="#">healty</a>
							</li>
							<li>
								<a href="#">food</a>
							</li>
							<li>
								<a href="#">breakfast</a>
							</li>
				
						</ul>
					</div>
				</div>
				<!--/-->
			</div>
		</div>
	</div>
</section><!--/-->


<!------Footer------>
<?php include "footer.php"?>