<?php 
   $showalert=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'Partial/dbconnect.php';

 
    $username=$_POST["username"];
    $emails=$_POST["emails"];
    $password=$_POST["password"];

    $sql="INSERT INTO `users` (`user_email`, `password`, `username`) VALUES ('$emails','$password', '$username');";
    $result =mysqli_query($conn,$sql);
    if($result)
    {
        $showalert=true;
    }
}



?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">

    <title>Car Rentals</title>
  </head>
  <body>
    <?php require'Partial/_nav.php' ?>
    <div class="container">
    <H1 class="text-center"> Please Register Yourself in our Website </H1>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Registration Form -->
    <center>
        <?php
    if($showalert)
    {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congratulation!</strong> You have succefully signed up.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
?>
        <form action="SignUp.php" method="post">
    <div class="form-group col-md-6">
        <input type="textbox"  name ="username" id="exampleFormControlInput1"  placeholder="Username ex: Dave">
        <label for="username"  >Username    </label><br><br>

        <input type="email" name="emails" id="exampleFormControlInput1"  placeholder="name@example.com">
        <label for="email"  >Email address  </label><br><br>

        <input type="password" name="password">
        <label for="inputPassword" >Password    </label>  
    </div><br><br>

    <div>
        <input type="submit" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-primary" value="Reset">
    </div>
        </form>
    </center>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    -->
  </body>
</html>




      
