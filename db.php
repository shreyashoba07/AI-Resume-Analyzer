<?php
$conn = mysqli_connect("localhost","root","","resume_analyzer");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>