<?php
use App\Supports\Validate;
use App\Controllers\TeacherController;
require_once "vendor/autoload.php";
$teacher=new TeacherController;
if(isset($_GET['edit_id'])){
  $edit_id=$_GET['edit_id'];
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
	<?php
      if(isset($_POST['add'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$cell=$_POST['cell'];
        $uname=$_POST['uname'];
		
			
		$teacher->updateteacher($name, $email, $cell,$uname,$edit_id);
	    
		
	}


    ?>
	
    <a href="teacher_table.php" style=" margin-top:40px; margin-left:380px;"class="btn btn-primary">View Teachers</a>
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				
                  <?php 
                     if(isset($_GET['edit_id'])){
                        $edit_id=$_GET['edit_id'];
                        $data=$teacher->showteacher($edit_id);
                  
                     }  
                    ?>
				<form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
						<label for="">Id</label>
						<input name="id" class="form-control" value="<?php echo  $data->id;?>" type="text" disabled>
					</div>
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="<?php echo  $data->name;?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo  $data->email;?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="<?php echo  $data->cell;?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" value="<?php echo  $data->username;?>" type="text">
					</div>
					<div class="form-group">
                    <img style="width:200px; height:200px;"src="photo/teachers/<?php echo  $data->photo; ?>">
					<input type="file" class="form-control" name="photo">
					</div>
					
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="add" value="Update">
					</div>
				</form>
               
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