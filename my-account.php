<?php 

session_start();
error_reporting('0');
 include('admin/config.php');

if(isset($_REQUEST['register']))

{


$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
//$cpass=$_REQUEST['cpass'];


$sql="select * from user_vendor where (email='$email');";
 $res=mysqli_query($con,$sql);

  if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
                echo '<script>alert("Email Already Exists")</script>';

             
                
        }

    }


    else {

$result =mysqli_query($con,"insert into `user_vendor`(`name`,`email`,`password`) values('$name','$email','$pass');");

 echo '<script>alert("Regsited Seccessfully")</script>';

$sql="select * from user_vendor where (email='$email' and password='$pass');";
 $res=mysqli_query($con,$sql);

  if (mysqli_num_rows($res) > 0) {

    $row = mysqli_fetch_assoc($res);

$_SESSION['name']=$row['name'];
  $_SESSION['id']=$row['id'];


}

    }


}

if(isset($_REQUEST['login'])){


$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$sql="select * from user_vendor where (email='$email' and password='$pass');";
 $res=mysqli_query($con,$sql);

  if (mysqli_num_rows($res) > 0) {

    $row = mysqli_fetch_assoc($res);

  echo $_SESSION['name']=$row['name'];
  echo $_SESSION['id']=$row['id'];

header('location:index.php');

}

else {

 echo '<script>alert("Please Regsiter for Login")</script>';

 header('location:index.php');

}

}


if(isset($_REQUEST['fpass'])){


$lemail=$_REQUEST['lemail'];

$sql="select * from user_vendor where (email='$lemail');";
 $res=mysqli_query($con,$sql);

  if (mysqli_num_rows($res) > 0) {

 $row = mysqli_fetch_assoc($res);

 echo '<script>alert("Your Password sent to you Regsitered Email")</script>';

}

else {

 echo '<script>alert("Your Email is not Regsitered with us")</script>';


}

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Stapita</title>
	<!-- inlcude google archivo & lora font cdn link -->
	<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Lora:ital,wght@0,400;0,700;1,400;1,700&amp;family=Muli:ital@0;1&amp;family=Merriweather&amp;display=swap" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<div class="phStickyWrap phVii w-100">
			<!-- pageHeader -->
			
<?php include('header.php');?>

		</div>
		<main>
			<!-- loginBlock -->
			<article class="loginBlock hdIsVii d-flex w-100">
				<div class="lbAlignWrap d-flex align-items-center w-100">
					<div class="container py-6">
						<!-- exhiTabList -->
						<ul class="nav nav-tabs justify-content-center exhiTabList exhiTabListIV d-block d-flex mb-9" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" name=login aria-selected="true">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" name=register  data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
							</li>
						</ul>
						<div class="row">
							<div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
								<div class="extraWrap px-md-12">
									<!-- tab-content -->
									<div class="tab-content">
										<!-- login-tab -->
										<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
											<form action="#" method="POST">
												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">User Name or Email <span class="text-brown">*</span></strong>
														<input name=email type="text" class="form-control formControlMedium d-block w-100">
													</label>
												</div>
												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Password <span class="text-brown">*</span></strong>
														<input name=pass type="password" class="form-control formControlMedium d-block w-100">
													</label>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="form-group position-relative mb-3">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="rm">
															<label class="custom-control-label" for="rm">Remember Me</label>
														</div>
													</div>
													<div class="form-group position-relative mb-3">
														<a href="javascript:void(0);" class="btnForget textDecorationNone text-secondary">Lost your password?</a>
													</div>
												</div>
												<div class="btnWrap mt-1">
													<input type="submit" name="login" class="d-block w-100 btn btn-secondary text-uppercase" value="login">
												</div>
											</form>
										</div>
										<!-- register-tab -->
										<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
											<form action="#" method="POST">

								<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Name <span class="text-brown">*</span></strong>
														<input name=name type="text" class="form-control formControlMedium d-block w-100">
													</label>
												</div>

												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Email Address <span class="text-brown">*</span></strong>
														<input name=email type="email" class="form-control formControlMedium d-block w-100">
													</label>
												</div>
												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Password <span class="text-brown">*</span></strong>
														<input name=pass type="password" class="form-control formControlMedium d-block w-100">
													</label>
												</div>
												<div class="btnWrap mt-5">
													<input type="submit" name="register" class="d-block w-100 btn btn-secondary text-uppercase" value="register">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</main>
		<!-- ftAreaWrap -->
		
		<?php include('footer.php');?>

	</div>
	<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="js/popper.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustom.js"></script>
	<!-- include fontawesome kit -->
	<script src="../../../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			$( ".formControlDatepicker" ).datepicker();
		});
	</script>
	<script src="../../../kit.fontawesome.com/391f644c42.js"></script>
</body>

</html>