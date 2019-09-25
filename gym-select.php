<?php 
global $conn;
function connect_db(){
	global $conn;
    $conn=mysqli_connect('localhost','root','','gym');
     mysqli_set_charset($conn,'UTF8');
}
function getcustomer1_db()
{ 
	global $conn;
    connect_db();
    $sql='SELECT * FROM khachhang1';
    $ketqua=mysqli_query($conn,$sql);
    $customer=array();
    while ($row=mysqli_fetch_assoc($ketqua)) {
    	$customer[]=$row;
    }
    return $customer;
}
function getcustomer2_db(){
    global $conn;
    connect_db();
    $sql="SELECT * FROM khachhang2";
    $ketqua=mysqli_query($conn,$sql);
    $khachhang=array();
    while ($row=mysqli_fetch_assoc($ketqua)) {
    	$khachhang[]=$row;
    }
    return $khachhang;
}
function getfeedback_db(){
   global $conn;
   connect_db();
   $sql="SELECT * FROM feedback";
   $ketqua=mysqli_query($conn,$sql);
   $feedback=array();
   while ($row=mysqli_fetch_assoc($ketqua)) {
   	$feedback[]=$row;
   }
   return $feedback;

}
function getproducttc_db(){
  global $conn;
  connect_db();
  $sql="SELECT * FROM tcproduct";
  $ketqua=mysqli_query($conn,$sql);
  $pro=array();
  while ($row=mysqli_fetch_assoc($ketqua)) {
  	$pro[]=$row;
  }
  return $pro;
	}
	function getbaitaptc()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tcbaitap";
		$ketqua=mysqli_query($conn,$sql);
		$baitap=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$baitap[]=$row;
		}
		return $baitap;
	}
	function gettpbs_whey()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbswhey1";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_whey1()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbswhey2";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_whey2()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbswhey3";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_bbca1()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbsbbca1";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_bbca2()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbsbbca2";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_tangcan1()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbstangcan1";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_tangcan2()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbstangcan2";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_tangcan3()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbstangcan3";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_another()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbsanother";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}
	function gettpbs_undernother()
	{
		global $conn;
		connect_db();
		$sql="SELECT * FROM tpbsundernother";
		$ketqua=mysqli_query($conn,$sql);
		$whey=array();
		while ($row=mysqli_fetch_assoc($ketqua)) {
			$whey[]=$row;
		}
		return $whey;
	}

 ?>


