<?php 
 session_start(); 
 ?>
 
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
    <section class="booklist-section">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Logo -->
            <figure class="text-center">
              <a href="./index.php">
                <img class="img-logo" src="images/logo.png" alt="">
              </a>
            </figure> <!-- /.text-center -->
            
            <h4 class="text-white" color='white'>Selamat Datang, <?php echo $_SESSION['NAME']; ?>!</h4>
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

        <section class="sign-in-up-content">

          <div class="row">

            <div class="col-md-12">

              
			 
			  <div class="text-center"">
			  <br>Ukuran Polar Anda: </div>
			  <div class="row">
			  
			  
<center><table>
<col><col>
<thead>
<tr><th>Bahagian <th>Cm &nbsp;
</thead>
<tbody>


<?php

$connect = mysqli_connect("mysql2.000webhost.com","a7085228_kainco","Kainco456","a7085228_kainco");
$email = $_SESSION['EMAIL'];
if (mysqli_connect_errno($connect))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "select bh, kk, pt, ll, da, pi, pb, pu, lb, bd, bp, lk from polar 
WHERE email = '$email' AND pol_id = (SELECT max(pol_id) FROM polar 
WHERE email = '$email')";
$result = mysqli_query($connect, $sql);


  while($data = mysqli_fetch_row($result))
  {
    echo("<tr><td>&nbsp;Bahu <td>$data[0]
<tr><td>&nbsp;Keliling Ketiak <td>$data[1]
<tr><td>&nbsp;Pergelangan Tangan &nbsp;<td>$data[2]
<tr><td>&nbsp;Labuh Lengan Baju <td>$data[3]
<tr><td>&nbsp;Dada <td>$data[4]
<tr><td>&nbsp;Pinggang Kain<td>$data[5]
<tr><td>&nbsp;Pinggang Baju<td>$data[6]
<tr><td>&nbsp;Punggung <td>$data[7]
<tr><td>&nbsp;Labuh Baju <td>$data[8]
<tr><td>&nbsp;Bahu ke Dada <td>$data[9]
<tr><td>&nbsp;Bahu ke Pinggang <td>$data[10]
<tr><td>&nbsp;Labuh Kain <td>$data[11]");
  }			 
?>
</tbody>
</table><c/enter><BR><BR>

			  
			<p> <a class="btn-danger btn-lg" href="products.php">
            <img width="180" src="images/btn-app-tempah.png" alt="">
            </a></p><br>
		   
		    <p><a class="btn-danger btn-lg" href="newmeasure2.php">
            <img width="180" src="images/btn-app-ukur.png" alt="">
            </a></p>
			
		
			
			  </div>
			  </div>
        
            </div> <!-- /.col-md-12 -->

          </div> <!-- /.row -->
          
        </section> <!-- /.sign-in-up-content -->



        <div class="row">

          <div class="col-md-12">

            <section class="footer-copyright text-center">

              <p>Hakcipta Terpelihara <i class="fa fa-heart"></i> Kain Co</p>
              
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
