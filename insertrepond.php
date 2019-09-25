<?php 
$ho=isset($_POST['ho'])?$_POST['ho']:'';
$ten=isset($_POST['ten'])?$_POST['ten']:'';
$email=isset($_POST['email'])?$_POST['email']:'';
$sdt=isset($_POST['sdt'])?$_POST['sdt']:'';
$respond=isset($_POST['gopy'])?$_POST['gopy']:'';
$conn=mysqli_connect('localhost','root','','gym');
$sql="INSERT INTO respond(ho,ten,email,sdt,respond) VALUES ('$ho','$ten','$email','$sdt','$respond')";
if(mysqli_query($conn,$sql)){
	header("Location:GYM-trangchu.php");
}

 ?>