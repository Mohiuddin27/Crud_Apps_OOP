<?php

use App\Supports\Validate;
use App\Controllers\StudentController;
require_once "vendor/autoload.php";
$stu=new StudentController;



if(isset($_GET['delete_id'])){
	$delete_id=$_GET['delete_id'];
    $stu->deletestudent($delete_id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	
<a href="index.php" style=" margin-top:40px; margin-left:150px;"class="btn btn-primary">Add Students</a>
	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=1;
                          $data=$stu->studentdata();
						  while($d=$data->fetch_object()):


                        ?>
						<tr>
							<td><?php echo $i;$i++;?></td>
							<td><?php echo $d->name; ?></td>
							<td><?php echo $d->email; ?></td>
							<td><?php echo $d->cell; ?></td>
							<td><img src="photo/students/<?php echo $d->photo; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="view.php?view_id=<?php echo $d->id;?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?edit_id=<?php echo $d->id;?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $d->id;?>">Delete</a>
							</td>
						</tr>
					
						<?php endwhile; ?>

					</tbody>
				</table>
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