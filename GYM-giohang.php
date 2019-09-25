<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../GYMCSS/giohang.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico"/>
<link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  z-index: 2;
  background-color: black;
  min-width: 200px;
}

.dropdown-content a {
  color:white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-family: Montserrat;

}

.dropdown-content a:hover {background-color: #FFF056;color: black; -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;}

.dropdown:hover .dropdown-content {display: block;}
.use{
  color: #FFF056;
}
</style>
</head>
<body>
	
  <div class="GH-login">
  	<div class="GH-login1">
  		<p style="float: left;margin-right: 2%" class="hovertext"><span class="glyphicon glyphicon-bell" style="color: #FFF056"></span>Thông báo</p>
  		<p style="float: left;margin-right: 4%" class="hovertext"><span class="glyphicon glyphicon-exclamation-sign" style="color: #FFF056"></span>Thắc mắc</p>
  	</div>
  	<div class="GH-login2">
  		<p style="float: left;margin-right: 4%;margin-left: 14%"><span class="glyphicon glyphicon-phone-alt" style="color: #FFF056"></span>Hotline: +2 392 3929 210</p>
  		<div class="dropdown">
 <a href="../HTML/chuacokinhnghiem.html" style="font-size: 15px;font-family: Montserrat;text-decoration: none;outline: none;" class="hovertext">
  <span class="glyphicon glyphicon-user use"></span><?php echo $_SESSION['nam'] ?><i class="fa fa-caret-down"></i></a>
  <div class="dropdown-content">
    <a href="#"><span class="glyphicon glyphicon-user" style="margin-right: 3%"></span>Thông Tin Cá Nhân</a>
    <a href="#"><span class="glyphicon glyphicon-heart" style="margin-right: 3%"></span>Sản Phẩm Yêu Thích</a>
    <a href="../GYMHTML/dangxuat.php"><span class="glyphicon glyphicon-log-out" style="margin-right: 3%"></span>Đăng Xuất</a>
  </div>
</div>
  	</div>
  </div>
  <div class="GH-title">
  	<div class="GH-title-logo">
  		<a href="../GYMHTML/GYM-trangchuuser.php" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
  	</div>
  	<div class="GH-title-giohang">
  			<p><b style="font-family: Montserrat">GIỎ HÀNG</b></p>
  	</div>
  	<div class="GH-title-search">
  		<input type="text" name="tim" placeholder="Kinh doanh phải đi đôi với chữ TÍN" style="font-family: Montserrat;font-size: 16px">
  		<button><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
  	</div>
  	
  </div>
  <div class="GH-content">
  <div class="GH-detail-product">
  	<div class="GH-detail-check">
  		<center><input type="checkbox" name="check"></center>
  	</div>
  	<div class="GH-detail-sanpham">
  			<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056" class="hovertext">Sản Phẩm</p>
  		
  	</div>
  	<div class="GH-detail-dongia">
  		<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056;text-align: center;" class="hovertext">Đơn Giá</p>
  	</div>
  	<div class="GH-detail-soluong">
  		<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056;text-align: center;" class="hovertext">Số Lượng</p>
  	</div>
  	<div class="GH-detail-tongtien">
  		<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056;text-align: center;" class="hovertext">Tổng Tiền</p>
  	</div>
  	<div class="GH-detail-thaotac">
  		<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056;text-align: center" class="hovertext">Hành Động</p>
  	</div>
  </div>
  <script type="text/javascript">

    function tang() {
      
      var tongtien=$("#tongtien").text();
       var dongia=$("#dongia").text();
      var soluong=document.getElementById("soluong");
      
      if (parseInt(soluong.value)<3) {
        soluong.value=parseInt(soluong.value)+1;
         tongtien=tongtien.replace(/[^0-9\s]/gi, '');
         dongia=dongia.replace(/[^0-9\s]/gi, '');
       tongtien=parseInt(tongtien)+parseInt(dongia);
        document.getElementById("tongtien").innerHTML=tongtien+" VNĐ";
      }
      else if ((parseInt(soluong.value)+1)>3) {
        confirm("Bạn muốn đặt hàng với số lượng lớn?");
      }
       
       
    }
    function giam() {
      var tongtien=$("#tongtien").text();
       var dongia=$("#dongia").text();
      var soluong=document.getElementById("soluong");
      if (parseInt(soluong.value)>1) {
        soluong.value=parseInt(soluong.value)-1;
      }
       tongtien=tongtien.replace(/[^0-9\s]/gi, '');
         dongia=dongia.replace(/[^0-9\s]/gi, '');
      if (parseInt(tongtien)>parseInt(dongia)) {
       tongtien=parseInt(tongtien)-parseInt(dongia);
        document.getElementById("tongtien").innerHTML=tongtien+" VNĐ";
      }
       
    }
  </script>
  <div class="GH-detail-product1">
    <div class="GH-detail-check1">
      <center><input type="checkbox" name="check"></center>
    </div>
    <div class="GH-detail-sanpham1">
        <div class="GH-detail-sanpham1-hinh">
          <img src="https://www.wheystore.vn/upload/product/catalog/on_isolate_5lbs_image_catalog_1562487862.jpg" style="height: 80px;width: 100%;">
        </div>
        <div class="GH-detail-sanpham1-chitiet">
          <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white" class="hovertext" >On Isolate (Sản phẩm tăng cân, tăng cơ hiệu quả)</p>
        </div>
        <div class="GH-detail-sanpham1-phanloai">
          <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056" class="hovertext">Loại</p>
          <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white" class="hovertext">Whey Protein</p>
        </div>
      
    </div>
    <div class="GH-detail-dongia1">
      <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white;text-align: center;" id="dongia" class="hovertext" >25.000 VNĐ</p>
    </div>
    <div class="GH-detail-soluong1">
     <button onclick="giam()">-</button><input type="text" name="soluong" id="soluong" value="1"><button onclick="tang()">+</button>
    </div>
    <div class="GH-detail-tongtien1">
      <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white;text-align: center;" id="tongtien" class="hovertext">25.000 VNĐ</p>
    </div>
    <div class="GH-detail-thaotac1">
      <p><button class="btn-xoa"><b>Xóa</b></button></p>
      <button class="btn-muahang"><b>Mua Hàng</b></button>
    </div>
  </div>
</div>
 <!--  <?php include("../GYMHTML/GYM-footeruser.php") ?> -->
</body>
</html>