<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'website';

$conn = new mysqli($host, $user, $pass, $db);

if($conn == true){
    echo 'connect';
    
}else{
    echo 'not connect';
}

?>