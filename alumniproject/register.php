
  
 

<?php

include("connection.php");
if(isset($_POST['register_btn']))

{

	$fn=$_POST["fullname"];
	$cid=$_POST["collegeid"];
	$gender=$_POST["gender"];
	$batch=$_POST["batch"];
	$graduated=$_POST["graduated"];
	$cname=$_POST["companyname"];
	
	// $photo=$_POST["photo"];
	$eid=$_POST["email"];
	$pwd=$_POST["password"];


	$qry="INSERT INTO `register`(`id`, `fullname`, `collegeid`, `gender`, `batch`, `graduated`, `companyname`,`email`, `password`) VALUES (NULL,'$fn','$cid','$gender','$batch','$graduated','$cname','$eid','$pwd')";

	$result=mysqli_query($connect,$qry);
	if($result)
	{
		echo "Register Successfully";
	}
	else
	{
		echo "Something went wrong";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
		.row{
			height: 100vh;
			align-items: center;
		}
		body{
			background-image:linear-gradient(to right,#177982,#2cd4b5);
		}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		
		<div class="col-md-6 mx-auto">
			<div class="card">
				<div class="card-header">
					Registration Page
				</div>
				<div class="card-body">
					<form method="post">
						<div>
							<label>Fullname</label>
							<input type="text" class="form-control" name="fullname" placeholder="Fullname">
						</div>
						<div>
							<label>College ID</label>
							<input type="text" class="form-control" name="collegeid">
						</div>
						<div>
							<label>Gender</label>
							<select class="form-control" name="gender">
								<?php
								include('connection.php');
								$gender = mysqli_query($connect, "select * from gender");
								while($g = mysqli_fetch_array($gender)){
							 ?>
							 <option value="<?php echo $g['id'] ?> " ><?php echo $g['gender'] ?> </option>
							<?php } ?>



								?>
									<!-- <option> Choose</option>

								<option> Male</option>
								<option> Female</option>
								<option> others</option> -->



							</select>
							
						</div>
						<div>
							<label>Batch</label>
							<input type="text" class="form-control" name="batch">
						</div>

						<div>
							<label>Graduated</label>
							
								<select class="form-control" name="graduated">
								<?php
								include('connection.php');
								$gra = mysqli_query($connect, "select * from graduated");
								while($g = mysqli_fetch_array($gra)){
							 ?>
							 <option value="<?php echo $g['id'] ?> " ><?php echo $g['gname'] ?> </option>
							<?php } ?>



								?>


								<!-- <option> Select Cources</option>
								<option> B.Tech (Computer Science )</option>

								<option> B.Tech (Information Technology)</option>
								<option> B.Tech (Civil )</option>
								<option> B.Tech (EXTC )</option>
								<option> B.Tech (Mechanical )</option> -->





							</select>
						</div>
						<div>
							<label>Currently connected to</label>
							<input type="text" class="form-control" name="companyname">
						</div>
						
						
						<div>
							<label>Pic</label>
							<input type="file" class="form-control" name="photo">
						</div>
						<div>
							<label>Email-Id</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div>
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						
						<div>
							<br>
							<button type="submit" class="btn btn-success" name="register_btn">Register</button>
							<button type="submit" class="btn btn-success" name="cancelbtn">Cancel</button>							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



























<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
                


         




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>