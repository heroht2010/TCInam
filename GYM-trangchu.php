<?php 
require 'gym-select.php';
$data=getcustomer1_db();
$data1=getcustomer2_db();
$feedback=getfeedback_db();
$product=getproducttc_db();
$baitap=getbaitaptc();
 ?>
<!DOCTYPE html>
<html>
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
<script type="text/javascript">
    new WOW().init();
</script>
<body>
<div class="TC-banner">
</div>
<nav class="navbar navbar-fixed-top" style="margin-bottom: 0px;background-color: transparent;" id="navv">
  <div class="container-fluid" style="margin-top: 1.5%">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="margin-top: 20px">
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <li class="nav navbar-nav" style="margin-right: 20%;margin-left: 6%"><a href="../GYMHTML/GYM-trangchu.php" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a></li>
      <ul class="nav navbar-nav">
         
        <li><a href="../GYMHTML/GYM-trangchu.php" style="font-size: 15px;font-family: Montserrat;color: #FFF056">TRANG CHỦ</a></li>
        <li><a href="../HTML/chuacokinhnghiem.html" style="font-size: 15px;font-family: Montserrat;">THIẾT BỊ GYM</a></li>
        <li><a href="../HTML/chuacokinhnghiem.html" style="font-size: 15px;font-family: Montserrat">PHỤ KIỆN GYM</a></li>
        <li><a href="../GYMHTML/GYM-thucphambosung.php" style="font-size: 15px;font-family: Montserrat">THỰC PHẨM BỔ SUNG</a></li>
        <li><a href="../HTML/chuacokinhnghiem.html" style="font-size: 15px;font-family: Montserrat">HƯỚNG DẪN TẬP</a></li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="TC-bannercontent">
  <center><p style="font-family: Bangers;font-size: 60px;">Don't stop<br> when you tired.<br> Stop when you're<b style="font-size: 80px;color: #FFF056"> DONE</b></p>
    
  <a href="../GYMHTML/login.php" style="text-decoration: none;"><button class="TC-btn-start"><span style="font-family:  Bangers;font-size: 27px"><b>GET START</b></span></button></a>
  </center>
</div>
<div class="TC-welcome">
  <div class="TC-welcomevideo">
    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/cKNIkRmWGVo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-right: 4px solid #FFF056;" class="wow fadeInUp"></iframe>
  </div>
  <div class="TC-welcometext">
        <center><p style="font-family: Paytone One;font-size: 45px;color: white" class="wow fadeInUp">WELCOME TO <b style="color:#FFF056 ">VN GYM</b></p></center>
       <p style="color: #b2b2b2;font-family: Montserrat;font-size: 18px" align="justify" class="wow fadeInUp">Khi bạn đến với VN GYM, đây như là ngôi nhà thứ 2 của bạn, khi bạn tìm đến chúng tôi để cần một sự thay đổi vậy thì để chúng tôi cho bạn thấy bạn đã lựa chọn đúng. Đừng lo lắng về ngoại hình hay bất kể vấn đề gì chán nản của bản thân ngay lúc này hãy tạm thời gác nó sang một bên bởi vì bạn chuẩn bị cho một quá trình lột xác hoàn toàn cùng chúng tôi. 
  </div>
</div>
<div class="TC-service">
  <p style="font-family: Paytone One;font-size: 48px;color: white" class="wow fadeInUp"><b style="color: #FFF056">VN GYM</b> SERVICE</p>
  <div class="TC-service1 wow fadeInLeft">
    <figure class="snip1477">
  <img src="https://wefit.vn/wp-content/uploads/2017/07/2.16.mma-gym.jpg" alt="sample38" />
  <div class="title">
    <div>
      <h2>VN GYM</h2>
      <h4>THIẾT BỊ PHÒNG GYM</h4>
    </div>
  </div>
  <figcaption>
    <p align="justify">Khi bạn muốn mở một phòng tập mà việc chọn thiết bị khá đau đầu, VN GYM sẽ tư vấn cho bạn những lời khuyên phù hợp nhất</p>
  </figcaption>
  <a href="#"></a>
</figure>
</div>
<div class="TC-service1 wow fadeInLeft">
<figure class="snip1477"><img src="https://media.sheis.vn/images/image019(1132).jpg" alt="sample35" />
  <div class="title">
    <div>
      <h2>VN GYM</h2>
      <h4>PHỤ KIỆN GYM</h4>
    </div>
  </div>
  <figcaption>
    <p align="justify">Những chấn thương sẽ không tránh khỏi khi bạn tập gym, và những phụ kiện của VN GYM là những hàng chất lượng nhất</p>
  </figcaption>
  <a href="#"></a>
