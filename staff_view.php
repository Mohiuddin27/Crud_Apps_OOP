<?php

use App\Supports\Validate;
use App\Controllers\StaffController;

require_once "vendor/autoload.php";
$staff=new StaffController;

if(isset($_GET['view_id'])){
	$id=$_GET['view_id'];

	$single_staff=$staff->showsingledata($id);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $single_staff->name; ?></title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
  
     <div class="single-user my-5">
		 <div class="container">
			 <div class="row">
			
				 <div class="col-lg-8 offset-2">
				 <a href="staff_table.php" class="btn btn-primary">Back</a>
                    <div class="card">
						<div class="card-body">
							<img style="width:200px; height:200px; display:block; margin:auto; border-radius:50%"src="photo/staff/<?php echo  $single_staff->photo; ?>">
							<h2><?php echo $single_staff->name; ?></h2>
							<p><?php echo $single_staff->cell; ?></p>
							<table class="table table-striped">
								<tr>
									<td>Name</td>
									<td><?php echo $single_staff->name; ?></td>
                                </tr>
								<tr>
									<td>Email</td>
									<td><?php echo $single_staff->email; ?></td>
                                </tr>
								<tr>
									<td>Cell</td>
									<td><?php echo $single_staff->cell; ?></td>
                                </tr>
								<tr>
									<td>Username</td>
									<td><?php echo $single_staff->username; ?></td>
                                </tr>
                            </table>
						</div>
					</div>
				 </div>
			 </div>
		 </div>
	 </div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>