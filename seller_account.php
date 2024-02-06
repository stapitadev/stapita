
<?php 

session_start();
error_reporting('0');
 include('admin/config.php');

$id=$_SESSION['id1'];
$name=$_SESSION['name1'];

if(isset($_REQUEST['upload']))

{


$c_date = date('Y-m-d h:i:s');

 $design=$_REQUEST['design'];
 $design1=$_REQUEST['design1'];
 $design2=$_REQUEST['design2'];
 $p_name=$_REQUEST['p_name'];
  $s_des=$_REQUEST['s_des'];
 $price=$_REQUEST['price'];
 $description=$_REQUEST['description'];
 $description1=$_REQUEST['description1'];

$result =mysqli_query($con,"insert into design(`s_id`,`name`,`design`,`design1`,`design2`,`c_date`,`p_name`,`s_des`,`price`,`description`) values('$id','$name','$design','$design1','$design2','$c_date','$p_name','$s_des','$price','$description');");


$last = mysqli_insert_id($con);	

if($_FILES['image']['tmp_name'])

{

	

$imagename1 =$last.'_'.$_FILES['image']['name'];

$source_image1 = $_FILES['image']['tmp_name']; 


//mkdir("../images/main-slider/slider/", 0755);

$destination1 ='images/seller/'.$imagename1;

move_uploaded_file($source_image1,$destination1);

mysqli_query($con,"update `design` set `image`='$imagename1' where `id`='$last'");


}
	
 echo '<script>alert("Updated Seccessfully")</script>';



}

if(isset($_REQUEST['d_id']))
{
$select  = mysqli_query($con,"delete from `design` where `id`='$_REQUEST[d_id]'")or die(mysqli_error($con));
?>
<script type="text/javascript">
alert('Delete Successfully');
window.location='seller_account.php';
</script>
<?php
}


if(isset($_REQUEST['profile']))

