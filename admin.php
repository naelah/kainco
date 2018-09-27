


<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
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
  
  
  	<body class="sign-in-up" id="to-top">




    <!-- Sign In/Sign Up section -->
    <section class="edagang-section">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Logo -->
            <figure class="text-center">
              <a href="./index.php">
                <img class="img-logo" src="images/logo.png" alt="">
              </a>
              <a class="btn-danger btn-bk" href="./index.php">
     <br><img width="180" src="images/checkout.png" alt="">
              </a>
            </figure> <!-- /.text-center -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->




       <br><br> <section class="edagang-content">

          <div class="row">

            <div class="col-md-12">

<h4 class="text-center">Klien</h4><center><table><thead>
<tr><th>&nbsp;&nbsp;&nbsp;ID Klien&nbsp;<th>&nbsp;Tarikh&nbsp; <th>&nbsp;Emel&nbsp;<th>&nbsp;Kata Laluan&nbsp;
<th>&nbsp;Nama&nbsp;<th>&nbsp;Telefon&nbsp;<th>&nbsp;Alamat&nbsp;&nbsp;&nbsp;</thead>
<tbody>


<?php

$connect = mysqli_connect("mysql2.000webhost.com","a7085228_kainco","Kainco456","a7085228_kainco");
if (mysqli_connect_errno($connect))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "select mem_id, date, email, password, name, contact, address from member group by mem_id desc";
$result = mysqli_query($connect, $sql);


  while($data = mysqli_fetch_row($result))
  {
    echo("<tr><td>&nbsp;&nbsp;<center>$data[0]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[1]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[2]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[3]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[4]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[5]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[6]</center>&nbsp;&nbsp;</td></tr>");
  }
?>

</tbody>
</table>
</center>

              
              
              
              
<h4 class="text-center">Polar</h4><center><table><thead>
<tr><th>&nbsp;&nbsp;ID Polar &nbsp;<th>&nbsp;Emel&nbsp; <th>&nbsp;Tarikh&nbsp;
<th>&nbsp;BH&nbsp;<th>&nbsp;KK&nbsp;<th>&nbsp;PT&nbsp;<th>&nbsp;LL&nbsp;
<th>&nbsp;DA&nbsp;<th>&nbsp;PI&nbsp;<th>&nbsp;PB&nbsp;<th>&nbsp;PU&nbsp;
<th>&nbsp;LB&nbsp;<th>&nbsp;BD&nbsp;<th>&nbsp;BP&nbsp;<th>&nbsp;LK&nbsp;&nbsp;&nbsp;
</thead>
<tbody>


<?php


$sql = "SELECT * FROM polar";
$result = mysqli_query($connect, $sql);


  while($data = mysqli_fetch_row($result))
  {
    echo("<tr><td>&nbsp;&nbsp;<center>$data[0]</center>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[1]&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[2]</center>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[3]&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;$data[4]&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[5]&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;$data[6]&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[7]&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;$data[8]&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[9]&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;$data[10]&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[11]&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;$data[12]&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[13]&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;$data[14]&nbsp;&nbsp;</td></tr>");
  }
?>

</tbody>
</table>
</center>

              
              
              
              
  
  
  
<h4 class="text-center">Order</h4><center><table><thead>
<tr><th>&nbsp;&nbsp;Order ID &nbsp;<th>&nbsp;Tarikh&nbsp; <th>&nbsp;Klien ID&nbsp;
<th>&nbsp;Bukti Bayar&nbsp;<th>&nbsp;Gambar&nbsp;&nbsp;
</thead>
<tbody>

<?php

$sql = "SELECT * FROM orders group by serial desc";
$result = mysqli_query($connect, $sql);

  while($data = mysqli_fetch_row($result))
  { 
    echo("<tr><td>&nbsp;&nbsp;<center>$data[0]</center>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;<center>$data[1]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[2]</center>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[3]&nbsp;&nbsp;</td>
    <td><img src='uploads/$data[4]'</td></tr>");
  }
?>

</tbody>
</table>
</center>







<h4 class="text-center">Order Info</h4><center><table><thead>
<tr><th>&nbsp;&nbsp;Order ID &nbsp;<th>&nbsp;Produk ID&nbsp; <th>&nbsp;Kuantiti&nbsp;
<th>&nbsp;Harga (RM)&nbsp;&nbsp;&nbsp;
</thead>
<tbody>


<?php


$sql = "SELECT * FROM order_detail group by orderid desc";
$result = mysqli_query($connect, $sql);


  while($data = mysqli_fetch_row($result))
  {
    require 'connection.php';
	$dirname = "images/";
	$images = glob($dirname.$data[3]);  
    echo("<tr><td>&nbsp;&nbsp;<center>$data[0]</center>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;<center>$data[1]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[2]</center>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[3]&nbsp;&nbsp;</td></tr>");
  }
?>

</tbody>
</table>
</center>
        
        
<h4 class="text-center">Produk</h4><center><table><thead><tr><th>&nbsp;&nbsp;Produk ID
<th>&nbsp;&nbsp;Nama &nbsp;<th>&nbsp;Tempoh (Minggu)&nbsp; <th>&nbsp;Harga (RM)&nbsp;&nbsp;&nbsp;
</thead>
<tbody>


<?php


$sql = "SELECT serial, name, duration, price FROM products";
$result = mysqli_query($connect, $sql);


  while($data = mysqli_fetch_row($result))
  {
    
    echo("<tr><td>&nbsp;&nbsp;<center>$data[0]</center>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;<center>$data[1]</center>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<center>$data[2]</center>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;$data[3]&nbsp;&nbsp;</td></tr>");
  }
?>

</tbody>
</table>
</center>        
              
            </div> <!-- /.col-md-12 -->

          </div> <!-- /.row -->
          
        </section> <!-- /.sign-in-up-content -->




        <div class="row">

          <div class="col-md-12">

            <section class="footer-copyright text-center">

              <p>Dijahit dengan <i class="fa fa-heart"></i> oleh Kain Co.</p>
              
            </section> <!-- /.footer-section -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        
      </div> <!-- /.container -->

    </section> <!-- /.sign-in-up-section -->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>
  </body>
</html>
