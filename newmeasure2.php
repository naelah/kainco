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
    
    <script type="text/javascript">
    
function validateForm()
{
var a=document.forms["mea"]["bh"].value;
var b=document.forms["mea"]["kk"].value;
var c=document.forms["mea"]["pt"].value;
var d=document.forms["mea"]["ll"].value;
var e=document.forms["mea"]["da"].value;
var f=document.forms["mea"]["pi"].value;
var g=document.forms["mea"]["pu"].value;
var h=document.forms["mea"]["lb"].value;
var i=document.forms["mea"]["bd"].value;
var j=document.forms["mea"]["bp"].value;
var k=document.forms["mea"]["lk"].value;
var l=document.forms["mea"]["pb"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="")
&& (g==null || g=="") && (h==null || h=="") && (i==null || i=="") && (j==null || j=="") && (k==null || k=="") && (l==null || l==""))
  {
  alert("Harus isikan semua maklumat");
  return false;
  }
  
if (a==null || a=="")
  {
  alert("Ukuran bahu harus diisikan.");
  return false;
  }
  
  if (a==null || a=="")
  {
  alert("Ukuran bahu harus diisikan.");
  return false;
  }
  
if (b==null || b=="")
  {
  alert("Ukuran keliling ketiak harus diisikan.");
  return false;
  }
  
if (c==null || c=="")
  {
  alert("Ukuran pergelangan tangan harus diisikan.");
  return false;
  }
  
if (d==null || d=="")
  {
  alert("Ukuran labuh lengan baju harus diisikan.");
  return false;
  }
  
if (e==null || e=="")
  {
  alert("Ukuran dada harus diisikan.");
  return false;
  }

  
  if (f==null || f=="")
  {
  alert("Ukuran pinggang kain harus diisikan.");
  return false;
  }
  
  if (g==null || g=="")
  {
  alert("Ukuran punggung harus diisikan.");
  return false;
  }
  
  if (h==null || h=="")
  {
  alert("Ukuran labuh baju harus diisikan.");
  return false;
  }
  
  if (i==null || i=="")
  {
  alert("Ukuran bahu ke dada harus diisikan.");
  return false;
  }
  
  if (j==null || j=="")
  {
  alert("Ukuran bahu ke pinggang harus diisikan.");
  return false;
  }
  
  if (k==null || k=="")
  {
  alert("Ukuran labuh kain harus diisikan.");
  return false;
  }
  
  if (l==null || l=="")
  {
  alert("Ukuran pinggang baju harus diisikan.");
  return false;
  }
}
</script>
    
    
    
    
    
    
  </head>
  <body class="sign-in-up" id="to-top">

    <!-- Sign In/Sign Up section -->
    <section class="newmeasure-section">

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
 <h4 class="text-white" color='white'><?php echo $_SESSION['NAME']; ?>&nbsp;<i class="fa fa-heart"></i></h4><br>
        <section class="sign-in-up-content">

          <div class="row">

            <div class="col-md-12">

              
			 
			  
<form name="mea" action ="newmeasure_exec.php" method="post" onsubmit="return validateForm()">			  
<center><h5>Masukkan ukuran baru anda:</h5><table>
<col><col>
<thead>
<tr><th>Bahagian <th>Cm &nbsp;
</thead>
<tbody>
<tr><td>&nbsp;Bahu <td><input type ="number" id="bh" name="BH">
<tr><td>&nbsp;Keliling Ketiak <td><input type ="number" id="kk" name="KK">
<tr><td>&nbsp;Pergelangan Tangan &nbsp;<td><input type ="number" id="pt" name="PT">
<tr><td>&nbsp;Labuh Lengan Baju <td><input type ="number" id="ll" name="LL">
<tr><td>&nbsp;Dada <td><input type ="number"  id="da" name="DA">
<tr><td>&nbsp;Pinggang Kain<td><input type ="number" id="pi" name="PI">
<tr><td>&nbsp;Pinggang Baju<td><input type ="number" id="pi" name="PB">
<tr><td>&nbsp;Punggung <td><input type ="number" id="pu" name="PU">
<tr><td>&nbsp;Labuh Baju <td><input type ="number" id="lb" name="LB">
<tr><td>&nbsp;Bahu ke Dada <td><input type ="number" id="bd" name="BD">
<tr><td>&nbsp;Bahu ke Pinggang <td><input type ="number" id="bp" name="BP">
<tr><td>&nbsp;Labuh Kain <td><input type ="number" id="lk" name="LK">
</tbody>
</table><br><br><button class="btn-danger btn-lg" type="submit">Hantar</button>
</center><br>
			
			<br><center><h4>ATAU</h4><br>
			<h5>Pilih ukuran lazim kami:</h5>
			
			
