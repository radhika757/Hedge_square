<?php include "header.php"?>

<!----------- Inner Slider ----------->
<section class="inner-title-bar" style="background: url(https://static.vecteezy.com/system/resources/previews/001/270/610/large_2x/red-and-black-gradient-colored-texture-vector.jpg) center no-repeat; background-size: cover;">
	<div class="container">
		<div class="row justify-content-center">
			<h2>Contact Us</h2>
		</div>
		<div class="row justify-content-center">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
			</ul>
		</div>
	</div>
</section>

<style>
    .error{
        font-size: 10px;
        color: red;
        font-weight: bold;
    }
</style>
<section class="section-top-vart-60 section-bottom-vart-60">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 contact-address">
				<div class="section-title">
					<h2>Get in Touch</h2>
					<p>Let us know how we can help.</p>
				</div>
				<ul>
					<li><i class="bi bi-telephone"></i>+91 97699 51611, +91 76665 51611</li>
					<li><i class="bi bi-envelope"></i>hemant@hedge-square.com, hedge.square@gmail.com</li>
					<li><i class="bi bi-skype"></i>Skype@:hedge.square</li>
					<li><i class="bi bi-map"></i> 1st Floor, D N Mahajan & Brothers, Building No 1, Mahajan Silk Mill Compound, Behind Union Bank, LBS Marg, Vikhroli West, Mumbai - 400079.</li>
				</ul>
			</div>
			<div class="col-lg-6">
				<div class="contact_from_box">
					<div class="contact_title pb-4">
						<h3>Send Message </h3>
					</div>
					<form action="contact_form" method="POST" onsubmit="validate()" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12">
								<div class="form_box mb-15">
									<input type="text" name="name" id="name" onkeydown="val_name()" placeholder="Name">
                                    <span class="error" id="name_err"></span>
                                </div>
							</div>
							<div class="col-lg-12">
								<div class="form_box mb-15">
									<input type="text" name="mobile" id="num" onkeydown="val_num()" placeholder="Mobile Number">
                                    <span class="error" id="num_err"></span>
                                </div>
							</div>
							<div class="col-lg-12">
								<div class="form_box mb-15">
									<input type="email" name="email" id="mail" onkeydown="val_email()" placeholder="Email Address">
								    <span class="error" id="email_err"></span>
                                </div>
							</div>
							<div class="col-lg-12">
								<div class="form_box mb-15">
									<input type="text" name="subject" id="subj" onkeydown="val_subj()" placeholder="Subject">
								    <span class="error" id="subj_err"></span>
                                </div>
							</div>
							<div class="col-lg-12">
								<div class="form_box mb-15">
									<textarea name="message" id="message"  onkeydown="val_msge()" placeholder="Write a Message"></textarea>
                                   
                                </div>
                                <span class="error" id="msge_err"></span>
								<div class="quote_btn">
									<button type="submit">Send Message</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="google_map">
	<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.4268360680517!2d72.95796601490666!3d19.17655065378733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8e4fcc15ae7%3A0x598250c99b9542ee!2sHedge-Square+Consultancy+Services+Pvt.+Ltd.!5e0!3m2!1sen!2sus!4v1561025582225!5m2!1sen!2sus"></iframe>		
</div>


<!------Footer------>
<?php include "footer.php"?>


<!--Validations --->
<script>


    let nameErr = document.getElementById('name_err');
	let emailErr = document.getElementById('email_err');
	let numErr = document.getElementById('num_err');
	let subErr = document.getElementById('subj_err'); 
    let msgeErr = document.getElementById('msge_err');

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
		let email = document.getElementById('mail').value;

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
		let num = document.getElementById('num').value;

		if (num.length == 0) {
			numErr.innerHTML = "Number required";
			return false;
		} else if (num.length > 10  ) {
			numErr.innerHTML = "Number format invalid";
			return false;
		} else {
			numErr.innerHTML = "Valid number";
			return true;
		}
	}

	function val_subj(){
		let service = document.getElementById('subj').value;

		if(service.length == 0){
			msgeErr.innerHTML = "required";
			return false;
		} else{
			msgeErr.innerHTML = "valid";
			return true;
		}
	}

    
	function val_msge(){
		let service = document.getElementById('message').value;

		if(service.length == 0){
			subErr.innerHTML = "required";
			return false;
		} else{
			subErr.innerHTML = "valid";
			return true;
		}
	}

	function validate(){
		if(val_name() && val_email() && val_num() && val_subj() && val_msge() ==  true){
			alert('Thank you!');
		} else{
			alert('Credentials required');
		}
	}

</script>