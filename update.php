<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$email = $row['Email'];
$password = $row['Password'];
$mobile = $row['Mobile'];
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Mobile = $_POST['Mobile'];

    $sql = "update `crud` set id=$id,name='$Name',email='$Email',password='$Password',mobile='$Mobile' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "data Updated successfully!";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>


    <!-- bootstrap library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="Name" autocomplete="off" value=<?php echo $name ?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" placeholder="Enter your Email" name="Email" autocomplete="off" value=<?php echo $email ?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile no." name="Mobile" autocomplete="off" value=<?php echo $mobile ?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your Password" name="Password" autocomplete="off" value=<?php echo $password ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>

        </form>

    </div>
</body>

</html>