</figure>
</div>
<div class="TC-service1 wow fadeInRight">
<figure class="snip1477"><img src="https://vuacobap.com/wp-content/uploads/2018/06/ctkm-thang7-whey-mutant-10lbs-free-bcaa-30sers.jpg" alt="sample35" />
  <div class="title">
    <div>
      <h2>VN GYM</h2>
      <h4>Thực Phẩm Bổ Sung</h4>
    </div>
  </div>
  <figcaption>
    <p align="justify">Để rút ngắn thời gian phát triển của cơ bắp thì thực phẩm bổ sung là sự lựa chọn đúng đắn.</p>
  </figcaption>
  <a href="#"></a>
</figure>
  </div>
  <div class="TC-service1 wow fadeInRight">
<figure class="snip1477"><img src="https://wegym.vn/wp-content/uploads/2019/03/lich-va-cac-bai-tap-Gym-cho-nguoi-moi-bat-dau-1.jpg" alt="sample35" />
  <div class="title">
    <div>
      <h2>VN GYM</h2>
      <h4>Hướng Dẫn Tập</h4>
    </div>
  </div>
  <figcaption>
    <p align="justify">Đến với VN GYM bạn sẽ được hướng dẫn cách tập đúng, giúp tăng cơ, tăng cân hiệu quả.</p>
  </figcaption>
  <a href="#"></a>
</figure>
  </div>
</div>
<div class="TC-lichtap">
  <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;" class="wow fadeInUp">ĐỂ CÓ THÂN HÌNH ĐẸP</p>
  <div class="TC-lichtap1">
    <img src="https://file.hstatic.net/1000185761/file/lich_tap_gym_cho_nam_gioi1_3d2654c0c8ed47cf9df20f4701f65fec.jpg" style="height: 450px;width: 100%;border-right: 5px solid #FFF056" class="wow fadeInUp">
    <div class="TC-chu wow fadeInUp" style="width: 100%;">
    <p style="font-family: Montserrat;font-size: 18px;color:  #FFF056;margin-bottom: 1px;">Lịch Tập</p>
        <p style="font-family: Paytone One;font-size: 40px;color: white;">LỊCH TẬP HỢP LÝ</p>
        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2">Để có được thân hình đẹp như mong muốn điều trước hết là bạn phải có một lịch tập rõ ràng và hợp lý phù hợp với bản thân của chính bạn, khi bạn đã nắm kĩ các quy tắc phân chia lịch tập bạn sẽ không còn lo lắng về việc chia lịch tập nữa.</p>
        <button class="btnlichtap">LỊCH TẬP</button>
    </div>
  </div>
  <div class="TC-lichtap2">
    <div class="TC-lichtap2detail wow fadeInUp">
    <div class="TC-lichtap2icon">
<img src="https://image.flaticon.com/icons/svg/182/182146.svg" >    
    </div>
     <div class="TC-lichtap2chu">
       <p style="font-family: Montserrat;font-size: 20px;color: white"><b>Mục Tiêu Hướng Tới</b></p>
       <p style="font-family: Montserrat;font-size: 15px;color: white" align="justify">Điều trước tiên khi làm bất cứ điều gì trong cuộc sống nói chung và trong việc tập gym nói riêng là chúng ta phải có mục tiêu để bản thân ta có thể hướng tới, đặt mục tiêu rõ ràng để có hướng đi hợp lý và đạt được mục tiêu.</p>
     </div>
   </div>
   <div class="TC-lichtap2detail1 wow fadeInUp">
    <div class="TC-lichtap2icon">
<img src="https://image.flaticon.com/icons/svg/1616/1616487.svg" >    
    </div>
     <div class="TC-lichtap2chu">
       <p style="font-family: Montserrat;font-size: 20px;color: white"><b>Tập Luyện Chăm Chỉ</b></p>
       <p style="font-family: Montserrat;font-size: 15px;color: white" align="justify">Không có thứ gì sẵn có mà không cố gắng khi bạn nhận ra rằng làm việc chăm chỉ là thực sự quan trọng, bạn sẽ cảm thấy thoải mái hơn khi theo đuổi ước mơ của mình.</p>
     </div>
   </div>
   <div class="TC-lichtap2detail2 wow fadeInUp">
    <div class="TC-lichtap2icon">
