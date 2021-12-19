<?php

use App\Supports\Validate;
use App\Controllers\StudentController;
require_once "vendor/autoload.php";
$stu=new StudentController;

if(isset($_GET['view_id'])){
	$id=$_GET['view_id'];

	$single_student=$stu->showsingledata($id);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $single_student->name; ?></title>
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
				 <a href="table.php" class="btn btn-primary">Back</a>
                    <div class="card">
						<div class="card-body">
							<img style="width:200px; height:200px; display:block; margin:auto; border-radius:50%"src="photo/students/<?php echo  $single_student->photo; ?>">
							<h2><?php echo $single_student->name; ?></h2>
							<p><?php echo $single_student->cell; ?></p>
							<table class="table table-striped">
								<tr>
									<td>Name</td>
									<td><?php echo $single_student->name; ?></td>
                                </tr>
								<tr>
									<td>Email</td>
									<td><?php echo $single_student->email; ?></td>
                                </tr>
								<tr>
									<td>Cell</td>
									<td><?php echo $single_student->cell; ?></td>
                                </tr>
								<tr>
									<td>Username</td>
									<td><?php echo $single_student->username; ?></td>
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