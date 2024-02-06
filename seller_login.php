<?php 

session_start();
error_reporting('0');
 include('admin/config.php');

if(isset($_REQUEST['register']))

{

unset($_SESSION['id']);
unset($_SESSION['name']);

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
 $org=$_REQUEST['org'];
 $des=$_REQUEST['des'];
$purpose=$_REQUEST['purpose'];
$pass=$_REQUEST['pass'];
//$type="seller";
//$cpass=$_REQUEST['cpass'];


$sql="select * from `seller_login` where (email='$email');";
 $res=mysqli_query($con,$sql);

  if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
                echo '<script>alert("Email Already Exists")</script>';

             
                
        }

    }


    else {



$result =mysqli_query($con,"insert into seller_login(`name`,`email`,`phone`,`des`,`org`,`purpose`,`password`) values('$name','$email','$phone','$des','$org','$purpose','$pass');");
	
 echo '<script>alert("Regsited Seccessfully")</script>';

$sql="select * from seller_login where (email='$email' and password='$pass');";
 $res=mysqli_query($con,$sql);

  if (mysqli_num_rows($res) > 0) {

    $row = mysqli_fetch_assoc($res);

 $_SESSION['name1']=$row['name'];
$_SESSION['id1']=$row['id'];


}

    }


}

if(isset($_REQUEST['login'])){

unset($_SESSION['id']);
unset($_SESSION['name']);

$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$sql="select * from seller_login where (email='$email' and password='$pass');";
 $res=mysqli_query($con,$sql);

  if (mysqli_num_rows($res) > 0) {

    $row = mysqli_fetch_assoc($res);

  echo $_SESSION['name1']=$row['name'];
  echo $_SESSION['id1']=$row['id'];

header('location:index.php');

}

else {

 echo '<script>alert("Please Regsiter for Login")</script>';

 header('location:index.php');

}

}


if(isset($_REQUEST['fpass'])){


$lemail=$_REQUEST['lemail'];

$sql="select * from seller_login where (email='$lemail');";
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

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Stapita</title>

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




<!--<div class="zone">

  <div id="dropZ">
    <i class="fa fa-cloud-upload"></i>
    <div>Drag and drop your file here</div>                    
    <span>OR</span>
    <div class="selectFile">       
      <label for="file">Select file</label>                   
      <input type="file" name="files[]" id="file">
    </div>
    <p>File size limit : 10 MB</p>
  </div> -->




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
														<input name="name" type="text" class="form-control">

													</label>

												</div>


												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Email Address <span class="text-brown">*</span></strong>
														<input name="email" type="email" class="form-control formControlMedium d-block w-100">
													</label>
												</div>
												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Mobile Number <span class="text-brown">*</span></strong>
														<input name="phone" type="number" class="form-control formControlMedium d-block w-100">
													</label>
												</div>
												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Organization <span class="text-brown">*</span></strong>
														<input name="org" type="text" class="form-control formControlMedium d-block w-100">
													</label>
												</div>
												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Designation <span class="text-brown">*</span></strong>
														<input name="des" type="text" class="form-control formControlMedium d-block w-100">
													</label>
												</div>
												<div class="form-group position-relative mb-3">
													<label class="d-block mb-0">
														<strong class="d-block font-weight-normal mb-1">Purpose <span class="text-brown">*</span></strong>
														<input name="purpose" type="text" class="form-control formControlMedium d-block w-100">
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

		<style type="text/css">
		

body {
  //background: #ebeff2;
 // font-family: "Exo 2";
}

.zone {      
  margin: auto;
  position: absolute;
  top: -400px; left: -1000px; bottom: 0; right: 0;
  background: radial-gradient(ellipse at center,#B2BEB5 0 100%);
  width:20%;
  height:20%;  
  border:5px dashed white;
  text-align:center;
  color: white;
  z-index: 20;
  transition: all 0.3s ease-out;
  box-shadow: 0 0 0 1px rgba(255,255,255,.05),inset 0 0 .25em 0 rgba(0,0,0,.25);
  .btnCompression {
    .btn {

    } 
    .active {
      background: #B2BEB5;
      color:white;
    }
  }
  i {
    text-align: center;
   
    color:#fff;
    margin-top: 50px;
  }
  .selectFile {
    height: 50px;
    margin: 20px auto;
    position: relative;
    width: 200px;          
  }

  label, input {
    cursor: pointer;
    display: block;
    height: 50px;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    border-radius: 5px;          
  }

  label {
    background: #fff;
    color:#B2BEB5;
    display: inline-block;
    font-size: 1.2em;
    line-height: 50px;
    padding: 0;
    text-align: center;
    white-space: nowrap;
    text-transform: uppercase;
    font-weight: 400;   
    box-shadow: 0 1px 1px gray;
  }

  input[type=file] {
    opacity: 0;
  }

}
.zone.in {
  color:white;
  border-color:white;
  background: radial-gradient(ellipse at center,#B2BEB5  0,#c9402f 100%);
  i {          
    color:#fff;
  }
  label {
    background: #fff;
    color:#B2BEB5;
  }
}
.zone.hover {
  color:gray;
  border-color:white;
  background:#fff;
  border:5px dashed gray;
  i {          
    color:#B2BEB5;
  }
  label {
    background: #fff;
    color:#B2BEB5;
  }
}
.zone.fade {
  transition: all 0.3s ease-out;
  opacity: 1;
}
		</style>
<script>$.noConflict();</script>
<script type="text/javascript">
	
	$(document).bind('dragover', function (e) {
    var dropZone = $('.zone'),
        timeout = window.dropZoneTimeout;
    if (!timeout) {
        dropZone.addClass('in');
    } else {
        clearTimeout(timeout);
    }
    var found = false,
        node = e.target;
    do {
        if (node === dropZone[0]) {
            found = true;
            break;
        }
        node = node.parentNode;
    } while (node != null);
    if (found) {
        dropZone.addClass('hover');
    } else {
        dropZone.removeClass('hover');
    }
    window.dropZoneTimeout = setTimeout(function () {
        window.dropZoneTimeout = null;
        dropZone.removeClass('in hover');
    }, 100);
});
</script>

		
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