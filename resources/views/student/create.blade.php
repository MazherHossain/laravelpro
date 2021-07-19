<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher's Data</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-4 mx-auto mt-3 mb-3">
		<a class="btn btn-outline-primary mb-3" href="{{ route('student.index') }}">Back</a>
			<div class="card">
				<div class="card-body">
					<h2>Add Student</h2>
					@if(Session::has('success'))
						<p  class="alert alert-success alert-dismissible fade show" role="alert">{{session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
					@endif
					<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
					@csrf
						<div class="form-group">
							<label for="">Student Name</label>
							<input name="name" class="form-control" type="text" value='{{ old('name') }}'>
						</div>
						<div class="form-group mt-2">
							<label for="">Email</label>
							<input name="email" class="form-control" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Phone Number</label>
							<input name="cell" class="form-control" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">User Name</label>
							<input name="username" class="form-control" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="teacher_photo" <div style="cursor:pointer" data-toggle="tooltip" title="Profile Photo" class="pic"><i class="fas fa-images"></i> <img style="width: 100px;" id="preview" src="" alt=""></div>Teacher Photo</label>
							<input name="photo"style="display:none;" class="form-control" type="file" id="teacher_photo">
						</div>
						<div class="form-group mt-2 mb-2 mx-auto">
							<label for=""></label>
							<input name="" class="btn btn-primary" type="submit" value="add student">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
	<script>
	</script>
</body>
</html>