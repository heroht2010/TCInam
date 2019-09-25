<?php 
require 'gym-select.php';
session_start();
$whey=gettpbs_whey();
$whey1=gettpbs_whey1();
$whey2=gettpbs_whey2();
$bbca1=gettpbs_bbca1();
$bbca2=gettpbs_bbca2();
$tangcan1=gettpbs_tangcan1();
$tangcan2=gettpbs_tangcan2();
$tangcan3=gettpbs_tangcan3();
$another=gettpbs_another();
$uanother=gettpbs_undernother();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<link rel="stylesheet" type="text/css" href="../GYMCSS/gym.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../GYMJS/hinhhover.js"></script>
  <script type="text/javascript" src="../GYMJS/nav.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico"/>
<link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
</head>
<body>
	<!-- <li class="nav-item dropdown">
   <a class="nav-link" href="#" id="navbarDropdown">Dropdown</a>
   <div class="dropdown-content">
   <a class="dropdown-item" href="#">Action</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#">Another action</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#">Something else here</a>
   </div>
</li> -->
  <div class="TPBS-login">
  	<div class="TPBS-login1">
  		<p style="float: left;margin-right: 2%" class="hovertext"><span class="glyphicon glyphicon-bell" style="color: #FFF056"></span>Thông báo</p>
  		<p style="float: left;margin-right: 4%" class="hovertext"><span class="glyphicon glyphicon-exclamation-sign" style="color: #FFF056"></span>Thắc mắc</p>
  	</div>
  	<div class="TPBS-login2">
  		<p style="float: left;margin-right: 4%"><span class="glyphicon glyphicon-phone-alt" style="color: #FFF056"></span>Hotline: +2 392 3929 210</p>
  		<a href="../GYMHTML/login.php" style="text-decoration: none;"><p style="float: left;margin-right: 4%" class="hovertext"><span class="glyphicon glyphicon-user" style="color: #FFF056"></span>Đăng nhập</p></a>
  		<a href="../GYMHTML/logout.php"><p style="float: left;margin-right: 4%" class="hovertext"><span class="glyphicon glyphicon-log-out" style="color: #FFF056"></span>Đăng ký</p></a>
  	</div>
  </div>
  <div class="TPBS-title">
  	<div class="TPBS-title-logo">
  		<a href="../GYMHTML/GYM-trangchu.php" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
  	</div>
  	<div class="TPBS-title-search">
  		<input type="text" name="tim" placeholder="Nhập sản phẩm cần tìm......" style="font-family: Montserrat;font-size: 16px">
  		<button><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
  	</div>
  	<div class="TPBS-title-cart">
  		<a href="../GYMHTML/login.php"><button><span class="glyphicon glyphicon-shopping-cart"></span><b style="font-family: Montserrat;margin-left: 3%;text-decoration: none;">Giỏ hàng</b></button></a>
  	</div>
  </div>
  <div class="TPBS-list">
  	<div class="TPBS-list-product1">
  		<p><span class="glyphicon glyphicon-th-list" style="margin-right: 3%"></span><b style="font-family: Montserrat">DANH MỤC SẢN PHẨM</b></p>
  	</div>
  	<div class="TPBS-list-product2">
  		<p><span class="glyphicon glyphicon-earphone" style="margin-right: 3%"></span><b style="font-family: Montserrat">Liên hệ đặt hàng ngay</b></p>
  	</div>
  	<div class="TPBS-list-product3">
  		<p><span class="glyphicon glyphicon-thumbs-up" style="margin-right: 3%"></span><b style="font-family: Montserrat">Sản phẩm 100% chính hãng</b></p>
  	</div>
  	<div class="TPBS-list-product3">
  		<p><span class="glyphicon glyphicon-plane" style="margin-right: 3%"></span><b style="font-family: Montserrat">Giao hàng nhanh nhất</b></p>
  	</div>
  	<div class="TPBS-list-product3">
  		<p><span class="glyphicon glyphicon-sort" style="margin-right: 3%"></span><b style="font-family: Montserrat">7 ngày đổi trả dễ dàng</b></p>
  	</div>
  </div>
  <div class="TPBS-menu">
  	<div class="TPBS-menu-list">
  		<div class="TPBS-menu-list1">
  			<img src="https://image.flaticon.com/icons/svg/1616/1616487.svg">
  		<p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Cơ, Giảm Mỡ</b></p>
  	</div>
  	<div class="TPBS-menu-list1">
  			<img src="https://image.flaticon.com/icons/svg/1/1358.svg">
  		<p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Cân</b></p>
  	</div>
  	<div class="TPBS-menu-list1">
  			<img src="https://image.flaticon.com/icons/svg/1468/1468326.svg">
  		<p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Sức Mạnh</b></p>
  	</div>
  	<div class="TPBS-menu-list1">
  			<img src="https://image.flaticon.com/icons/svg/706/706142.svg">
  		<p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Hồi Phục Cơ Thể</b></p>
  	</div>
  	<div class="TPBS-menu-list1">
  			<img src="https://image.flaticon.com/icons/svg/185/185606.svg">
  		<p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Giảm Cân</b></p>
  	</div>
  	<div class="TPBS-menu-list1">
  			<img src="https://image.flaticon.com/icons/svg/2051/2051648.svg">
  		<p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Vitamin, Khoáng</b></p>
  	</div>
  	<div class="TPBS-menu-list1">
  			<img src="https://image.flaticon.com/icons/svg/603/603782.svg">
  		<p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Năng Lượng</b></p>
  	</div>
  	<div class="TPBS-menu-list1">
  			<img src="https://image.flaticon.com/icons/svg/780/780118.svg">
  		<p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Whey Protein</b></p>
  	</div>
  	</div>
  	<div class="TPBS-menu-img">
  		<div class="TPBS-menu-img-carosel">
  			<div class="TPBS-menu-img-carosel1">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="1" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="2" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="3" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="4" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="5" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="6" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="7" style="border: 2px solid black;background-color: #FFF056"></li>
      '<li data-target="#myCarousel" data-slide-to="8" style="border: 2px solid black;background-color: #FFF056"></li>
      '<li data-target="#myCarousel" data-slide-to="9" style="border: 2px solid black;background-color: #FFF056"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">

        <img src="http://www.etiquetas.com.br/wp-content/uploads/2017/08/best-whey-banner-site-prod.jpg" alt="Los Angeles" style="width:100%;height: 428px">
      </div>

      <div class="item">
        <img src="https://tesla-nutrition.com/images/headers/header-whey-charger-100.jpg" alt="Chicago" style="width:100%;height: 428px">
      </div>
    
      <div class="item">
        <img src="https://superior14.shop/images/descripciones/header-bcaa-2-1-1.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://www.dinhduongthehinh.com/wp-content/uploads/2019/05/serious-mass-vi-nao-ngon.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="http://www.tesla-nutritions.com/images/headers/header-mass-super-charger.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://www.gannikus.de/wp-content/uploads/2017/02/biotechusa-shaper-von-ulisses-mitentwickelter-fatburner.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://www.ironmansuplementos.com.br/app/userfiles/WHEY%20ON%20(Refil)%20Optimum%20Nutrition%20banners.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="http://www.nutratec.com.br/wp-content/uploads/2016/11/Banner-Nutratec-e1478888989579.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://www.optimumnutrition.com/sites/g/files/mrktmf206/files/styles/article_full_width/public/782ee805d09fa868c391d515e9124fcefdcc82001.jpg?itok=qovD9sBW" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://soaressuplementos.com.br/wp-content/uploads/2016/10/banner-thermo-abdomen-1.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
    </div>

  </div>
