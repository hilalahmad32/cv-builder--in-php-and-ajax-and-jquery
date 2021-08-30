<?php 

session_start();

if(isset($_SESSION["email"])){
    header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CV-Builder</title>
</head>
<body>


    <div class="container" style="margin-top: 15%;">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-0">
               <div class="card">
                   <div class="card-header">
                      <h1> For Cv builder !! First Login</h1>
                   </div>
                   <div class="card-body">
                     <a href="login.php"> <button class="btn btn-success my-4 w-100">Login</button></a> 
                      <a href="register.php"><button class="btn btn-primary w-100">Register</button></a> 
                   </div>
               </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/action.js"></script>
</body>
</html>