<?php
include 'connect.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <!-- bootstrap library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a style="text-decoration: none;" href="user.php" class="text-light">Add user</a> </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SI No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "select * from `crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $Name = $row['Name'];
                        $Email = $row['Email'];
                        $Password = $row['Password'];
                        $Mobile = $row['Mobile'];
                        echo '
                        <tr>
                           <th scope="row">' . $id . '</th>
                           <td>' . $Name . '</td>
                           <td>' . $Email . '</td>
                           <td>' . $Password . '</td>
                           <td>' . $Mobile . '</td>
                           <td>
                    <button class="btn btn-primary"><a style="text-decoration: none;" href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a style="text-decoration: none;" href="delete.php?deleteid=' . $id . '"  class="text-light">Delete</a></button>
                </td>
                        </tr>
                        ';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>