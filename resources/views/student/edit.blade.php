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
        <h2>Edit Data {{ $edit_data -> name }}</h2>
				@if(Session::has('success'))
						<p  class="alert alert-success alert-dismissible fade show" role="alert">{{session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
					@endif
        <hr>
        <form action="{{ route('student.update', $edit_data -> id) }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="form-group">
							<label for="">Student Name</label>
							<input name="name" class="form-control" value="{{ $edit_data -> name }}" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Email</label>
							<input name="email" class="form-control" value="{{ $edit_data -> email }}" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Phone Number</label>
							<input name="cell" class="form-control" value="{{ $edit_data -> cell }}" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">User Name</label>
							<input name="uname" class="form-control" value="{{ $edit_data -> uname }}" type="text">
						</div>
						
						
	
						<div class="form-group mt-2">
							<label for="teacher_photo_edit" <div style="cursor:pointer" data-toggle="tooltip" title="Profile Photo" class="pic"><i class="fas fa-images"></i> <img style="width: 100px;" id="new_preview" src="src="{{ URL::to('/') }}/media/students/{{ $edit_data->photo }}"</div>Teacher Photo</label>
							<input name="new_photo"style="display:none;" class="form-control" type="file" id="teacher_photo_edit">
              <input type="hidden" value="{{ URL::to('/') }}/media/students/{{ $edit_data->photo }}" name="old_photo">
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