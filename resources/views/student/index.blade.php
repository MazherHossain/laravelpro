
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
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($all_data as $data)
						<tr>
							<td>{{ $loop -> index + 1 }}</td>
							<td>{{ $data -> name }}</td>
							<td>{{ $data -> email }}</td>
							<td>{{ $data -> cell }}</td>
							<td>{{ $data -> uname }}</td>
							<td><img width="80" src="{{ URL::to('') }}/media/students/{{$data -> photo}}" alt=""></td> <!--can write {{url('')}} instead of {{ URL::to('') }} as well -->
							<td>
								<a class="btn btn-sm btn-primary" href="{{ route('student.show') }}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ route('student.edit') }}">Edit</a>
								<a class="btn btn-sm btn-danger delete_btn" href="">Delete</a>
							</td>
						</tr>
					@endforeach
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