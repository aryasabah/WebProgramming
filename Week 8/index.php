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
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
    <div class="col-8">
        <div class="row">
            <div class="col">
                <a href="add.php">
                <button class="btn btn-primary">Add</button></a>
            </div>
        </div>
        <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
    </tr>
  </tfoot>
  <tbody>
    <?php
    include "connection.php";
    $select = "SELECT * FROM student";
    $result = mysqli_query($conn, $select);
    while($row = mysqli_fetch_assoc($result)) {

?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Edit</a>
            <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
    </tr>
  </tbody>
</table>
</div>
    </div>
    <div class="col-2"></div>
        </div>
    </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

