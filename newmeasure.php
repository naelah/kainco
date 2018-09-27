<?php 
 session_start(); 
 ?>

<!DOCTYPE html>


<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->


<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    

<html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> 

<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 

<html lang="en"> 

<!--<![endif]-->
  <head>

    

<!-- Meta -->
    <meta charset="utf-8">
    

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    

<meta name="description" content="">
    <meta name="keywords" content="">
    

<meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    



<!-- Title -->
    <title>Kain Co</title>

    



<!-- Templates core CSS -->
    <link href="stylesheets/application.css" rel="stylesheet">

    



<!-- Favicons -->
    <link href="images/favicon/favi.png" rel="shortcut icon">
    <link href="images/favicon/a57.png" rel="apple-touch-icon">
    <link href="images/favicon/a72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/a144.png" rel="apple-touch-icon" sizes="144x144">

    

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      

<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    



<!-- Modernizr Scripts -->
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
  

</head>
  



<body class="index" id="to-top">

    



<!-- Side nav -->
    <nav class="side-nav" role="navigation">

      

<ul class="nav-side-nav">

<li><a class="tooltip-side-nav" href="#to-top" title="" data-original-title="Utama" data-placement="left"> </a></li>



<li><a class="tooltip-side-nav" href="#section-2" title="" data-original-title="Proses" data-placement="left"></a></li>
        

      
    </nav> 



<!-- /.side-nav -->




    <!-- Jumbotron -->
    

<header class="jumbotron" role="banner">

      

<div class="container">

        

<div class="row">

          



<!-- Logo -->
            

<figure class="text-center">
<img class="img-logo" src="images/logo.png" width="50" height="50" alt="">
</figure> <!-- /.text-center -->

            <!-- Title -->
            

            <!-- Sub title -->
            
<br>
<p>Selamat Datang,  
<br>
<?php echo $_SESSION['NAME']; ?>!
<br>
<font color="#FFFFFF"><h3>
<script type="text/javascript">
var d=new Date()
var weekday=new Array("Ahad","Isnin","Selasa","Rabu","Khamis","Jumaat","Sabtu")
var monthname=new Array("Januari","Februari","Mac","April","Mei","Jun","Julai","Ogos","September","Oktober","November","Disember")
document.write(weekday[d.getDay()] + ", ")
document.write(d.getDate() + " ")
document.write(monthname[d.getMonth()] + " ")
document.write(d.getFullYear())
</script></h3></font>

            



<!-- Button -->
 

<p class="btn-app-store">
   <a class="btn-danger btn-lg" href="./register.php">Daftar Masuk</a>
   
   <a class="btn-danger btn-lg" href="./edagang.html">
     <img width="180" src="images/btn-app-store.png" alt="">
              </a>
            </p> 

<a href = "login.php" ><font color = "#FFFFFF">Pengguna Berdaftar?</font></a>

<!-- /.btn-app-store -->

          
        </div> 

<!-- /.row -->
        
      </div> 

<!-- /.container -->

    </header> 

<!-- /.jumbotron -->




  



<!-- Features -->
<section class="features-section" id="section-2">
<div class="container">
<div class="row">


<div class="col-md-7 col-features features-content">
<!-- Title -->
            <h1 id="title-1">Proses Tempahan e-Jahit</h1><br>

            <!-- Description -->
            <p>
<h3>Tempahan ￼ >￼ Pola / paten ￼ >￼ Potongan ￼ >￼ Jahitan ￼￼>  Penghantaran</h3><br>
<p><h3>Tempahan</h3>
Bermulanya tempoh jahit pakaian anda adalah tertakluk kepada penerimaan tempahan atas talian (online) secara lengkap, penerimaan kain sekiranya anda memilih untuk menghantar kain sendiri dan pembayaran penuh tempahan.
<br><p><h3>Pola / paten</h3>
Ukuran yang anda masukkan perlu diproses untuk penghasilan pola / paten khusus dan eksklusif untuk diri anda sahaja. Caj sebanyak RM 10 dikenakan untuk setiap pola / paten baru.
Sekiranya anda memilih untuk menggunakan ukuran lazim kami, tiada caj pola / paten ikenakan. Untuk tempahan anda yang seterusnya, tiada caj pola / paten akan dikenakan sekiranya anda menggunakan pola / paten anda yang sedia ada.
<br><p><h3>Potongan</h3>
Pola / paten yang tersedia akan disusun di atas kain secara berkomputer untuk memastikan kain anda mencukupi untuk dipotong. Sekiranya tidak mencukupi, kami akan menghubungi anda untuk tindakan selanjutnya. Oleh itu, pastikan ukuran anda dengan tepat ketika membuat tempahan di Kain Co. e-Jahit. Kami ada menyediakan sistem berkomputer untuk memastikan berapa ukuran kain yang diperlukan secara hitungan kasar.
<br><p><h3>Jahitan</h3>
Mesin jahit industri berkualiti tinggi digunakan untuk memastikan jahitan yang kemas dan selesa untuk pelanggan kami. Tempoh jahitan juga mungkin berkurang atau bertambah sekiranya terdapat perkara yang mengganggu tempoh asal jahit dan kami akan memaklumkan anda untuk tindakan lanjut.
<br><p><h3>Penghantaran</h3>
Pakaian yang siap akan dibungkus dengan kemas dan dihantar kepada anda ke alamat yang didaftarkan dengan kami.
Penghantaran adalah percuma dan kami menggunakan POSLAJU sebagai ejen penghantaran.</p>
<br><br>
</div> 
<!-- /.col-md-7 -->
</div> 
<!-- /.row -->
</div> <!-- /.container -->
</section> <!-- /.features-section -->



<script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    



<script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>
  </body>
</html>
