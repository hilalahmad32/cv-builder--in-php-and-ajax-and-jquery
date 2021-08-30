<?php 

include "config.php";


if(isset($_POST["val"])){
    $val=$_POST["val"];
    move_uploaded_file($val,"upload/");
}


?>