<img src="https://image.flaticon.com/icons/svg/1188/1188576.svg" >    
    </div>
     <div class="TC-lichtap2chu">
       <p style="font-family: Montserrat;font-size: 20px;color: white"><b>Phương Pháp Tập Hiệu Quả</b></p>
       <p style="font-family: Montserrat;font-size: 15px;color: white" align="justify">Khi bạn bước vào thế giới của những gymer, để những ngày tập luyện không biết mệt mỏi của chúng ta đạt kết quả thì đây chính là yếu tố tạo nên một thân hình cường tráng với những múi cơ săn chắc, vì vậy bạn cần nắm rõ các quy tắc để chọn phương pháp hợp lý cho bản thân</p>
     </div>
   </div>
   <div class="TC-lichtap2detail2 wow fadeInUp">
    <div class="TC-lichtap2icon">
<img src="https://image.flaticon.com/icons/svg/1689/1689458.svg">    
    </div>
     <div class="TC-lichtap2chu">
       <p style="font-family: Montserrat;font-size: 20px;color: white"><b>Sắp Xếp Thời Gian, Ăn Uống Đủ Chất</b></p>
       <p style="font-family: Montserrat;font-size: 15px;color: white" align="justify">Ngoài những giờ tập mệt mỏi bạn cần phải cung cấp đầy đủ chất dinh dưỡng cũng như thời gian biểu hợp lý để có thể giúp các nhóm cơ phát triển toàn diện.</p>
     </div>
   </div>    

  </div>
  <div class="TC-trainer">
    <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;margin-bottom: 2px;" class="wow fadeInUp">KHÁCH HÀNG <b style="color: #FFF056">VN GYM</b></p>
    <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;text-align: center;" class="wow fadeInUp">Dưới đây là một số khách hàng tiêu biểu đã lột xác khi tìm đến VN GYM</p>
    <div class="TC-trainer1">
        <?php foreach ($data as $key => $value): ?>
      <div class="TC-trainerinfo wow fadeInLeft">
      <div class="TC-trainerhinh">
        <img src="<?php echo $value['image'] ?>" style="height: 460px;width: 100%;float: left;">
      </div>
      <div class="TC-trainerchu">
        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 1px"><?php echo $value['follow'] ?></p>
        <p style="font-family: Montserrat;font-size: 32px;color: #FFF056"><?php echo $value['name'] ?></p>
                <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 30px;" align="justify"><?php echo $value['detail'] ?></p>
          <button class="TC-btnfa"><i class="fa fa-facebook"></i></button>
          <button class="TC-btntwit"><i class="fa fa-instagram"></i></button>
          <button class="TC-btntwit"><i class="fa fa-twitter"></i>
</button>

      </div>
    </div>
        <?php endforeach ?>
  </div>
    <div class="TC-trainer2">
      <?php foreach ($data1 as $key => $value): ?>
        
       <div class="TC-trainerinfo wow fadeInRight">
      <div class="TC-trainerhinh">
        <img src="<?php echo $value['image'] ?>" style="height: 460px;width: 100%;float: left;">
      </div>
      <div class="TC-trainerchu">
        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 1px"><?php echo $value['follow'] ?></p>
        <p style="font-family: Montserrat;font-size: 32px;color: #FFF056"><?php echo $value['name'] ?></p>
                <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 30px;" align="justify"><?php echo $value['detail'] ?></p>
          <button class="TC-btnfa"><i class="fa fa-facebook"></i></button>
          <button class="TC-btntwit"><i class="fa fa-instagram"></i></button>
          <button class="TC-btntwit"><i class="fa fa-twitter"></i>
