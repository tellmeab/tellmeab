

<!DOCTYPE html>
<html lang="en" style="height:100%">

  <head>

    <title>about</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="1.css">
    <link rel="stylesheet" type="text/css" href="2.css">
    <link rel="stylesheet" type="text/css" href="6.css">

    <script src="3.js"></script>
    <script src="4.js"></script>
    <script src="5.js"></script>
    <script src="7.js"></script>

      <link rel="short cut icon" href="logotops.png" type="image/x-icon">


    <style type="text/css">

      img.logo{float: left;}
      header a{ text-decoration: none;  text-transform: uppercase; font-size: 1em; height: 100%;}

      header li>a{padding-top:10px !important; padding-bottom:10px !important;}
      header img{width: 220px; height: 40px;}
      header {background-color: transparent;height:13px}

      header.large{ height: 13px; }
      header.large li{ margin-bottom: 0px;  height: 100%;}
      header.large li>a{padding-top:10px !important; padding-bottom:10px !important;}
      header.large img{width: 220px; height: 40px;}
      header.large button{margin-top:12px;}

      header.small{ height: 0px; }
      header.small img{ width: 40px; height: 22px;}
      header.small{position: relative; opacity: 0.5; z-index:4}
      header.small li>a{padding-top:1px !important; padding-bottom:1px !important;}
      header.small button{margin-top:0px; margin-bottom: 0px; height:10px; }
      header.small span{margin-top:-7px}

      header,nav, a, img, li{
        transition: all 1s;
        -moz-transition: all 1s;
        -webkit-transition: all 1s;
        -o-transition: all 1s;
      }

      img.logo{
        float: left;
      }

      ::selection {
        background: #2c2541;
        color: #e6e6e6;
      }
      ::-moz-selection {
        background: #2c2541;
        color: #e6e6e6;
      }


      input::-webkit-input-placeholder { color: #e6e6e6; }
      input:-ms-input-placeholder { color: #e6e6e6; }
      input::-ms-input-placeholder { color:#e6e6e6; }
      input::placeholder { color: #e6e6e6; }


    </style>

  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="60" id="cvet" style="height:100%; background-color:#E6e6e6">


    <div id="load"></div>
   <script type="text/javascript">
 		$(document).on("scroll",function(){
 			                                  if($(document).scrollTop()>100){
 				                                   $("header").removeClass("large").addClass("small");
 				                                }
 			                                  else{
 				                                   $("header").removeClass("small").addClass("large");
 				                                }
 			                                 });
 	 </script>

   <div class="row" style="border-top:2px solid #e6e6e6;padding-top:10px;padding-bottom:0px;">
       
       
       
     <div class="col-sm-12" style="background-color:#e6e6e6;font-family:RubikR" align="center"><br><a href="index" style="text-decoration: none;"><h1 style="margin-top:-2px;color:#2c2541">About &nbsp;
<img src="logo2.png" style="margin-top:-7px;width:40px;height:40px;" /></h1></a></div>

    

   </div>

   <script type="text/javascript">
 	  function openbox(id){
 	    display = document.getElementById(id).style.display;
 	    if(display=='none'){
 	       document.getElementById(id).style.display='block';
 	    }
      else{
 	       document.getElementById(id).style.display='none';
 	    }
  	}
   </script>


<div class="row">
    
    
    
	<div class="col-sm-2"></div>

<div class="col-sm-8" align="center">
<br><br><p style="color:#2c2541;font-size:14pt;font-family:RubikR"><b><a href="index" style="color:#2c2541;text-decoration:underline">tellmeab</a></b> is a place where you can find rating and reviews of everything, from hand gadgets to airlines, from small cafes to famous restaurants, bed linen, food, clothes, companies and even people. Together with tellmeab, we are all from all over the world share our feedback and assessments to help each other in choosing only the best! Become a part of tellmeab and evaluate everything, add your posts, share impressions, express an opinion and advise along with everyone! <a href="register" style="font-size:14pt;text-decoration:underline;color:#2c2541;" class="menuwords"><b>Register</b></a></p>




			<br>

			<div class="col-sm-3" align="center">
			<?php

        $conn12=mysqli_connect("");
        $total_comment12 = "SELECT COUNT(*) FROM ";
        $rees12 = mysqli_query($conn12,$total_comment12);
        $tota_row12 = mysqli_fetch_array($rees12)[0];
        echo '<p style="color:#2c2541;font-size:14pt"><b>users</b></p><p style="color:#2c2541;font-size:12pt">'.$tota_row12.'</p>';

         ?></div>
         <div class="col-sm-3" align="center">
			<?php

        $conn12=mysqli_connect("");
        $total_comment12 = "SELECT COUNT(*) FROM ";
        $rees12 = mysqli_query($conn12,$total_comment12);
        $tota_row12 = mysqli_fetch_array($rees12)[0];
        echo '<p style="color:#2c2541;font-size:14pt"><b>posts</b></p><p style="color:#2c2541;font-size:12pt">'.$tota_row12.'</p>';

         ?></div>
         <div class="col-sm-3" align="center">
			<?php

        $conn12=mysqli_connect("");
        $total_comment12 = "SELECT COUNT(*) FROM ";
        $rees12 = mysqli_query($conn12,$total_comment12);
        $tota_row12 = mysqli_fetch_array($rees12)[0];
        echo '<p style="color:#2c2541;font-size:14pt"><b>feedbacks</b></p><p style="color:#2c2541;font-size:12pt">'.$tota_row12.'</p>';

         ?></div>
         <div class="col-sm-3" align="center">
			<?php

        $conn12=mysqli_connect("");
        $total_comment12 = "SELECT COUNT(*) FROM ";
        $rees12 = mysqli_query($conn12,$total_comment12);
        $tota_row12 = mysqli_fetch_array($rees12)[0];
        echo '<p style="color:#2c2541;font-size:14pt"><b>stars</b></p><p style="color:#2c2541;font-size:12pt">'.$tota_row12.'</p>';

         ?></div>
			<br><br><br><br><br>


        
      
      <div class="col-sm-12" align="center">
<?php
$date1 = "2019-03-04";
$date2 = date("Y-m-d");

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

if ($years > 0) {echo '<p style="color:#2c2541;font-size:14px">online&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$years.'</b> years&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$months.'</b> months&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$days.'</b> days</p>';}
elseif ($months > 0) {echo '<p style="color:#2c2541;font-size:14px">online&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$months.'</b> months&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$days.'</b> days</p>';}
else {echo '<p style="color:#2c2541;font-size:14px">online&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$days.'</b> days</p>';}
?><br>
<a href="sponsor" style="font-size:14px;text-decoration:underline;color:#2c2541;" class="menuwords">Sponsor</a>
<p style="font-size:14px; color:#2c2741;font-family:RubikR" >tellmeab &copy; 2019</p></div>
		
		

    </div>
	<div class="col-sm-2"></div>
</div>



 </body>
</html>
