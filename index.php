<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mooyong - ราคาถูก ปลอดภัย เล่นได้แน่นอน</title>
  <link rel="icon" href="https://cdn.discordapp.com/attachments/1042671731535523850/1047090507135848458/logo.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  </script>
  
  
  <style>
    body {
      margin: 0;
      font-family: "Kanit", sans-serif;
      background-color: whitesmoke;
    }

    .banner-image {
      background-image: url('img/banner-img.png');
      background-size: cover;
    }

    .btn-navbar {
      background-color: orangered;
      color: white;
    }

    .btn-navbar:hover {
      background-color: orangered;
      color: white;
    }

    .text-title {
      font-weight: bold;
      font-size: 7ex;
    }

    .text-intro {
      font-size: 3ex;
      opacity: 0.5;
    }
    .text-price{
      font-size: 2.7ex;
      color: gray;
    }

    #btn-back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      background-color: #212529;
      border-radius: 50%;
      display: inline-block;
      box-shadow: rgba(255, 177, 113, 0.3) 0px 1px 2px 0px, rgba(255, 181, 84, 0.15) 0px 2px 6px 2px;
    }
    .card {
        border: 0px solid var(--color-three);
        margin-bottom: 20px;
        transition: border 0.1s, transform 0.3s;
    }

    .card:hover {
        border: 0px solid var(--color-two);
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
        cursor: pointer;
    }

    .card .card-body h2 {
        color: var(--color-two);
    }

    .card img:hover {
        opacity: 0.6;
    }

    .card-p {
        color: var(--color-three);
    }

    .card-p i {
        color: var(--color-two);
        margin-right: 6px;
    }
    :root {
        --color-one: #e6e6ff;
        --color-two: orangered;
        --color-three: rgb(255, 128, 82);
    }
    .footer{
      width: 100%;
      height: 100px;
      background-color: #212529;
      font-size: 15px;
      color: white;
    }
    section{
  position: relative;
  width: 100%;
  height: 800px;
  background: orangered;
  overflow: hidden;
}
section .air{
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100px;
  background: url(https://1.bp.blogspot.com/-xQUc-TovqDk/XdxogmMqIRI/AAAAAAAACvI/AizpnE509UMGBcTiLJ58BC6iViPYGYQfQCLcBGAsYHQ/s1600/wave.png);
  background-size: 1000px 100px
}
section .air.air1{
  animation: wave 30s linear infinite;
  z-index: 1000;
  opacity: 1;
  animation-delay: 0s;
  bottom: 0;
}
section .air.air2{
  animation: wave2 15s linear infinite;
  z-index: 999;
  opacity: 0.5;
  animation-delay: -5s;
  bottom: 10px;
}
section .air.air3{
  animation: wave 30s linear infinite;
  z-index: 998;
  opacity: 0.2;
  animation-delay: -2s;
  bottom: 15px;
}
section .air.air4{
  animation: wave2 5s linear infinite;
  z-index: 997;
  opacity: 0.7;
  animation-delay: -5s;
  bottom: 20px;
}
@keyframes wave{
  0%{
    background-position-x: 0px; 
  }
  100%{
    background-position-x: 1000px; 
  }
}
@keyframes wave2{
  0%{
    background-position-x: 0px; 
  }
  100%{
    background-position-x: -1000px; 
  }
}
.text-c{
  font-size: 3.5ex;
}
.iconsize{
  font-size: 10ex;
  color: orangered;
}

  </style>
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://cdn.discordapp.com/attachments/1042671731535523850/1047071383680729138/Untitled-1.png" width="50" height="50" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" style="font-weight: bold; margin-right: 10px;"
              href="#">Mooyong</a>
          </li>
          <!-- <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar my-2 my-sm-0">สั่งซื้อสินค้า</a> -->
          <a onclick="al();" class="btn btn-navbar my-2 my-sm-0">สั่งซื้อสินค้า</a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Banner Image  -->
  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <p class="text-white text-title">ID แท้ Minecraft , PlayStation Plus , Xbox Game Pass</p>
      <p class="text-white text-title">ราคาถูก ปลอดภัย เล่นได้แน่นอน</p>
      <p class="text-white text-intro">เริ่มต้นเพียง 250 บาท</p>
      <p class="text-white text-intro">สามารถสั่งซื้อได้ง่าย และรวดเร็ว</p>
    </div>
  </div>

  <!-- Main Content Area -->
  <div class="container my-5 d-grid gap-5">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card shadow">
          <img src="https://cdn.discordapp.com/attachments/1042671731535523850/1047081942476148787/1.png" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h2 class="card-title text-c">Minecraft Java + Windows KEY for PC มือ 1 (แท้)</h2>
            <p class="text-price">749<span style="font-size: 3ex; color: var(--color-three)">฿</span></p>
            <p class="card-text">✅ เล่นได้ทั้งเวอร์ชั่น JAVA และ Windows 10/11 (Bedrock Edition)</p>
            <p class="card-text">✅ สินค้ารับประกัน</p>
          </div>
          <div class="card-body card-p">
            <div class="row">
              <div class="d-flex justify-content-center">
              <a onclick="al();" class="btn btn-navbar my-2 my-sm-0">คลิกเพื่อซื้อสินค้า</a>
              </div>
              <div class="d-flex justify-content-center" style="margin-top: 5ex;">
                <a href="#buywhere" class="text-dark">วิธีสั่งซื้อ</a>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card shadow">
          <img src="https://cdn.discordapp.com/attachments/1042671731535523850/1047086746288017418/2.png" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h2 class="card-title text-c">PlayStation Plus Thai DIGITAL CODE (3 เดือน)</h2>
            <p class="text-price">650<span style="font-size: 3ex; color: var(--color-three)">฿</span></p>
            <p class="card-text">✅ ใช้ได้กับเฉพาะ ID PSN THAI เท่านั้น (ราคาเกมส์ต้องเป็น THB)</p>
            <p class="card-text">✅ สินค้ารับประกัน</p>
          </div>
          <div class="card-body card-p">
            <div class="row">
              <div class="d-flex justify-content-center">
              <!-- <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar my-2 my-sm-0">คลิกเพื่อซื้อสินค้า</a> -->
              <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar disabled my-2 my-sm-0">สินค้าหมด</a>
              </div>
              <div class="d-flex justify-content-center" style="margin-top: 5ex;">
                <a href="#buywhere" class="text-dark">วิธีสั่งซื้อ</a>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card shadow">
          <img src="https://cdn.discordapp.com/attachments/1042671731535523850/1047086774729584660/3.png" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h2 class="card-title text-c">Game Pass Ultimate พร้อม EA Play (2 เดือน)</h2>
            <p class="text-price">250<span style="font-size: 3ex; color: var(--color-three)">฿</span></p>
            <p class="card-text">✅ ใช้ได้เฉพาะบัญชีใหม่หรือบัญชีที่ไม่เคยใช้ GAME PASS มาก่อนเท่านั้น</p>
            <p class="card-text">✅ สินค้ารับประกัน</p>
          </div>
          <div class="card-body card-p">
            <div class="row">
              <div class="d-flex justify-content-center">
 <!-- <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar my-2 my-sm-0">คลิกเพื่อซื้อสินค้า</a> -->
 <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar disabled my-2 my-sm-0">สินค้าหมด</a>
              </div>
              <div class="d-flex justify-content-center" style="margin-top: 5ex;">
                <a href="#buywhere" class="text-dark">วิธีสั่งซื้อ</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5 d-grid gap-5">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card shadow">
          <img src="https://cdn.discordapp.com/attachments/1042671731535523850/1047086777908858890/4.png" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h2 class="card-title text-c">Game Pass Ultimate พร้อม EA Play (4 เดือน)</h2>
            <p class="text-price">449<span style="font-size: 3ex; color: var(--color-three)">฿</span></p>
            <p class="card-text">✅ สินค้าสามารถต่ออายุได้ (ต้องรอหมดอายุก่อนเท่านั้น)</p>
            <p class="card-text">✅ สินค้ารับประกัน</p>
          </div>
          <div class="card-body card-p">
            <div class="row">
              <div class="d-flex justify-content-center">
 <!-- <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar my-2 my-sm-0">คลิกเพื่อซื้อสินค้า</a> -->
 <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar disabled my-2 my-sm-0">สินค้าหมด</a>
              </div>
              <div class="d-flex justify-content-center" style="margin-top: 5ex;">
                <a href="#buywhere" class="text-dark">วิธีสั่งซื้อ</a>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card shadow">
          <img src="https://cdn.discordapp.com/attachments/1042671731535523850/1047086784149983252/5.png" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h2 class="card-title text-c">Game Pass Ultimate พร้อม EA Play (7 เดือน)</h2>
            <p class="text-price">729<span style="font-size: 3ex; color: var(--color-three)">฿</span></p>
            <p class="card-text">✅ สินค้าสามารถต่ออายุได้ (ต้องรอหมดอายุก่อนเท่านั้น)</p>
            <p class="card-text">✅ สินค้ารับประกัน</p>
          </div>
          <div class="card-body card-p">
            <div class="row">
              <div class="d-flex justify-content-center">
 <!-- <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar my-2 my-sm-0">คลิกเพื่อซื้อสินค้า</a> -->
 <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar disabled my-2 my-sm-0">สินค้าหมด</a>
              </div>
              <div class="d-flex justify-content-center" style="margin-top: 5ex;">
                <a href="#buywhere" class="text-dark">วิธีสั่งซื้อ</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card shadow">
          <img src="https://cdn.discordapp.com/attachments/1042671731535523850/1047086799937351720/6.png" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h2 class="card-title text-c">Game Pass Ultimate พร้อม EA Play (12 เดือน)</h2>
            <p class="text-price">1,050<span style="font-size: 3ex; color: var(--color-three)">฿</span></p>
            <p class="card-text">✅ สินค้าสามารถต่ออายุได้ (ต้องรอหมดอายุก่อนเท่านั้น)</p>
            <p class="card-text">✅ สินค้ารับประกัน</p>
          </div>
          <div class="card-body card-p">
            <div class="row">
              <div class="d-flex justify-content-center">
 <!-- <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar my-2 my-sm-0">คลิกเพื่อซื้อสินค้า</a> -->
 <a href="chat/login.php" target="_blank" rel="noopener noreferrer"class="btn btn-navbar disabled my-2 my-sm-0">สินค้าหมด</a>
              </div>
              <div class="d-flex justify-content-center" style="margin-top: 5ex;">
                <a href="#buywhere" class="text-dark">วิธีสั่งซื้อ</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="container">
    <p class="d-flex justify-content-center" style="font-size: 3ex;  font-weight: bold;">ทำไมคุณต้องซื้อกับเรา ?</p>
<div class="row">
  <div class="col-xl-3 col-sm-6 col-12"> 
    <div class="card">
      <div class="card-content">
        <div class="card-body" style="text-align: center;">
            <div class="align-self-center">
              <span class="material-symbols-outlined iconsize">
                shopping_bag
                </span>
            </div>
            <div class="media-body text-right">
              <h3>ผู้ใช้บริการ</h3>
              <span>สินค้าที่ถูกซื้อ 211 ชิ้น</span>
            </div>
          </div>   
    </div>
  </div>
    </div>

    <div class="col-xl-3 col-sm-6 col-12"> 
      <div class="card">
        <div class="card-content">
          <div class="card-body" style="text-align: center;">
              <div class="align-self-center">
                <span class="material-symbols-outlined iconsize">
                  check_circle
                  </span>
              </div>
              <div class="media-body text-right">
                <h3>รับประกัน</h3>
                <span>ประกันสินค้าทุกชิ้น 14 วัน</span>
              </div>
            </div>   
      </div>
    </div>
      </div>

    <div class="col-xl-3 col-sm-6 col-12"> 
      <div class="card">
        <div class="card-content">
          <div class="card-body" style="text-align: center;">
              <div class="align-self-center">
                <span class="material-symbols-outlined iconsize">
                  chat
                  </span>
              </div>
              <div class="media-body text-right">
                <h3>บริการหลังการขาย</h3>
                <span>สอบถามได้ทุกวัน 09.00-22.00 น.</span>
              </div>
            </div>   
      </div>
    </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body" style="text-align: center;">
                <div class="align-self-center">
                  <span class="material-symbols-outlined iconsize">
                    payments
                    </span>
                </div>
                <div class="media-body text-right">
                  <h3>ราคาสินค้า</h3>
                  <span>ID Minecraft , Game Pass ,อื่นๆ</span>
                </div>
              </div>   
        </div>
      </div>
        </div>
</div>
    </div>
    
    <img src="img/new.png" alt="" style="width: 100%; height: 40px; background-size: 100% 100%; top: 0;">
    <section>
      <div class="container">
        <!--Section: วิธีสั่ง-->
<section id="buywhere">
  <h3 class="text-center mb-4 pb-2 text-white fw-bold" style="margin-top: 5ex;">วิธีการสั่งซื้อสินค้า</h3>
  <p class="text-center mb-5 text-white">
    ดูตามคลิปวิดีโอได้เลย อย่าลืมพิมพ์ช่องค้นหาว่า MooYong
  </p>

  <div class="row">
    <iframe width="420" height="420" allowfullscreen="true"
    src="https://www.youtube.com/embed/55?autoplay=1&controls=1">
    </iframe>
  </div>
</section>
<!--Section: -->
        <div class='air air1'></div>
        <div class='air air2'></div>
        <div class='air air3'></div>
        <div class='air air4'></div>
      </div>
    </section>
  <button type="button" class="btn btn-floating btn-sm text-white" id="btn-back-to-top">
    <span class="material-symbols-outlined">keyboard_arrow_up </span>
  </button>
  <div class="footer">
  <div class="container">
<div class="row">
<p style="margin-top: 40px;">Copyright © 2022 Mooyong All rights reserved.</p>
</div>
  </div>
  </div>
</body>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });

    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    
    function al(){
      Swal.fire({
  icon: 'error',
  title: 'ขออภัย',
  text: 'เว็บไซต์ปิดปรับปรุงระบบ',
  confirmButtonColor: 'orangered'
})
    }
  </script>

</html>