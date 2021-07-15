<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
  <!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 mx-auto mt-5">
    <a class="btn btn-primary btn-sm mb-2" href="{{ route('student.index') }}">Back</a>
      <div class="card">
        <div class="card-body">
        <h2>Teacher Data Edit</h2>
        <?php
        if(isset($msg)){
          echo $msg;
        }
        ?>
        <hr>
        <form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Teacher Name</label>
							<input name="name" class="form-control" value="" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Email</label>
							<input name="email" class="form-control" value="" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Phone Number</label>
							<input name="cell" class="form-control" value="" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">User Name</label>
							<input name="username" class="form-control" value="" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Location</label>
							<select class="form-select" aria-label=".form-select-sm example" name="location" id="">
								<option value="">-select-</op>
								
							</select>
						</div>
						<div class="form-group mt-2">
							<label for="">Age</label>
							<input name="age" class="form-control" value="" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Gender</label>
							<label for="Male">Male</label>
							<label for="Female">Female</label>
						</div>
						
	
						<div class="form-group mt-2">
							<label for="teacher_photo_edit" <div style="cursor:pointer" data-toggle="tooltip" title="Profile Photo" class="pic"><i class="fas fa-images"></i> <img style="width: 100px;" id="new_preview" src="photos/</div>Teacher Photo</label>
							<input name="new_photo"style="display:none;" class="form-control" type="file" id="teacher_photo_edit">
              <input type="hidden" value="" name="old_photo">
						</div>
						<div class="form-group mt-2 mb-2 mx-auto">
							<label for=""></label>
							<input name="crud" class="btn btn-primary" type="submit" value="Update Info">
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
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  $('input[name="new_photo"]').change(function(e){
      let file_url = URL.createObjectURL(e.target.files[0]);
      $('img#new_preview').attr('src', file_url);
    });//Preview for the photo
  </script>
</body>
</html>