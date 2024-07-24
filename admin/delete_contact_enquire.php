<?php
require('config.php');

$id = $_GET['id'];

$del = mysqli_query($conn, "DELETE FROM `contact` WHERE id=$id");

if($del == true){
    echo '<script> alert("Delete enquire"); </script>';
    header("location:index.php");
    //exit();
}else{
    echo '<script> alert("There is a problem Delete enquire"); </script>';
}


?>