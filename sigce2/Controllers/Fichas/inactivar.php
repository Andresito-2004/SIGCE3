<?php
include('../../model/Conexion.php');
$id=$_GET['id'];
$sql="UPDATE ficha SET est_Fic = 'Inactiva' WHERE (ide_Fic = '$id')";
$query=mysqli_query(conectar(),$sql);
if($query){
    echo "<script> alert('correcto');
     location.href = '../../views/ficha/readFicha.php';
    </script>";
  
  }else{
     echo "<script> alert('incorrecto, vuelve a intentarlo');
     location.href = '../../views/ficha/readFicha.php';
     </script>";
  }
?>