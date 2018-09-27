
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
    <script type="text/javascript">
    
    
    
    
    
function validateForm()
{
var a=document.forms["reg"]["email"].value;
var b=document.forms["reg"]["name"].value;
var c=document.forms["reg"]["password"].value;
var d=document.forms["reg"]["address"].value;
var e=document.forms["reg"]["contact"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("Email must be filled out");
  return false;
  }
  
  if (a==null || a=="")
  {
  alert("Email must be filled out");
  return false;
  }
  
if (b==null || b=="")
  {
  alert("Name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Password must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }

}
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

              <h4 class="text-center">Cipta Akaun Anda</h4>

              <form class="sign-in-up-form" name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
              
            <?php 
            
          
            
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Isikan maklumat anda.';
		}
		if ($remarks=='success')
		{
		echo 'Pendaftaran berjaya.';
		}
		?>
                <br><br>
            
                <!-- Input 2 -->
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Emel"/>
                </div> <!-- /.form-group -->

                <!-- Input 3 -->
                <div class="form-group">
                  <input class="form-control" id="password" name="password" type="text" placeholder="Kata laluan"/>
                </div> <!-- /.form-group -->
                
                <!-- Input 1 -->
                <div class="form-group">
                  <input class="form-control" id="name" name="name" type="text" placeholder="Nama Penuh"/>
                </div> <!-- /.form-group -->

                
                <!-- Input 4 -->
                <div class="form-group">
                  <input class="form-control" id="contact" name="contact" type="text" placeholder="Nombor Telefon"/>
                </div> <!-- /.form-group -->
                
                <!-- Input 5 -->
                <div class="form-group">
                  <input class="form-control" id="address" name="address" type="text" placeholder="Alamat Rumah"/>
                </div> <!-- /.form-group -->
                

                

                <!-- Button -->
                <input class="btn btn-success btn-block" name="submit" type="submit"
                value="Daftar">
	

               <br><br>

                <!-- Sign In/Sign Up links -->
                <section class="sign-in-up-links text-center">
                  <p>Sudah berdaftar? <a href="login.php">Log masuk di sini</a></p>
                </section> <!-- /.sign-in-up-links -->
                
              </form> <!-- /.sign-in-up-form -->
              
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