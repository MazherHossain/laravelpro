
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher's Data</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="stylesheet" href="assets/css/style3.css">
</head>
<body>
	
	<?php
		
		if(isset($_POST['crud'])){//Get Values from input
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];
			$username = $_POST['username'];
			$location = $_POST['location'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$department = $_POST['dept'];
			$cell_start = substr($cell, 0, 3);//cell manage
		
			//Form validation
			if(empty($name) || empty($email) || empty($cell) || empty($username) || empty($location) || empty($age) || empty($gender) || empty($department)){
				$msg = validate('All fields are required!');
				//warning for not entering any or all information
			}
			else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $msg = validate('Invalid email address!');
			}
			else if(in_array($cell_start, ['017','018','019','015','013','016','014'])==false){
        $msg = validate('Invalid phone number sequence','warning');//Phone number validation warning
      }
			else if($age < 16 && $age>150){
        $msg = validate('You didnt follow the age requirement','warning');
			}
			else if(dataCheck('teachers','email',$email)==false){
				$msg = validate('Email already exists!','warning');
			}
			else if(dataCheck('teachers','username',$username)==false){
				$msg = validate('Username already exists!','warning');
			}
			else if(dataCheck('teachers','cell',$cell)==false){
				$msg = validate('Phone Number already exists!','warning');
			}
			else {
				//Upload profile photo
				$data = move($_FILES['photo'],'photos/');
				$unique_name = $data['unique_name'];
				$err_msg = $data['err_msg'];
				if(empty($err_msg)){
					//Data insert
				create("INSERT INTO teachers(name, email, cell, username, location, age, gender, dept, photo) VALUES ('$name','$email','$cell','$username','$location','$age','$gender','$department','$unique_name')");
				$msg = validate('Data inserted!','success');//Success
				}else{
					$msg = $err_msg;
				}
				
				
			}
		}
	?>
	

	<div class="wrap-table w-100 p-3">
	<a class="btn btn-outline-primary" href="mainpage.php">Back</a>
	<a class="btn btn-outline-primary" href="{{ route('student.create') }}">Add New Student</a>
	<br>
	<br>
	<div class="card-shadow">	
		<div class="card-body input-group">
				<form class="input-group" action="" method="POST">
					<h2 class="me-3">All Students</h2>
					<input name="search" type="search" class="form-control" placeholder="Search">
					<button name="searchbtn" class="btn btn-outline-primary" type="submit">Search</button>
				</form>
			</div>
				<table class="table table-success table-striped text-success">
					<thead>
						<tr>
							<th ></th>
							<th class="col-sm-1">Name</th>
							<th class="col-sm-2">Email</th>
							<th class="col-sm-1">Cell</th>
							<th class="col-sm-2">User Name</th>
							<th class=primary">Age</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><img width="80" src="" alt=""></td>
							<td>
								<a class="btn btn-sm btn-primary" href="{{ route('student.show') }}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ route('student.edit') }}">Edit</a>
								<a class="btn btn-sm btn-danger delete_btn" href="">Delete</a>
							</td>
						</tr>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
	<script>
	</script>
</body>
</html>