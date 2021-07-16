<?php
//Show Single teacher
if(isset($_GET['show_id'])){
  $id = $_GET['show_id'];
  $data = connect()->query("SELECT * FROM teachers WHERE id='$id'");
  $teacher=$data-> fetch_object();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
</head>
<body>

 <div class="container">
  <div class="row">
    <div class="col-lg-4 mx-auto mt-5">
      <div class="card">
        <img class="shw shadow" src="photos/" alt="">
        <div class="card-body">
        <h2 class="text-center"></h2>
        <p class="text-center"></p>
          <table class="table">
            <tr>
              <td>Name</td>
              <td></td>
            </tr>
            <tr>
              <td>Email</td>
              <td></td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td></td>
            </tr>
            <tr>
              <td>Location</td>
              <td></td>
            </tr>
            <tr>
              <td>Age</td>
              <td></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td></td>
            </tr>
            <tr>
              <td>Department</td>
              <td></td>
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