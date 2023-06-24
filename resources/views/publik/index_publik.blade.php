<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bakso</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="{{asset('Template_publik/img/favicon.ico')}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{asset('Template_publik/img/apple-touch-icon.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('Template_publik/img/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('Template_publik/img/apple-touch-icon-114x114.png')}}">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('Template_publik/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Template_publik/fonts/font-awesome/css/font-awesome.css')}}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{asset('Template_publik/css/style.css')}}">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#features" class="page-scroll">Specials</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
        <li><a href="#team" class="page-scroll">Owner</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Bakso Prapatan</h1>
            <p>Reservations: +62 858-6655-5560</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Features Section -->
<div id="features" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Our Specials</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Bakso</h3>
          <img src="{{asset('Template_publik/img/bakso3.jpg')}}" class="img-responsive" alt="">
          <p>Bakso adalah jenis bola daging yang lazim ditemukan pada masakan Indonesia. Bakso umumnya dibuat dari campuran daging sapi giling dan tepung tapioka, 
            tetapi ada juga bakso yang terbuat dari daging ayam, ikan, udang bahkan daging kerbau.</p>
            <div class="text-center">
              <a href="{{ $produk->link }}" class="btn btn-success mt-3"><i class="fa fa-whatsapp"></i> Order now</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Mie Ayam</h3>
          <img src="{{asset('Template_publik/img/Pic-1.jpg')}}" class="img-responsive" alt="">
          <p>Mi ayam adalah hidangan khas Indonesia yang terbuat dari mi gandum yang dibumbui dengan daging ayam yang biasanya dipotong dadu. 
            Hidangan ini banyak terpengaruh dengan teknik penyajian kuliner yang digunakan dalam hidangan Tionghoa.</p>
            <div class="text-center">
              <a href="{{ $produk->link }}" class="btn btn-success mt-3"><i class="fa fa-whatsapp"></i> Order now</a>
          </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Minuman</h3>
          <img src="{{asset('Template_publik/img/drink.jpg')}}" class="img-responsive" alt="">
          <p>Di toko kami menyediakan berbagai macam Minuman, baik minuman dingin,panas dan hangat, tetapi paling banyak orang menggemari minuman yang bernama Es Teh Manis.</p>
          <div class="text-center">
            <a href="{{ $produk->link }}" class="btn btn-success mt-3"><i class="fa fa-whatsapp"></i> Order now</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-6 about-img"> </div>
      <div class="col-xs-12 col-md-3 col-md-offset-1">
        <div class="about-text">
          <div class="section-title">
            <h2>Our Story</h2>
          </div>
          <p>Sejarah berdirinya UMKM Bakso Prapatan Mas Nur sejak 2012 sampai dengan sekarang.</p>
          <p>Berawal dari menjadi karyawan di kedai bakso orang sampai akhirnya mendirikan usahanya sendiri. UMKM Bakso Prapatan beralamatkan di Jl. Raya Pd. Aren No. 72, Jurang Mangu Barat, Kec. Pd. Aren, Kota Tangerang Selatan, Banten. Bakso Prapatan Mas Nur menjual berbagai macam jenis bakso, mie ayam dan minuman yang sangat bervariasi.  Sehingga banyak diminati oleh banyak orang khusunya kalangan anak remaja. 
            Bakso Prapatan Mas Nur ini didirikan dan dikepalai oleh bapak Slamet Barokah sebagai Pemiliknya. </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="container">
    <div class="section-title text-center">
      <h2>Menu</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
            <h2 class="menu-section-title">{{ $kategori_minuman->nama_kategori }}</h2>
            @foreach ($produk_minuman as $item)
                <div class="menu-item">
                    <div class="menu-item-name">{{ $item->nama_produk }}</div>
                    <div class="menu-item-price">Rp{{ $item->harga }}</div>
                    <div class="menu-item-description">{{ $item->deskripsi }}</div>
                </div>
            @endforeach
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
            <h2 class="menu-section-title">{{ $kategori_bakso->nama_kategori }}</h2>
            @foreach ($produk_bakso as $item)
                <div class="menu-item">
                    <div class="menu-item-name">{{ $item->nama_produk }}</div>
                    <div class="menu-item-price">Rp{{ $item->harga }}</div>
                    <div class="menu-item-description">{{ $item->deskripsi }}</div>
                </div>
            @endforeach
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
            <h2 class="menu-section-title">{{ $kategori_mieayam->nama_kategori }}</h2>
            @foreach ($produk_mieayam as $item)
                <div class="menu-item">
                    <div class="menu-item-name">{{ $item->nama_produk }}</div>
                    <div class="menu-item-price">Rp{{ $item->harga }}</div>
                    <div class="menu-item-description">{{ $item->deskripsi }}</div>
                </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="{{asset('Template_publik/img/bakso2.png')}}" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="{{asset('Template_publik/img/Pic-1.jpg')}}" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="{{asset('Template_publik/img/bakso.jpg')}}" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="{{asset('Template_publik/img/drink.jpg')}}" class="img-responsive" alt=""></div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team">
  <div class="container">
    <div id="row">
      <div class="col-md-6">
        <div class="col-md-10 col-md-offset-1">
          <div class="section-title">
            <h2>Owner</h2>
          </div>
          <p>Bapak Slamet Barokah adalah owner dari UMKM Bakso Prapatan ini, ia berumur 32 Tahun dan sudah memulai bisnis Bakso dari tahun 2008 Sampai sekarang ini.</p>
          <p>Pak Slamet berasal dari orang tua yang berprofesi sebagai petani di daerah jepara, sampai ia meiliki kemauan dan Motivasi untuk membangun bisnis Bakso Yang lumayan sukses sampai sekarang ini.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="team-img"><img src="{{asset('Template_publik/img/owner.jpeg')}}" alt="..."></div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Reservations</h3>
      <div class="contact-item">
        <p>Please call</p>
        <p>+62 858-6655-5560</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p>Jl. Raya Pd. Aren No. 72, Jurang Mangu Barat,</p>
        <p>Kec. Pd. Aren, Kota Tangerang Selatan, Banten.</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Buka Setiap Hari</p>
        <p>10:00 AM - 10:00 PM</p>
      </div>
    </div>
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.87485850166502!2d106.71770401323325!3d-6.264026498108585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbdaf0f26fdd%3A0xd20dda1482ad85a5!2sBakso%20Mas%20Nur%20Prapatan!5e0!3m2!1sid!2sid!4v1686203519331!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-6">
      <p>&copy; 2023 Bakso Prapatan. All rights reserved. Design by Haidar</p>
    </div>
    <div class="col-md-6">
      <div class="social">
        <ul>
          <li><a href="https://web.facebook.com/newshem.putra.5"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://wa.me/6285866555560?text=Halo,%20Selamat%20Datang%20di%20Whatsapp%20Bakso%20Prapatan%20Mas%20Nur"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('Template_publik/js/jquery.1.11.1.js')}}"></script> 
<script type="text/javascript" src="{{asset('Template_publik/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('Template_publik/js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{asset('Template_publik/js/jqBootstrapValidation.js')}}"></script> 
<script type="text/javascript" src="{{asset('Template_publik/js/contact_me.js')}}"></script> 
<script type="text/javascript" src="{{asset('Template_publik/js/main.js')}}"></script>
</body>
</html>
