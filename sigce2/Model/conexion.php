<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="1234";
    $bd="sigce2";

    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;
}
?>
