<?php
	//Start session
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


<li><a class="tooltip-side-nav" href="#section-1" title="" data-original-title="Pengenalan" data-placement="left"></a></li>
        

<li><a class="tooltip-side-nav" href="#section-2" title="" data-original-title="Proses" data-placement="left"></a></li>
        

<li><a class="tooltip-side-nav" href="#section-3" title="" data-original-title="Pertanyaan" data-placement="left"></a></li>
    
      
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
            
    
<h1>Selamat Datang ke Kain Co!</h1>

            <!-- Sub title -->
            
<br>
<p>Kedai jahit pakaian atas <?php echo $_SESSION['name']; ?>  talian (online).
<br>
Tempahan dan ukuran, segalanya dilakukan di sini!
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

</p>

            



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




    

<!-- Services -->
    

<section class="services-section" id="section-1">

<div class="container">

<div class="row">
  <h1>Pengenalan e-Jahit</h1>
  


<div class="col-md-13 col-services">                    
 <!-- Icons -->
<figure>
<img class="img-services" src="images/icons/signup.png" alt="">
</figure>
<!-- Title -->
            <h4>1. Daftar atau Log Masuk</h4>
<!-- Description -->
<p>Untuk rekod ukuran, pembayaran dan alamat penghantaran.</p>
</div> 

<!-- /.col-md-4 -->

          

<div class="col-md-13 col-services">
<!-- Icons -->
<figure>            
<img class="img-services" src="images/icons/addtocart.png" alt="">
</figure>
<!-- Title -->
<h4>2. Pilih Jenis Baju</h4>
<!-- Description -->
<p>Baju kurung biasa, baju kurung pahang, baju kurung moden.</p>
</div> <!-- /.col-md-4 -->

          

<div class="col-md-13 col-services">
<!-- Icons -->
<figure>
<img class="img-services img-margin" src="images/icons/basket.png" alt="">
</figure>
<!-- Title -->
<h4>3. Beli atau Hantar Kain</h4>
<!-- Description -->
<p>Pembelian terus dari <a href="edagang.html">e-Dagang</a> kami atau POSLAJU kain anda kepada kami.</p>
</div> 

<div class="col-md-13 col-services">
<!-- Icons -->
<figure>
<img class="img-services img-margin" src="images/icons/measurement.png" alt="">
</figure>
<!-- Title -->
<h4>4. Ukuran</h4>
<!-- Description -->
<p>Anda beri ukuran sendiri atau menggunakan ukuran lazim kami. 
Setiap ukuran sendiri akan direkodkan untuk tempahan seterusnya.
Ukuran lazim kami hanya akan diperolehi setelah anda mendaftar.</p>
</div> 

<div class="col-md-13 col-services">
<!-- Icons -->
<figure>
<img class="img-services img-margin" src="images/icons/payment.png" alt="">
</figure>
<!-- Title -->
<h4>5. Bayaran</h4>
<!-- Description -->
<p>Bayaran boleh dilakukan atas talian (online) atau di CIMB Bank berdekatan anda. 
Resit pembayaran boleh dihantar melalui emel atau Whatsapp Kain Co.
Tempahan hanya akan diproses setelah penerimaan kain dan bayaran penuh.</p>
</div> 

<div class="col-md-13 col-services">
<!-- Icons -->
<figure>
<img class="img-services img-margin" src="images/icons/done.png" alt="">
</figure>
<!-- Title -->
<h4>6. Pakai</h4>
<!-- Description -->
<p>Tempoh jahitan dijangka dalam masa 5 ke 7 hari. Kepuasan hati anda keutamaan kami!</p>
</div> 



<!-- /.col-md-4 -->
          
</div> <!-- /.row -->
        
</div> 
<!-- /.container -->
      
</section> 
<!-- /.services-section -->




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




    <!-- Subscribe -->
    <section class="subscribe-section" id="section-3">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Title -->
            <h2>Sebarang pertanyaan boleh diajukan di sini:</h2>

            <!-- Subscribe form -->
            <div class="row">

              <div class="col-md-6 col-md-offset-3 col-subscribe">

         


<!-- /.subscribe-form -->



                



<section class="subscribe-description">

                  

<p><h3><font color="white">+60 17-313 4899</font></h3></p>
                  
                </section> 



<!-- /.subscribe-description -->
                
              </div> 

<!-- /.col-md-6 -->

            </div> 

<!-- /.row -->
            
          </div> 

<!-- /.col-md-12 -->
          
        </div> 

<!-- /.row -->

      </div> 

<!-- /.container -->

    </section> 

<!-- /.subscribe-section -->




    

<!-- Footer -->
    <footer class="footer-section" role="contentinfo">

      



<div class="container">

        

<div class="row">

          

<div class="col-md-4 col-footer">
            
            



<!-- Footer 1 -->
            

<section>
              

<p>Hakcipta Terpelihara

<i class="fa fa-heart"></i> Kain Co</p>
            </section>

            



<!-- AddThis Button -->
            <ul class="addthis_toolbox addthis_default_style">

              <li>



<a class="addthis_button_facebook_like"></a></li>
              

<li><a class="addthis_button_tweet"></a></li>

            </ul> 



<!-- /.addthis_toolbox -->
            

<script>var addthis_config = {"data_track_addressbar":true};</script>
            

<script src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-533f6ac03b59c72a"></script>

          </div> 



<!-- /.col-md-4 -->

          

<div class="col-md-4 col-footer col-padding">
            
            



<!-- Footer 1 -->
            




            <!-- Social media links -->
            <ul class="social-media-links">

              <li><a class="fa fa-twitter tw" href="https://twitter.com/share" data-text="Gocheck" data-lang="en"></a></li>
              <li><a class="fa fa-facebook fb" href="https://www.facebook.com/kainco.com.my"></a></li>
              
            </ul> <!-- /.social-media-links -->

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p><strong>Kain Co</strong> <br>No. 11-1 Jalan PJS8/11, Dataran Mentari,<br>
             Bandar Sunway, 46150, Petaling Jaya, <br>Selangor, Malaysia.<br><br>kainco@gmail.com</p>
            </section>

          </div> <!-- /.col-md-4 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </footer> <!-- /.footer-section -->

    <!-- Placed at the end of the document so the pages load faster -->
    



<script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    



<script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>
  </body>
</html>
