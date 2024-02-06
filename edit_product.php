
<?php 

session_start();
error_reporting('0');
 include('admin/config.php');

$u_id = $_GET['id'];

if(isset($_REQUEST['upload']))

{

$u_id = $_GET['id'];

$id=$_SESSION['id1'];
$name=$_SESSION['name1'];

$c_date = date('Y-m-d h:i:s');

 $design=$_REQUEST['design'];
 $design1=$_REQUEST['design1'];
 $design2=$_REQUEST['design2'];
 $p_name=$_REQUEST['p_name'];
  $s_des=$_REQUEST['s_des'];
 $price=$_REQUEST['price'];
 $description=$_REQUEST['description'];


$update = mysqli_query($con,"update `design` set `name`='$name',`design`='$design',`design1`='$design1',`design2`='$design2',`p_name`='$p_name',`s_des`='$s_des',`description`='$description',`price`='$price' where `s_id`='$id' and `id`='$u_id'")or die(mysqli_error($con));


$last = mysqli_insert_id($con);	

if($_FILES['image']['tmp_name'])

{

	
$imagename1 =$last.'_'.$_FILES['image']['name'];

$source_image1 = $_FILES['image']['tmp_name']; 


//mkdir("../images/main-slider/slider/", 0755);

$destination1 ='images/seller/'.$imagename1;

move_uploaded_file($source_image1,$destination1);

mysqli_query($con,"update `design` set `image`='$imagename1' where `s_id`='$id' and `id`='$u_id'");


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
						<h1 class="text-white mb-0"><a href="seller_account.php"> Account </a>/ Edit <?php echo $_SESSION['name1'] ?></h1>
					</div>
				</div>
			</header>




<?php

 $u_id;

$select  = mysqli_query($con,"select * from `design` where `id`='$u_id'")or die(mysqli_error($con));

$select1 = mysqli_fetch_array($select);

?>


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
	<input name="p_name" class="form-control d-block w-100" value="<?php echo $select1['p_name'];?>" id="nm" type="text">

	<label for="nm"  class="label font-weight-normal d-block flex-shrink-0 mb-0">Short Description *</label>
	<input value="<?php echo $select1['s_des'];?>" name="s_des" class="form-control d-block w-100" id="nm" type="text">

	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Descrtiption *</label>
	<input value="<?php echo $select1['description'];?>" name="description" class="form-control d-block w-100" id="nm" type="chat-textarea">
	<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Price *</label>
	<input value="<?php echo $select1['price'];?>" name="price" class="form-control d-block w-100" id="nm" type="number">

													</div>
												</td>
											</tr>
										
										</tbody>
									</table>
							<button name="upload" type="submit" class="btn btn-secondary py-xl-4 w-20 d-block text-uppercase">Update</button>	
								</div>
							
						</div>
					</form>
				</div>
			</section>

			</main>
		<!-- ftAreaWrap -->
		<div class="ftAreaWrap bg-secondary text-gray888">
			<!-- footerAside -->
			<?php include('footer.php');?>
		
		</div>
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