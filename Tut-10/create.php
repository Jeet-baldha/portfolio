<?php
$servername="localhost";
$username="root";
$password="";
$database="database";
$conn=mysqli_connect($servername,$username,$password,$database);

if($_SERVER['REQUEST_METHOD']=='POST')
$us=$_POST['uname'];
$password=$_POST['password'];
$email=$_POST['email']; 
$sql="insert into data(username,email,password) values ('$us','$email','$password');";
mysqli_query($conn,$sql);
header("location:read.php")


?>