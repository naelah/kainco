<?php
	
	include("connection.php");
	include("functions.php");
	session_start();
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0)
	{
		remove_product($_REQUEST['pid']);
	}
	
	else if($_REQUEST['command']=='clear')
	{
		unset($_SESSION['cart']);
	}
	
	else if($_REQUEST['command']=='update')
	{
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999)
			{
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else
			{
				$msg='Some products not updated!, quantity must be a number between 1 and 999';
			}
		}
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
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
 
<script language="javascript">
	function del(pid){
		if(confirm('Pastikah anda untuk membuang item ini?')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('Kosongkan troli?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


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

<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	
<section class="booklist-content">
<div class="row">

<center><input class="btn-danger btn-s" type="button" value="Tambah" onclick="window.location='products.php'" /></center><br>

    	<?php echo $msg?>
    	<center><table>
    	<?php
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#FFFFFF" style="font-weight:bold"><td><CENTER>No.</CENTER>
            	</td><td>Jenis Baju</td><td>&nbsp;Harga&nbsp;</td><td>&nbsp;Kuantiti&nbsp;</td>
            	<td>&nbsp;Amaun&nbsp;</td><td>&nbsp;Pilihan&nbsp;</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<tr bgcolor="#FFFFFF"><td><CENTER><?php echo $i+1 ?></CENTER></td><td>&nbsp;<?php echo $pname?>&nbsp;</td>
                    <td>MYR <?php echo get_price($pid)?></td>
                    <td><input type="text" name="product<?php echo $pid?>" value="<?php echo $q?>" maxlength="3" size="2" /></td>                    
                    <td>MYR <?php echo get_price($pid)*$q?></td>
                    <td><a href="javascript:del(<?php echo $pid?>)">Buang</a></td></tr>
            <?php					
				}
			?>
				<tr><td><b>&nbsp;Jumlah: MYR &nbsp;<?php echo get_order_total()?></b></td><td colspan="5" align="right">
				<input class="btn-danger btn-xs" type="button" value="Kosongkan Troli" onclick="clear_cart()">
				<input class="btn-danger btn-xs" type="button" value="Kemaskini Kuantiti" onclick="update_cart()">
				<input class="btn-danger btn-xs" type="button" value="Selesai" onclick="window.location='billing.php'"></td></tr>
			<?php
			$_SESSION['TOTAL']=get_order_total();
			?>
				
			<?php
            }
			else{
				echo "Anda tiada sebarang item di dalam troli!";
			}
		?>
        </table></center>
</form>




</div> <!-- /.row -->
</section> <!-- /.sign-in-up-content -->


 <div class="row">
		<div class="col-md-12">
			<section class="footer-copyright text-center">
				<p>Dijahit dengan <i class="fa fa-heart"></i> oleh Kain Co.</p>
 			</section> <!-- /.footer-section -->
		</div> <!-- /.col-md-12 -->
	</div> <!-- /.row -->

</body>
</html>