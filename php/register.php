<?php 

include "config.php";


if(isset($_POST['name']) && isset($_POST["email"]) && isset($_POST["password"])){
    $name=mysqli_real_escape_string($conn,$_POST["name"]);
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $password=mysqli_real_escape_string($conn,md5($_POST["password"]));

    $is_email="SELECT * FROM users WHERE email='{$email}'";
    $run_sql=mysqli_query($conn,$is_email);
    if(mysqli_num_rows($run_sql) > 0){
        echo 2;
    }else{
        $sql="INSERT INTO users (username,email,passwrd) VALUES ('{$name}','{$email}','{$password}')";

        if(mysqli_query($conn,$sql)){
            echo 1;
        }else{
            echo 0;
        }
    }
   
}
