<?php 
include('config.php'); 
session_start();

// Get status message 
if(!empty($_GET['status'])){ 
    switch($_GET['status']){ 
        case 'succ': 
            $statusType = 'alert-success'; 
            $statusMsg = 'Member data has been imported successfully.'; 
            break; 
        case 'err': 
            $statusType = 'alert-danger'; 
            $statusMsg = 'Something went wrong, please try again.'; 
            break; 
        case 'invalid_file': 
            $statusType = 'alert-danger'; 
            $statusMsg = 'Please upload a valid Excel file.'; 
            break; 
        default: 
            $statusType = ''; 
            $statusMsg = ''; 
    } 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Import Excel File Data with PHP</title>

<!-- Bootstrap library -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Stylesheet file -->
<link rel="stylesheet" href="assets/css/style.css">

<!-- Show/hide Excel file upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
</head>
<body>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12 p-3">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

<div class="row p-3">
    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-end">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import Excel</a>
        </div>
    </div>
    <!-- Excel file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form class="row g-3" action="" method="post" enctype="multipart/form-data">
            <div class="col-auto">
                <label for="fileInput" class="visually-hidden">File</label>
                <input type="file" class="form-control" name="file" id="fileInput" />
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-primary mb-3" name="importSubmit" value="Import">
            </div>
        </form>
    </div>

    <!-- Data list table --> 
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
             
                <th>Name</th>
                <th>Short_description</th>
                <th>image</th>
                <th>order</th>
                <th>Status</th>
               
            </tr>
        </thead>
        <tbody>
        <?php 
        // Get member rows 
        $result = $con->query("SELECT * FROM services ORDER BY id DESC"); 
        if($result->num_rows > 0){ $i=0; 
            while($row = $result->fetch_assoc()){ $i++; 
        ?>
            <tr>
               
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['short_description']; ?></td>
                <td><?php echo $row['image']; ?></td>
                <td><?php echo $row['order']; ?></td>
                <td><?php echo $row['status']; ?></td>
                
            </tr>
        <?php } }else{ ?>
            <tr><td colspan="7">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
include('config.php'); 
// Include PhpSpreadsheet library autoloader 
require_once 'vendor/autoload.php'; 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx; 
$c_date = date('Y-m-d h:i:s');

    /*    $select  = mysqli_query($con,"select * from `services` where `id`!='' order by `id` desc ")or die(mysqli_error($con));

            $i='1';
                while($select1 = mysqli_fetch_array($select))
                {
                
             //   echo $select1['id'];
                $i++;
                } */
 
if(isset($_POST['importSubmit'])){ 
     
    // Allowed mime types 
    $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
     
    // Validate whether selected file is a Excel file 
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $excelMimes)){ 
         
        // If the file is uploaded 
        if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
            $reader = new Xlsx(); 
            $spreadsheet = $reader->load($_FILES['file']['tmp_name']); 
            $worksheet = $spreadsheet->getActiveSheet();  
            $worksheet_arr = $worksheet->toArray(); 
 
            // Remove header row 
            unset($worksheet_arr[0]); 
 
            foreach($worksheet_arr as $row){ 
              echo  $name = $row[0]; 
               echo $short_description = $row[1]; 
              echo  $order = $row[2]; 
             echo   $image = $row[3]; 
          echo      $status = $row[4]; 

 
                // Check whether member already exists in the database with the same email 
                $prevQuery = "SELECT id FROM services WHERE name = '".$name."'"; 
                $prevResult = $con->query($prevQuery); 
                 
              /*  if($prevResult->num_rows > 0){ 
                    // Update member data in the database 
                    $con->query("UPDATE members SET first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'"); 

                   } */
                 
                    // Insert member data in the database 

                //   $con->query("INSERT INTO services ('name', 'short_description', 'image', 'order', 'status') VALUES ($name,$short_description,$image,$order,$status)"); 
//$con->query("SELECT * from services");

$insert = mysqli_query($con,"insert into `services`(`name`,`short_description`,`order`,`status`,`c_date`)values('$name','$short_description','$order','$status','$c_date')") or die(mysqli_error($con));

                
            } 
             
            $qstring = '?status=succ'; 
        }else{ 
            $qstring = '?status=err'; 
        } 
    }else{ 
        $qstring = '?status=invalid_file'; 
    } 
} 
 
// Redirect to the listing page 
//header("Location: index.php".$qstring); 
 ?>