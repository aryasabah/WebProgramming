<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <?php
  include "connection.php";
  ?>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
            <form>
            <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <select class="form-select" aria-label="Default select example">
  <option selected>Gender</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
</select>
  </div>
  <a href="">
  <button type="submit" class="btn btn-primary">Submit</button></a>
</form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST('name');
      $email = $_POST('email');
      $gender = $_POST('gender');

      $sql = "INSERT INTO student (name, email, gender) VALUES ('$name', '$email', '$gender')";
      if(mysqli_query($conn, $sql)) {
        echo "Data added";
        header("Location: index.php");
      }
      else {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
      }
    

    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

