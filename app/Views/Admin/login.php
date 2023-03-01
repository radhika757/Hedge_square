<!DOCTYPE html>
<html lang="en">
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Sum circle</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		
		<link href="<?php echo base_url();?>/admin_assests/plugins/global/plugins1.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>/admin_assests/css/style1.bundle.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo base_url();?>/admin_assests/js/scripts1.bundle.js"></script>
	</head>
	<body id="kt_body" class="bg-white">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url()">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!-- <a href="index.html" class="mb-12"> -->
						<!-- <img alt="Logo" src="" class="h-45px" /> -->
					<!-- </a> -->
					<div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="<?php echo base_url();?>login/checklogin" method="post" >
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">Headge-square</h1>
								<!-- <div class="text-gray-400 fw-bold fs-4">New Here?
									<a href="" class="link-primary fw-bolder">Create an Account</a>
								</div> -->
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Name</label>
								<input class="form-control form-control-lg form-control-solid" type="text" name="name" autocomplete="off" id="name"/>
								<span id="emailid" style="display:none;color:red">Name is required</span>
								<span id="emaildemo" style="display:none;color:red"></span>
							</div>
							<div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<!-- <a href="" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> -->
								</div>
								<input class="form-control form-control-lg form-control-solid" type="password" name="password" id="password" autocomplete="off" />
								<span id="pwd" style="display:none;color:red">The password is required</span>
							</div>
							<div class="text-center">
								<button type="button" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5" onclick="validateform()">
									
									<span class="indicator-label">Sign-In</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
									</span>
								</button>
							</div>	
							
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?php echo base_url();?>/assets/plugins/global/plugins1.bundle.js"></script>
		<script src="<?php echo base_url();?>/assets/js/scripts1.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?php echo base_url();?>/assets/js/login/login.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
</html>