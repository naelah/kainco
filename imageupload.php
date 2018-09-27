
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
    <script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function() 
{ 
$('#photoimg').live('change', function() 
{ 
$("#preview").html('');
$("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
$("#imageform").ajaxForm(
{
target: '#preview'
}).submit();
});
}); 
</script> 
  </head>
  <body class="sign-in-up" id="to-top">
  

    <!-- Sign In/Sign Up section -->
    <section class="sign-in-up-section">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Logo -->
            <figure class="text-center">
              <a href="./index.php">
                <img class="img-logo" src="images/logo.png" alt="">
              </a>
            </figure> <!-- /.text-center -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->


<section class="sign-in-up-content">

          <div class="row">

            <div class="col-md-12">


 <?php
session_start();
$con = mysqli_connect("mysql2.000webhost.com","a7085228_kainco","Kainco456","a7085228_kainco");
   
   $payment = $_POST['payment'];
   
   if($payment == 'whatsapp')
	{
	$mem_id = $_SESSION['MEM_ID'];
	$query2 = "UPDATE orders SET payment = 'Whatsapp' WHERE mem_id = '$mem_id' ORDER BY serial DESC LIMIT 1";
   	$result=mysql_query($query2);
   	
   	if($result)
   	{
   	echo "Transaksi berjaya!";
   	}
   	
   	else
   	{
   	echo "Transaksi tidak berjaya. Maaf.";
   	}
   	
	}
	
	else if($payment == 'website')
	{
	$mem_id = $_SESSION['MEM_ID'];
	$query2 = "UPDATE orders SET payment = 'Website' WHERE mem_id = '$mem_id' ORDER BY serial DESC LIMIT 1";
    $result=mysql_query($query2);
	
	

$path = "uploads/";

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
	$name = $_FILES['photoimg']['name'];
	$size = $_FILES['photoimg']['size'];
	
	if(strlen($name))
	{
		list($txt, $ext) = explode(".", $name);
		
		if(in_array($ext,$valid_formats))
		{
		
			if($size<(1024*1024)) // Image size max 1 MB
			{
				$actual_image_name = time().$session_id.".".$ext;
				$tmp = $_FILES['photoimg']['tmp_name'];
		
				if(move_uploaded_file($tmp, $path.$actual_image_name))
				{
					$mem_id = $_SESSION['MEM_ID'];
					mysqli_query($con, "UPDATE orders SET image='$actual_image_name' WHERE mem_id = '$mem_id' ORDER BY serial DESC LIMIT 1");
				}
				
				else
				echo "Transaksi gagal.";
			}
		else
		echo "Gambar melebihi 1MB."; 
		}

	else
	echo "Format gambar tidak boleh diterima."; 
	}
else
echo "Sila pilih gambar.";
exit;
}
}

?>
			 
			  
		
    
			  
			  <form class="sign-in-up-form" action="billing.php" role="form">
                
                
                <!-- Button -->
                <button class="btn btn-success btn-block" type="submit">Kembali</button>

               </section> <!-- /.sign-in-up-links -->
                
              </form> <!-- /.sign-in-up-form -->
			</div>

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




