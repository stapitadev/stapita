<?php 
error_reporting(0);
include('config.php'); 
session_start();

$type = $_REQUEST['type'];

$t_info = $_REQUEST['t_info'];

if($type=='pro_type')
{
?>
<select class="form-control" name="c_id" required="required");>
										
<option value="">Select</option>
<?php
$category  = mysqli_query($con,"select *  from `anvil_projects` where `type`='$t_info' ")or die(mysqli_error($con));
while ($category1 = mysqli_fetch_array($category)) 
{
?>
<option value="<?php echo $category1['id']; ?>"><?php echo $category1['project_name']; ?></option>
<?php
}
?>
	
</select>
<?php
}

$c_id = $_REQUEST['c_id'];

if($type=='country')
{
?>
<select class="form-control" name="s_id" required="required" onchange="state(this.value,'state');">
										
<option value="">Select</option>
<?php
$state  = mysqli_query($con,"select * from `state` where `c_id`='$c_id' order by `name` asc ")or die(mysqli_error($con));
while ($state1 = mysqli_fetch_array($state)) 
{
?>
<option value="<?php echo $state1['id']; ?>"><?php echo $state1['name']; ?></option>
<?php
}
?>
	
</select>
<?php
}

$s_id = $_REQUEST['s_id'];

if($type=='state')
{
?>
<select class="form-control" name="l_id" required="required" >
										
<option value="">Select</option>
<?php
$location  = mysqli_query($con,"select * from `location` where `s_id`='$s_id' order by `name` asc ")or die(mysqli_error($con));
while ($location1 = mysqli_fetch_array($location)) 
{
?>
<option value="<?php echo $location1['id']; ?>"><?php echo $location1['name']; ?></option>
<?php
}
?>
	
</select>
<?php
}


if($type=='category')
{
?>
<select class="form-control" name="s_id">
										
<option value="">Select</option>
<?php
$sub_category  = mysqli_query($con,"select * from `sub_category` where `c_id`='$c_id' order by `name` asc ")or die(mysqli_error($con));
while ($sub_category1 = mysqli_fetch_array($sub_category)) 
{
?>
<option value="<?php echo $sub_category1['id']; ?>"><?php echo $sub_category1['name']; ?></option>
<?php
}
?>
	
</select>
<?php
}



if($type=='category_listing')
{
?>
<select class="form-control" name="sub_cat_id">
										
<option value="">Select</option>
<?php
$sub_category  = mysqli_query($con,"select * from `sub_category` where `c_id`='$c_id' order by `name` asc ")or die(mysqli_error($con));
while ($sub_category1 = mysqli_fetch_array($sub_category)) 
{
?>
<option value="<?php echo $sub_category1[id]; ?>"><?php echo $sub_category1['name']; ?></option>
<?php
}
?>
	
</select>
<?php
}

?>