</button>

      </div>
    </div>

      <?php endforeach ?>
    </div>
  </div>
  <div class="TC-feedback">
     <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;margin-bottom: 1px;margin-top: 5%;" class="wow fadeInUp">FEEDBACK</p>
      <p style="font-family: Montserrat;font-size: 18px;text-align: center;color: white;margin-bottom: 6%;" class="wow fadeInUp">Khách hàng là người đánh giá chân thực nhất về bức tranh uy tín và hiệu quả của chúng tôi.</p>
      <?php foreach ($feedback as $key => $value): ?>
    <div class="TC-feedbackdetail wow fadeInLeft">
      <p style="font-family: Montserrat;font-size: 15px;color: #262626" align="justify"><?php echo $value['feedback'] ?></p>
      <div class="TC-tacgia">
        <div class="TC-tacgiahinh">
          <img src="<?php echo $value['image'] ?>" style="height: 70px;width: 100%;border-radius: 50%;float: left;">
        </div>
        <div class="TC-tacgiachu">
      <p style="font-family: Montserrat;font-size: 15px;color: #262626;margin-bottom: 1px;"><?php echo $value['name'] ?></p>
          <p style="font-family: Montserrat;font-size: 15px;color: #262626;"><?php echo $value['address'] ?></p>
        </div>
      </div>
    </div>
    
        
      <?php endforeach ?>
  </div>
  <div class="TC-sanpham">
    <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;margin-bottom: 1px;margin-top: 5%;" class="wow fadeInUp">THỰC PHẨM BỔ SUNG <b style="color:#FFF056 ">VN GYM</b></p>
      <p style="font-family: Montserrat;font-size: 18px;text-align: center;color: #b2b2b2;margin-bottom: 5%;" class="wow fadeInUp">Thực phẩm chức năng cũng là yếu tố quan trọng giúp tăng cân tăng cơ hiệu quả</p>
      <?php foreach ($product as $key => $value): ?>
    <div class="TC-sanphamdetail wow fadeInUp">
      <img src="<?php echo $value['image'] ?>" style="height: 300px;width: 100%;float: left;">
      <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 25px;color: white"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;"><?php echo $value['detail'] ?></p>
      <div class="TC-giasanpham">
        <div class="TC-giasanpham1">
        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>        
         <div class="TC-giasanpham2">
      <button class="TC-muasanpham">Mua ngay</button>
    </div>
    </div>
    </div>
      <?php endforeach ?>
    
  </div>
<div class="TC-baitaphd">
  <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;margin-bottom: 1px;margin-top: 2%" class="wow fadeInUp">BÀI TẬP HƯỚNG DẪN</p>
      <p style="font-family: Montserrat;font-size: 18px;text-align: center;color: #b2b2b2;margin-bottom: 5%;" class="wow fadeInUp">Các bài tập của<b style="color: #FFF056"> VN GYM </b>sẽ giúp bạn biết được cách tập đúng và hiệu quả nhất</p>
      <?php foreach ($baitap as $key => $value): ?>
  <div class="TC-baitaphd1 wow fadeInUp">
    <div class="page__container">
      <div class="photobox photobox_type23">
        <div class="photobox__previewbox">
          <img src="<?php echo $value['image'] ?>" style="height: 450px;width: 100%" class="photobox__preview" alt="Ngực trên">
          <span class="photobox__label" style="color: white;font-family: Montserrat;font-size: 18px;margin-bottom: 5%;"><?php echo $value['name'] ?></span>
          <button class="photobox__label TC-more" style="margin-top: 50px;width: 35%">Show More</button>
        </div>
      </div>  
  </div>
  </div>
  <?php endforeach ?>
</div> 
<div class="TC-contact">
  <div class="TC-contactmap wow fadeInUp">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.685313543291!2d108.23965431430567!3d15.97780174612694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421084250439e9%3A0x9b8e9f1a0f1a0ea0!2zTmFtIEvhu7MgS2jhu59pIE5naMSpYSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1560872013150!5m2!1svi!2s" width="100%" height="475" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="TC-contactus">
    <form method="POST" action="insertrepond.php">
    <p style="color: white;font-family: Montserrat;font-size: 38px;" class="wow fadeInUp">Phản Hồi </p>
    <div class="TC-input wow fadeInUp">
    <input type="text" name="ho" class="TC-inputname" placeholder="Họ">
  </div>
  <div class="TC-input wow fadeInUp">
    <input type="text" name="ten" class="TC-inputname" placeholder="Tên">
  </div>
  <div class="TC-inputem" wow fadeInUp>
        <input type="text" name="email" class="TC-inputemail" placeholder="Email">

  </div>
  <div class="TC-inputsdt wow fadeInUp">
    <input type="text" name="sdt" class="TC-inputSDT" placeholder="SĐT">
  </div>
  <div class="TC-gopy wow fadeInUp">
    <input type="textarea" name="gopy" class="TC-inputgopy" placeholder="Phản hồi với chúng tôi">
  </div>
  <div class="TC-guidi wow fadeInUp" align="center">
    <button class="TC-butguidi"><span class="glyphicon glyphicon-send" style="margin-right: 5%"></span>Send</button>
  </div>
</form>
  </div>
</div>
</div>
<?php 
     include("../GYMHTML/GYM-footer.php");
     ?>
</body>
</html>