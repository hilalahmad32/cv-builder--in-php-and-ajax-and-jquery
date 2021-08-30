<?php 

include "config.php";

session_start();

if(isset($_POST["email"]) && isset($_POST["password"])){
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $password=mysqli_real_escape_string($conn,md5($_POST["password"]));

     $sql="SELECT * FROM users WHERE email='{$email}' AND passwrd='{$password}'";
    $run_sql=mysqli_query($conn,$sql);
    if(mysqli_num_rows($run_sql) > 0){
        while($row=mysqli_fetch_assoc($run_sql)){
            $_SESSION["email"]=$row["email"];
            echo 1;
        }
    }else{
        echo 0;
    }
   
}
