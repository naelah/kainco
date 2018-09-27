<?php
	
	include("connection.php");
	include("functions.php");
	session_start();
	
		$id = $_SESSION['MEM_ID'];
		$result="insert into orders (serial, date, mem_id) values ('', now(),'$id')";
		$qry=mysql_query($result);
		
		$orderid=mysql_insert_id();
		$max=count($_SESSION['cart']);
		$_SESSION['ORDERID'] = $orderid;
		for($i=0;$i<$max;$i++)
		{
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			$query2="insert into order_detail values ($orderid,$pid,$q,$price)";
			$qry2=mysql_query($query2);
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

    
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
  
  
  
<script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
	}
</script>


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


<body class="booklist" id="to-top">
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

<section class="booklist-content">
<div class="row">
<br>
	<div align="center">
        
        <h3><b>Jumlah &nbsp;:&nbsp;MYR <?php echo $_SESSION['TOTAL']; ?></b></h3><br><br>
        <h4>1. Buat pembayaran ke akaun di bawah:</h4><br>
        <table><tr><td>&nbsp;Bank&nbsp;</td><td>&nbsp;Nama&nbsp;</td>
        <td>&nbsp;No. Telefon&nbsp;</td><td>&nbsp;No. Akaun&nbsp;</td></tr>
        <tr><td>&nbsp;CIMB&nbsp;<td><b>&nbsp;Reza Mohd Rashid&nbsp;</b>
        <td>&nbsp;017-2196364&nbsp;<td><b>&nbsp;8600132248&nbsp;</b></tr></table><br>
        
        <h4>2. Muat naik bukti pembayaran:</h4><br>
        
        <form id="imageform" action="imageupload.php" method="post" enctype="multipart/form-data">
        
    	<select name="payment" id="payment" class="form-control" data-original-title="Sila pilih kaedah pembayaran yang telah anda lakukan">
        <option value="SELECT">Sila pilih kaedah</option>                                
        <option name="whatsapp" value="whatsapp">Whatsapp</option>
        <option name="website" value="website">Muat naik gambar di bawah</option>
        </select><br><br>
     
		Muat Naik Gambar <br><input type="file" name="photoimg" id="photoimg" />
		

		<br><br>
		
		<input class="btn-danger btn-xs" type="reset" value="Isi Semula" />
		<input class="btn-danger btn-xs" type="submit" value="Hantar" />
		</fieldset>
		</form><br><br>


<h4>4. Poskan kain anda ke alamat:</h4><br>
<p>No. 11-1 Jalan PJS8/11, Dataran Mentari,
<p>Bandar Sunway, 46150, Petaling Jaya, 
<p>Selangor, Malaysia.</b>
<br><br>

<h4>5. Nantikan mesej!</h4><br>
<p>Kain Co akan menghubungi anda
<p>melalui teks mesej setelah
<p>kain yang anda pos sampai kepada pihak kami.</b>



	</div> <!-- /.align-center-->

</div> <!-- /.row -->
</section> <!-- /.sign-in-up-content -->


 <div class="row">
		<div class="col-md-12">
			<section class="footer-copyright text-center">
				<p>Dijahit dengan <i class="fa fa-heart"></i> oleh Kain Co.</p>
 			</section> <!-- /.footer-section -->
		</div> <!-- /.col-md-12 -->
	</div> <!-- /.row -->

</div>
</section>
</body>
</html>