{


$c_date = date('Y-m-d h:i:s');

 $email=$_REQUEST['email'];
 $phone=$_REQUEST['phone'];
  $org=$_REQUEST['org'];
 $purpose=$_REQUEST['purpose'];
 $des=$_REQUEST['des'];
 $description1=$_REQUEST['description1'];

$update = mysqli_query($con,"update `seller_login` set `email`='$email',`phone`='$phone',`org`='$org',`purpose`='$purpose',`des`='$des',`description1`='$description1' where `id`='$id'")or die(mysqli_error($con));


if($_FILES['image']['tmp_name'])

{

	

$imagename1 =$_FILES['image']['name'];

$source_image1 = $_FILES['image']['tmp_name']; 


//mkdir("../images/main-slider/slider/", 0755);

$destination1 ='images/seller/'.$imagename1;

move_uploaded_file($source_image1,$destination1);

mysqli_query($con,"update `seller_login` set `image`='$imagename1' where `id`='$id'");


}
	
 echo '<script>alert("Updated Seccessfully")</script>';



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

<header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white" style="background-image: url(images/img175.jpg);">
				<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
					<div class="container py-6">
						<h1 class="text-white mb-0">Welcome <?php echo $_SESSION['name1'] ?></h1>
					</div>
				</div>
			</header>

			<!-- cartPageBlock -->
			<section class="cartPageBlock pt-7 pb-7 pt-md-9 pb-md-9 pt-lg-12 pb-lg-14 pt-xl-18 pb-xl-22">
				<div class="container">
					
					<form action="#" method="POST" enctype="multipart/form-data">
					

   
						<!-- carterTableWrap -->
						<div class="carterTableWrap">
							<div class="row no-gutters">
							
									<h2 class="mb-7">Update your Details</h2>
									<!-- cartTotals -->
									<table class="w-100 cartTotals text-secondary mb-5">
										<tbody>
										
											<tr>
												<td>
													
 Select Image File to Upload:
    <input type="file" name="image">
<br><br>

  

												</td>
												<td>
													<div class="tdWrap">
													
															<select name="design" class="chosenSelect csSelect csSelectSmall w-100" data-placeholder="Choose Country">
															<option value="Interior Designs">	Interior Designs</option>
															<option value="Exterior Designs">	Exterior Designs  </option>
															<option value="Exterior Designs">Landscape designs  </option>
															

														</select>



														<select name="design1" class="chosenSelect csSelect csSelectSmall w-100" data-placeholder="Choose Country">
															<option value="Autocad">	Autocad</option>
															<option value="Revit">	Revit</option>
															<option value="Rhino">Rhino</option>
															<option value="Sketchup">Sketchup</option>
															<option value="Maya">Maya</option>
															<option value="3DS Max">	3DS Max</option>
															<option value="Etc">	Etc</option>

														</select>
														<select name="design2"  class="chosenSelect csSelect csSelectSmall w-100" data-placeholder="Select an option&hellip;">
															<option value="2D">	2D</option>
															<option value="3D">3D</option>
															<option value="4D">4D</option>
															<option value="5D">5D</option>
															<option value="6D">6D</option>
															<option value="7D">7D</option>
															
														</select>

	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Image Name *</label>
	<input name="p_name" class="form-control d-block w-100" id="nm" type="text">

	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Short Description *</label>
	<input name="s_des" class="form-control d-block w-100" id="nm" type="text">

	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Descrtiption *</label>
	<input name="description" class="form-control d-block w-100" id="nm" type="chat-textarea">
	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Price *</label>
	<input name="price" class="form-control d-block w-100" id="nm" type="number">

													</div>
												</td>
											</tr>
										
										</tbody>
									</table>
									<button name="upload" type="submit" class="btn btn-secondary py-xl-4 w-20 d-block text-uppercase">Update</button>
								</div>
							
						</div>
					</form>

					<br><br>

					<?php

$select  = mysqli_query($con,"select * from `seller_login` where `id`='$id'")or die(mysqli_error($con));

$select1 = mysqli_fetch_array($select);

echo "hello".$select1['name'];

?>

<form action="#" method="POST" enctype="multipart/form-data">
					

   
						<!-- carterTableWrap -->
						<div class="carterTableWrap">
							<div class="row no-gutters">
							
									<h2 class="mb-7">Update your Profile</h2>
									<!-- cartTotals -->
									<table class="w-100 cartTotals text-secondary mb-5">
										<tbody>
										
											<tr>
												<td>
													
 Select Image File to Upload:
    <input type="file" name="image">
<br><br>

  

												</td>
												<td>
													<div class="tdWrap">
										

<label for="nm"  class="label font-weight-normal d-block flex-shrink-0 mb-0"> Email *</label>

	<input value="<?php echo $select1['email'];?>" name="email" class="form-control d-block w-100" id="nm" type="text">
<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0"> Phone *</label>
	<input value="<?php echo $select1['phone'];?>"  name="phone" class="form-control d-block w-100" id="nm" type="number">

	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0"> About *</label>
	<input value="<?php echo $select1['description1'];?>" name="description1" class="form-control d-block w-100" id="nm" type="text">

	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Desingnation *</label>
	<input value="<?php echo $select1['des'];?>" name="des" class="form-control d-block w-100" id="nm" type="chat-textarea">
	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Organization *</label>
	<input value="<?php echo $select1['org'];?>" name="org" class="form-control d-block w-100" id="nm" type="chat-textarea">
	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Purpose *</label>
	<input value="<?php echo $select1['purpose'];?>" name="purpose" class="form-control d-block w-100" id="nm" type="chat-textarea">
	

													</div>
												</td>
											</tr>
										
										</tbody>
									</table>
									<button name="profile" type="submit" class="btn btn-secondary py-xl-4 w-20 d-block text-uppercase">Update</button>
								</div>
							
						</div>
					</form>

				</div>
			</section>

	<!-- mainHeadingHead -->
			
<header class="topHeadingHead text-center mb-7 mb-lg-11">
						<h1>Your  Gallery</h1>
					</header>

			<!-- imageGalleryBlock -->
			<section class="imageGalleryBlock pt-8 pb-3 pb-md-6 pt-lg-13 pb-lg-10 pt-xl-19 pb-xl-16">
				<div class="container">
			
<div class="row">

	 <?php

 $image  = mysqli_query($con,"select * from `design` where `s_id`='$_SESSION[id1]'")or die(mysqli_error($con));

       while($image1 = mysqli_fetch_array($image))

                        {

                           
                           ?>

				<div class="col-12 col-sm-6 col-lg-3">
							<!-- 	shopItemColumn -->
							<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
								<div class="imgHolder position-relative mb-4 overflow-hidden">
									<a href="edit_product.php?id=<?php echo $image1['id'] ?>">
										<img src="images/seller/<?php echo $image1['image'];?>" class="img-fluid w-100" alt="image description">
									</a>
									<a href="single-product.php"></a>
								</div>
								<h3 class="mb-2">
									<a href="edit_product.php?id=<?php echo $image1['id'] ?>"><?php echo $image1['p_name'] ?></a>
								</h3>
								
							
						<a href="edit_product.php?id=<?php echo $image1['id'] ?>">
							<i class="entypo-pencil"></i>
							Edit
						</a>

&nbsp;&nbsp;

						<?php //if($select1[type]=='1'){ ?>
						<a href="javascript:confirmDelete('seller_account.php?d_id=<?php echo $image1['id']; ?>')">
							<i class="entypo-cancel"></i>
							Delete
						</a>
					    <?php //} ?>
						
						<?php if(1!=1) { ?>
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
						<?php
					    }
						?>
					


							</article>
						</div>

							<?php  }?>
						</div>


				</div>
			</section>



		</main>
		<!-- ftAreaWrap -->
		<div class="ftAreaWrap bg-secondary text-gray888">
			<!-- footerAside -->
			<?php include('footer.php');?>
		
		</div>
	</div>

<script>

function confirmDelete(delUrl) {

  if (confirm("Are you sure you want to delete")) {

    document.location = delUrl;

  }

}

</script>

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



		<style type="text/css">
		

body {
  //background: #ebeff2;
 // font-family: "Exo 2";
}

.zone {      
  margin: auto;
  position: absolute;
  top: -380px; left: -600px; bottom: 0; right: 0;
  background: radial-gradient(ellipse at center,#B2BEB5 0 100%);
  width:40%;
  height:12%;  

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

</html>