<table>
<col><col>
<thead>
<tr><th>Bahagian <th>&nbsp;XS&nbsp;<th>&nbsp;S&nbsp;<th>&nbsp;M&nbsp;<th>&nbsp;L&nbsp;
</thead>
<tbody>
<tr><td>&nbsp;Bahu <td><center>&nbsp;&nbsp;14&nbsp;&nbsp;<td>15&nbsp;&nbsp;<td>15.5<td>16&nbsp;&nbsp;
<tr><td>&nbsp;Keliling Ketiak <td><center>&nbsp;&nbsp;16&nbsp;&nbsp;<td>17&nbsp;&nbsp;<td>18<td>19&nbsp;&nbsp;
<tr><td>&nbsp;Pergelangan Tangan &nbsp;<td><center>&nbsp;&nbsp;12&nbsp;&nbsp;<td>14&nbsp;&nbsp;<td>15<td>15&nbsp;&nbsp;
<tr><td>&nbsp;Labuh Lengan Baju <td><center>&nbsp;&nbsp;21&nbsp;&nbsp;<td>22&nbsp;&nbsp;<td>22<td>22&nbsp;&nbsp;
<tr><td>&nbsp;Dada <td><center>&nbsp;&nbsp;37&nbsp;&nbsp;<td>40&nbsp;&nbsp;<td>41<td>43&nbsp;&nbsp;
<tr><td>&nbsp;Pinggang Kain<td><center>&nbsp;&nbsp;25&nbsp;&nbsp;<td>26&nbsp;&nbsp;<td>28<td>31&nbsp;&nbsp;
<tr><td>&nbsp;Pinggang Baju<td><center>&nbsp;&nbsp;27&nbsp;&nbsp;<td>28&nbsp;&nbsp;<td>30<td>33&nbsp;&nbsp;
<tr><td>&nbsp;Punggung <td><center>&nbsp;&nbsp;38&nbsp;&nbsp;<td>38&nbsp;&nbsp;<td>41<td>43&nbsp;&nbsp;
<tr><td>&nbsp;Labuh Baju <td><center>&nbsp;&nbsp;39&nbsp;&nbsp;<td>39&nbsp;&nbsp;<td>40<td>40&nbsp;&nbsp;
<tr><td>&nbsp;Bahu ke Dada <td><center>&nbsp;&nbsp;19&nbsp;&nbsp;<td>19&nbsp;&nbsp;<td>18<td>18&nbsp;&nbsp;
<tr><td>&nbsp;Bahu ke Pinggang <td><center>&nbsp;&nbsp;20&nbsp;&nbsp;<td>20&nbsp;&nbsp;<td>22<td>22&nbsp;&nbsp;
<tr><td>&nbsp;Labuh Kain <td><center>&nbsp;&nbsp;39&nbsp;&nbsp;<td>40&nbsp;&nbsp;<td>41<td>41&nbsp;&nbsp;
</tbody>
</table></form>

<form name="mea" action ="newmeasure_exec2.php" method="post">
			Saiz: <input type="radio" name="size" value="xs">&nbsp;XS (36)&nbsp;&nbsp;
			<input type="radio" name="size" value="s">&nbsp;S (38)&nbsp;&nbsp;
			<input type="radio" name="size" value="m">&nbsp;M (40)&nbsp;&nbsp;
			<input type="radio" name="size" value="l">&nbsp;L (42)
			<br><br><button class="btn-danger btn-lg" type="submit">Hantar</button>
</form>
			</center>  </div>
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
