<?php
$conn=new mysqli("localhost","root","","complaint-system");
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
?>