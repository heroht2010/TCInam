<?php 
session_start();
$ho=isset($_POST['ho'])?$_POST['ho']:'';
$ten=isset($_POST['ten'])?$_POST['ten']:'';
$user=isset($_POST['user'])?$_POST['user']:'';
$pass=isset($_POST['pass'])?$_POST['pass']:'';
$conn=mysqli_connect('localhost','root','','gym');
mysqli_set_charset($conn,'UTF8');
$sql="SELECT * FROM dangky WHERE user='$user'";
$ketqua=mysqli_query($conn,$sql);
if (mysqli_num_rows($ketqua)==0) {

	$sql1="INSERT INTO dangky(ho,ten,user,pass) VALUES ('$ho','$ten','$user','$pass')";
	mysqli_query($conn,$sql1);
	$_SESSION['nam']=$ten;
}
 else{
      echo "unsuccess";
 	}
 ?>
