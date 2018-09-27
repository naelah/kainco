<?php
	include("connection.php");
	include("functions.php");
	session_start();
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0)
	{
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:shoppingcart.php");
		exit();
	}
	
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
    <script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
	</script>
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
  </head>
  
  
  


<body class="booklist" id="to-top">



<!-- Sign In/Sign Up section -->
    <section class="edagang-section">

      <div class="container">

        <div class="row">
		

          <div class="col-md-12">

            <!-- Logo -->
            <figure class="text-center">
              <a href="./index.php">
                <img class="img-logo" src="images/logo.png" alt="">
              </a><br>
               </figure> <!-- /.text-center -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        
      <h4 class="text-white" color='white'><?php echo $_SESSION['NAME']; ?>&nbsp;<i class="fa fa-heart"></i></h4><br>   
        

<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>

<div align="center">
	
	<table border="0" cellpadding="2px" width="600px">
		<?php
			$result=mysql_query("select * from products where serial ='1'") or die("select * from products where serial ='1'"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
    	<tr>
        	<td><img src="<?php echo $row['picture']?>" /></td>
            <td>   	<b><h4>1. <?php echo $row['name']?></h4></b><br /><br />
            		<?php echo $row['description']?><br />
            		<?php echo $row['bottom']?><br /><br>
            		
                    <input class="btn-danger btn-lg" type="button" value="1 Minggu Siap!" onclick="addtocart( <?php echo $row['serial'] ?> )" />
                    <br>Harga Tempah: <big style="color:green">
                    	MYR 60</big><br /><br />
                <?php } 
			$result=mysql_query("select * from products where serial ='4'") or die("select * from products where serial ='4'"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result))
			{?>
              <input class="btn-danger btn-lg" type="button" value="2 Minggu Siap!" onclick="addtocart( <?php echo $row['serial'] ?> )" /> 
              <br>Harga Tempah: <big style="color:green">
                    	MYR 50</big><br /><br />    <?php } ?>  
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
    </table>
    
    
    
    
    
    <table border="0" cellpadding="2px" width="600px">
		<?php
			$result=mysql_query("select * from products where serial ='2'") or die("select * from products where serial ='2'"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
    	<tr>
        	<td><img src="<?php echo $row['picture']?>" /></td>
            <td>   	<b><h4>2. <?php echo $row['name']?></h4></b><br /><br />
            		<?php echo $row['description']?><br />
            		<?php echo $row['bottom']?><br /><br>
            		
                    <input class="btn-danger btn-lg" type="button" value="1 Minggu Siap!" onclick="addtocart( <?php echo $row['serial'] ?> )" />
                    <br>Harga Tempah: <big style="color:green">
                    	MYR 70</big><br /><br />
                <?php } 
			$result=mysql_query("select * from products where serial ='5'") or die("select * from products where serial ='5'"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result))
		{ ?>
              <input class="btn-danger btn-lg" type="button" value="2 Minggu Siap!" onclick="addtocart( <?php echo $row['serial'] ?> )" /> 
              <br>Harga Tempah: <big style="color:green">
                    	MYR 60</big><br /><br />      <?php } ?>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
    </table>
    
    
    
    
    <table border="0" cellpadding="2px" width="600px">
		<?php
			$result=mysql_query("select * from products where serial ='3'") or die("select * from products where serial ='3'"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result))
			{?>
    	<tr>
        	<td><img src="<?php echo $row['picture']?>" /></td>
            <td>   	<b><h4>3. <?php echo $row['name']?></h4></b><br /><br />
            		<?php echo $row['description']?><br />
            		<?php echo $row['bottom']?><br /><br>
            		
                    <input class="btn-danger btn-lg" type="button" value="1 Minggu Siap!" onclick="addtocart( <?php echo $row['serial'] ?> )" />
                    <br>Harga Tempah: <big style="color:green">
                    	MYR 90</big><br /><br />
                    	
                    	<?php } 
			$result=mysql_query("select * from products where serial ='6'") or die("select * from products where serial ='6'"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result))
		{ ?> 
              <input class="btn-danger btn-lg" type="button" value="2 Minggu Siap!" onclick="addtocart( <?php echo $row['serial'] ?> )" /> 
              <br>Harga Tempah: <big style="color:green">
                    	MYR 80</big><br /><br />     <?php } ?>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        
    </table>
    
    
    
     <div class="row">
		<div class="col-md-12">
			<section class="footer-copyright text-center">
				<p>Dijahit dengan <i class="fa fa-heart"></i> oleh Kain Co.</p>
 			</section> <!-- /.footer-section -->
		</div> <!-- /.col-md-12 -->
	</div> <!-- /.row -->
    
    
    
    
</div> <!-- /.col-md-3 -->
</div> <!-- /.row -->
</section> <!-- /.sign-in-up-content -->
</body>
</html>
