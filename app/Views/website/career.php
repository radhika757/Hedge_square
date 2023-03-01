<?php include "header.php" ?>

<!----------- Inner Slider ----------->
<section class="inner-title-bar" style="background: url(https://static.vecteezy.com/system/resources/previews/001/270/610/large_2x/red-and-black-gradient-colored-texture-vector.jpg) center no-repeat; background-size: cover;">
	<div class="container">
		<div class="row justify-content-center">
			<h1>Careers</h1>
		</div>
		<div class="row justify-content-center">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Careers</li>
			</ul>
		</div>
	</div>
</section>

<section class="section-top-vart-60 section-bottom-vart-60">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-6">
				<div class="contact_from_box">
					<div class="contact_title pb-4">
						<h3>Apply Now</h3>
					</div>
					<form action="career_apply" method="POST" onsubmit="" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-6">
								<div class="form_box mb-15">
									<input type="text" name="name" id="name" placeholder="Name" onkeydown="val_name()">
									<span id="name_err"></span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_box mb-15">
									<input type="text" name="mobile" id="mobile" placeholder="Mobile Number"  onkeydown="val_num()">
									<span id="mobile_err"></span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_box mb-15">
									<input type="email" name="email"  id="email"  placeholder="Email Address" onkeydown="val_email()">
									<span id="email_err"></span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_box mb-15">
									<input type="text" name="city" id="city" placeholder="City" onkeydown="val_city()">
									<span id="city_err"></span>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form_box mb-15">
									<select class="form-select form-control" name="apply_career">
										<option value="none" selected="" disabled="">Choose Desired Position</option>
										<option value="Operator">Operator</option>
										<option value="Manager">Manager</option>
										<option value="Developer">Developer</option>
										<option value="Designer">Designer</option>
									</select>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form_box mb-15">
									<label class="input append-small-btn">
										<div class="upload-btn">
											Browse
											<!-- <input type="file" name="file2" onchange="document.getElementById('file1_input').value = this.value;"> -->
										</div>
										<input type="file" id="file1_input" name="file1" readonly="" placeholder="Add Your CV">
										<small>Only: pdf / doc Size: lessthan 1 Mb</small>
									</label>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form_box mb-15">
									<textarea name="address" id="address" placeholder="Address" onkeydown="val_add()"></textarea>
									<span id="add_err"></span>
								</div>
								<div class="quote_btn">
									<button type="submit" onclick="validate()">Send</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!------Footer------>
<?php include "footer.php" ?>

<script>
	let nameErr = document.getElementById('name_err');
	let emailErr = document.getElementById('email_err');
	let numErr = document.getElementById('mobile_err');
	let cityErr = document.getElementById('city_err');
	let addErr = document.getElementById('add_err');

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

	function val_city() {
		let service = document.getElementById('serv').value;

		if (service.length == 0) {
			serErr.innerHTML = "required";
			return false;
		} else {
			serErr.innerHTML = "valid";
			return true;
		}
	}

	function val_add(){
		let addr = document.getElementById('address').value;

		if(addr.length == 0){
			addErr.innerHTML = "Required";
			return false;
		} else{
			addErr.innerHTML = "Valid";
			return true;
		}
	}

	function validate() {
		if (val_name() && val_email() && val_num() && val_city() && val_add()  == true) {
			alert('Thank you!');
		} else {
			alert('Credentials required');
			location.reload();
		}
	}
</script>