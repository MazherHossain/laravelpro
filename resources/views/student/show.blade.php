
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$user_data->name}}</title>
  <!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
</head>
<body>

 <div class="container">
  <div class="row ">
    <div class="col-lg-4 mx-auto mt-5 mb-5 shadow">
      <div class="card">
        <img style="max-width:200px;" class="mx-auto mt-2" src="{{ URL::to('/') }}/media/students/{{ $user_data->photo }}" alt="">
        <div class="card-body">
        <h2 class="text-center">{{$user_data->name}}</h2>
        <p class="text-center"></p>
          <table class="table">
            <tr>
              <td>User Name</td>
              <td>{{$user_data->uname}}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{$user_data->email}}</td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td>{{$user_data->cell}}</td>
            </tr>
          </table>
          <a class="btn btn-outline-primary mb-3" href="{{ route('student.index') }}">Back</a>
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