<?php 
$loai=isset($_POST['loai'])?$_POST['loai']:'';
$hinh=isset($_POST['image'])?$_POST['image']:'';
$ten=isset($_POST['tensp'])?$_POST['tensp']:'';
$gia=isset($_POST['price'])?$_POST['price']:'';

// $conn=mysqli_connect('localhost','root','','gym');
// if ($_SESSION['mau']!='') {
// 	$sql="INSERT INTO giohang(hinh,ten,loai,gia) VALUES('$hinh','$ten','$loai','$gia')";
// 	return mysqli_query($conn,$sql);
// }
// else{
//    $sql1="DELETE FROM giohang WHERE ten='$ten'";
//    return mysqli_query($conn,$sql1);
// }
 ?>
