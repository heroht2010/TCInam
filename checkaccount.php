<?php 
session_start();
$user=isset($_POST['user'])?$_POST['user']:false;
$pass=isset($_POST['pass'])?$_POST['pass']:false;
$conn=mysqli_connect('localhost','root','','gym');
mysqli_set_charset($conn,'UTF8');
$sql="SELECT * FROM dangky WHERE user='$user'";
$sql1="SELECT * FROM dangky WHERE pass='$pass'";
$sql2="SELECT * FROM dangky WHERE user='$user' AND pass='$pass'";
$ketqua=mysqli_query($conn,$sql);
if(mysqli_num_rows($ketqua)==0){
   echo "Người dùng không tồn tại";
}
else
{ 
$ketqua1=mysqli_query($conn,$sql1);
	if (mysqli_num_rows($ketqua1)==0) {
	echo "Mật khẩu không đúng";
}
$ketqua2=mysqli_query($conn,$sql2);
$tk=array();
   while ($row=mysqli_fetch_assoc($ketqua2)) {
   	$tk=$row;
}
$_SESSION['nam']= $tk['ten'];
return true;

}
 ?>