</div>
  		</div>
  		<div class="TPBS-menu-img2">
  			<img src="https://http2.mlstatic.com/whey-coffee-caffe-late-proteina-pra-tomar-quentinha-D_NQ_NP_712758-MLB27957017017_082018-F.jpg" style="height: 214px;width: 100%">

  			<img src="http://sg.suppsshop.com/media/catalog/product/cache/2/small_image/700x700/9df78eab33525d08d6e5fb8d27136e95/d/y/dymatize_elite_whey_protein.png" style="height: 214px;width: 100%">
  		</div>
  	</div>
  </div>
  <div class="TPBS-undermenu-img">
  	<div class="TPBS-undermenu-img1">
  		<img src="https://image.prestomall.com//editorImg/2017/01/15/51100293/2017011517241511336.jpg" style="height: 300px;width: 95%;">
  	</div>
  	<div class="TPBS-undermenu-img2">
  		<img src="http://tangcangiamcan.com/DATA/linhvp/tintuc/2-17/serious%20mass-va-whey%20protein-la-hai-dong-sua-the-hinh-cao-cap-hien-nay.jpg" style="height: 300px;width: 100%">
  	</div>
  </div>
  <div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext" id="loaisp">WHEY PROTEIN</p>
    </div>
    <div class="TPBS-detail3"></div>
  	
  	<div class="TPBS-detail-product">
      <?php foreach ($whey as $key => $value): ?>
  		<div class="TPBS-detail-product1" >
  			<img src="<?php echo $value['image'] ?>" id="hinh" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cart<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext" id="tensp"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056" id="giasp"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
              <script type="text/javascript">
      $("#but-cart<?php echo $value['id'] ?>").on('click', function(event) {
       var btn=document.getElementById("but-cart<?php echo $value['id'] ?>");
        
        if (btn.style.color=='') {
          btn.style.color='#0286d3';
        }
        else{
          btn.style.color='';
        }
        $_SESSION['mau']=btn.style.color;
        alert($_SESSION['mau']);
        if (btn.style.color!='') {
          $.ajax({
            url: 'insert_giohang.php',
            type: 'POST',
            data: {
              loai: $("#loaisp").text(),
              image: $("#hinh").attr('src'),
              tensp: $("#tensp").text(),
              price:$("#giasp").text()
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            console.log(response);
          });
          
        }
      });
        
    </script>
              <?php endforeach ?>
              
  	</div>
    <div class="TPBS-detail-product">
      <?php foreach ($whey1 as $key => $value): ?>
      <div class="TPBS-detail-product1" >
        <img src="<?php echo $value['image'] ?>" style="height: 270px;width: 100%" class="image">
         <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
              <?php endforeach ?>
              
    </div>
    <div class="TPBS-detail-product">
      <?php foreach ($whey2 as $key => $value): ?>
      <div class="TPBS-detail-product1" >
        <img src="<?php echo $value['image'] ?>" style="height: 270px;width: 100%" class="image">
         <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
              <?php endforeach ?>
              
    </div>
  </div>
  <div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext">BCAA</p>
    </div>
    <div class="TPBS-detail3"></div>
  	
  	<div class="TPBS-detail-product">
      <?php foreach ($bbca1 as $key => $value): ?>
  		<div class="TPBS-detail-product1">
  			<img src="<?php echo $value['image'] ?>" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
      <?php endforeach ?>
             
  		</div>
      <div class="TPBS-detail-product">
        <?php foreach ($bbca2 as $key => $value): ?>
  		<div class="TPBS-detail-product1">
  			<img src="<?php echo $value['image'] ?>" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
        <?php endforeach ?>
              <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>	
  		</div>
  	</div>
  	<div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext">SỮA TĂNG CÂN</p>
    </div>
    <div class="TPBS-detail3"></div>
  	
  	<div class="TPBS-detail-product">
      <?php foreach ($tangcan1 as $key => $value): ?>
  		<div class="TPBS-detail-product1">
  			<img src="<?php echo $value['image'] ?>" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
      <?php endforeach ?>
  		</div>
      <div class="TPBS-detail-product">
        <?php foreach ($tangcan2 as $key => $value): ?>
  		<div class="TPBS-detail-product1">
  			<img src="<?php echo $value['image'] ?>" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
        <?php endforeach ?>
  		</div>
  		<div class="TPBS-detail-product">
        <?php foreach ($tangcan3 as $key => $value): ?>
  		<div class="TPBS-detail-product1">
  			<img src="<?php echo $value['image'] ?>" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
              <?php endforeach ?>
              <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>
  		</div>
        
  	</div>
  	<div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext">VITAMIN KHOÁNG</p>
    </div>
    <div class="TPBS-detail3"></div>
  	
  	<div class="TPBS-detail-product">
  		<div class="TPBS-detail-product1">
  			<img src="https://www.wheystore.vn/upload/product/catalog/muscletech_multivitamin_90_vien_image_catalog_1562488620.jpg" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b>Multivitamin </b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white">90 Viên</p>
      
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike>.</strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b>350.000 VNĐ</b></p>
        </div>  
    </div>
              </div>
              <div class="TPBS-detail-product1">
  			<img src="https://www.wheystore.vn/upload/product/catalog/aggro-.jpg" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b>AGGRO</b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white">168 Viên</p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike>.</strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b>890.000 VNĐ</b></p>
        </div>  
    </div>
              </div>
              <div class="TPBS-detail-product1">
  			<img src="https://www.wheystore.vn/upload/product/catalog/vitabolic-hang-nutrabolics.jpg" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b>Vitabolic</b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white">196 Viên</p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike>.</strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b>590.000 VNĐ</b></p>
        </div>  
    </div>
              </div>
              <div class="TPBS-detail-product1">
  			<img src="https://www.wheystore.vn/upload/product/catalog/muscletech-platinum-100-fish-oil-100-vien.jpg" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b>Platinum 100% Fish Oil </b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white">100 Viên</p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike>350.000 VNĐ</strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b>300.000 VNĐ</b></p>
        </div>  
    </div>
              </div>

  		</div>
      <div class="TPBS-detail-product">
  		<div class="TPBS-detail-product1">
  			<img src="https://www.wheystore.vn/upload/product/catalog/dymatize-omega-3-fish-oil.jpg" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b>Dymatize Omega-3 </b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white">Fish Oil</p>
              <div class="TPBS-detail-product1-price">                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b>550.000 VNĐ</b></p>
        </div>  
    </div>
              </div>
              <div class="TPBS-detail-product1">
  			<img src="https://www.wheystore.vn/upload/product/catalog/bio_vite_advanced_multi-vitamin_90_tablets_-_30_servings__image_catalog_1562992046.jpg" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b>Bio Vite Multi-Vitamin </b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"> Advanced 90 viên</p>
              <div class="TPBS-detail-product1-price">
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b>350.000 VNĐ</b></p>
        </div>  
    </div>
              </div>
              <div class="TPBS-detail-product1">
  			<img src="https://www.wheystore.vn/upload/product/catalog/alive_men_s_energy_image_catalog_1562380994.jpg" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b>Alive Men's Energy </b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white">50 Viên</p>
              <div class="TPBS-detail-product1-price">
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b>350.000 VNĐ</b></p>
        </div>  
    </div>
              </div>
              <div class="TPBS-detail-product1">
  			<img src="https://www.wheystore.vn/upload/product/catalog/nutrabolics_blackout__120_vien__image_catalog_1564395064.jpg" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white"><b>Nutrabolics Blackout </b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white">120 Viên</p>
              <div class="TPBS-detail-product1-price">
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b>700.000 VNĐ</b></p>
        </div>  
    </div>
              </div>
              <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>
  		</div>
  	</div>
  	<div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext">BÀI VIẾT KHÁC</p>
    </div>
    <div class="TPBS-detail3"></div>
  	<div class="TPBS-another">
  		<div class="TPBS-another1">
  			<iframe src="https://www.youtube.com/embed/SkOqEf7AiKE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;height: 420px;"></iframe>
  			<p style="font-family: Montserrat;font-size: 25px;" class="hovertext"><b>Tập ngực sao cho ngực to dày rộng và hiệu quả</b></p>
  		</div>
  		<div class="TPBS-another2">
        <?php foreach ($another as $key => $value): ?>
  			<div class="TPBS-another2-detail" style="padding-top: 0%">
  				<img src="<?php echo $value['image'] ?>" >
  				<p style="font-family: Montserrat;font-size: 20px;" class="hovertext"><b><?php echo $value['name'] ?></b></p>
  				<p style="font-family: Montserrat;font-size: 15px;color: white"><?php echo $value['detail'] ?></p>
  			</div>
        <?php endforeach ?>
  		</div>
  	</div>
  	<div class="TPBS-underanother">
      <?php foreach ($uanother as $key => $value): ?>
  		<div class="TPBS-underanother-detail1 hovertext">
  			<img src="<?php echo $value['image'] ?>" style="height: 180px;width: 100%;float: left;">

  				<p style="font-family: Montserrat;font-size: 17px;text-align: center;"><?php echo $value['name'] ?></p>
  		</div>
      <?php endforeach ?>
  	</div>
  	</div>
  	<div class="TPBS-img-end">
  		<div class="TPBS-img-end1">
  			<img src="https://www.thol.com.vn/pub/media/wysiwyg/Flash-sale/thang-co-hon-sale-het-hon.jpg" style="height: 500px;width: 100%;">
  		</div>
  		<div class="TPBS-img-end2">
  			<img src="https://img.kam.vn/images/375x0/e3e82d7d33b84089a96b71777f28e52d/adayroi-com-principle-nutrition-uu-dai-den-29-qua-tang-hap-dan.jpg" style="height: 250px;width: 100%;">
  			<img src="https://wheyshop.vn/wp-content/uploads/2018/02/thuc-pham-bo-sung-outlift-1-compressed.jpg" style="height: 250px;width: 100%;">
  		</div>
  	</div>
  	<?php 
     include("../GYMHTML/GYM-footer.php");
     ?>
</body>
</html>