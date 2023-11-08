<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "header.php";?>
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET['id'];

        $select = "SELECT * FROM student WHERE id = $id";

        $result = mysqli_query($conn, $select);
        while($ow = mysqli_fetch_assoc($result)) {
            $name_select = $row["name"];
            $email_select = $row["email"];
            $gender_select = $row["gender"];
            }
            ?>

            <div class="container">
                <form method ="post" action="edit.php<?php echo '?id='.$id;?>">
                Name: <input type="text" name="name" value="<?php echo $name_select;?>" class="form-control">
                Email: <input type="text" name="email" value="<?php echo $email_select;?>" class="form-control">
                Gender: <select name="gender" class="form-control">
                    <option value="Male"
                    <?php if($gender_select == "Male") {?>
                    selected
                <?php } ?>
                >Male</option>
                <option value="Female"
                    <?php if($gender_select == "Female") {?>
                    selected
                <?php } ?>
                >Female</option>
                </select>
            <input type="submit" value="update" class="btn btn-primary form-control">
            </form>
            </div>
</body>
</html>