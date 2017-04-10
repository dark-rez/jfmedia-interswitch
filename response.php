<?php

session_start();

  //$cc = microtime();

  date_default_timezone_set('UTC');
   $id = $_SESSION['id'];
    $cc = session_id();

   //if ($cc != "4a5db436030b54fd4684864483693832") {
  //exit();
 //}

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

 include "/home/jfmedia1/public_html/incs/options.php";
$submittedref = $_POST['txnref'];
$submittedamt = $_SESSION['amt4hash'];

$json = dquery($submittedamt, $submittedref);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
      <head><meta http-equiv="Content-Type" content="text/html; charset=ibm866">        
    	<meta http-equiv="content-language" id="metahead" content="fr" />                         
            <title>Johnfred Medias International</title>
   <meta name="description" content="" />
    <meta property="og:site_name" content="jfmedias.com"/><meta http-equiv="keywords" name="keywords" content="" />
      <meta property="og:title" content="jfmedias" />
<meta property="og:description" content=""/>
<meta property="og:url" content="http://www.jfmedias.com" />
                    <meta http-equiv="robots" name="Robots" content="all" />
                    <meta name="robots" content="INDEX,FOLLOW,ARCHIVE" />
<link rel="shortcut icon" href="http://www.jfmedias.com/designs/images/jmi.ico" /></style>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<link href="http://www.jfmedias.com/designs/css/styles.css" rel="stylesheet" type="text/css" /></style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://www.jfmedias.com/designs/css/icon-fonts/font-awesome.css">
 <meta http-equiv="Pragma" content="no-cache">
<style>
.jquery-slider,
.jquery-slider * {
    box-sizing: border-box !important;
    -webkit-transition: none !important; 
    -moz-transition: none !important;
    -o-transition: none !important;
    transition: none !important;
  //float:center;
}
.jquery-slider {
    overflow: hidden;
    position: relative;
   margin-left:auto; 
   margin-right:auto;
    width: 980px;
   
}
.jquery-slider-element {
    overflow: hidden;
    display: none;
   position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}
.jquery-slider-control {
    overflow: hidden;
    position: absolute;
    text-align: center;
    width: 24px;
    height: 24px;
    line-height: 24px;
    font-size: 16px;
    font-weight: bold;
    padding: 0;
    margin: 0;
    border: 1px solid #666;
    background: #fff;
    opacity: 0.33;
    cursor: pointer;
    border-radius: 12px;
    box-shadow: #666 0 0 2px;
    text-shadow: #fff 0 0 1px;
}
.jquery-slider-control:hover {
    opacity: 1;
}
.jquery-slider-control-prev {
    left: 5px;
    top: 5px;
}
.jquery-slider-control-next {
    right: 5px;
    top: 5px;
}
.jquery-slider-pages {
    overflow: visible;
    position: absolute;
    left: 5px;
    bottom: 5px;
    height: 20px;
    right: 5px;
}
.jquery-slider-page {
    overflow: hidden;
    position: relative;
    display: block;
    float: right;
    width: 12px;
    height: 12px;
    padding: 0;
    margin: 0;
    background: #999;
	cursor: pointer;
    opacity: 0.33;
    margin: 3px;
    border-radius: 6px;
    box-shadow: #333 0 0 2px;
}
.jquery-slider-page:hover {
	-webkit-transform: scale(1.5);
	-moz-transform: scale(1.5);
}
.jquery-slider-page-current {
    opacity: 1;
}

#slider{display:none;}
#slider .simple h1 {
    margin: 40px 0 20px 0;
    margin-left: 15px;
    float: left;
    //width: 160px;
    text-align: right;
    line-height: 25px;
}
#slider .simple div {
    margin: 50px 0 20px 0;
    float: left;
    line-height: 30px;
    margin-left: 40px;
   color:#fff; font-size:14px;text-align:left;padding-left:5px;
   background:#eb5858;width:250px;opacity:0.8;
}
#slider .light h2 {
    margin: 40px 0 20px 0;
    position: absolute;
    top: 50px;
    left: 380px;
    text-align: right;
    line-height: 25px;
}
#slider .light q {
    margin: 40px 0 20px 0;
    float: right;
    line-height: 30px;
    margin-right: 200px;
}
#slider .easy h2 {
    margin: 50px 0 20px 0;
    float: left;
    width: 200px;
    text-align: right;
    line-height: 25px;
}
#slider .easy q {
    margin: 40px 0 20px 0;
    float: left;
    line-height: 30px;
    margin-left: 80px;
}

#slider div span {
    display: block;
   padding:5px;
    position:relative;
    //width: 200px;
    height: 40px;
    text-align: center;
    line-height: 20px;
    margin: 5px;
    top:140px;
    left:50px;
    float: left;
    clear: both;
    background: #000;
    color: #994488;
     font-weight:bold;font-size:13px;opacity:0.7;
    text-decoration: none;
    //text-transform: uppercase;
    border-radius: 2px;
    box-shadow: #000 0 0 1px;
}
#slider .light a {
    float: right;
}
#slider div a:hover {
    box-shadow: #000 0 0 2px;
}
#headerNav a{transition:color 0.4s ease 0s;color:#404040;white-space:nowrap;text-decoration:none;font-style:italic;}
.active{border-bottom:2px #ccac00 solid;}
#headerNav a:hover{transition:color 0.4s ease 0s;color:#ccac00;border-bottom:2px #ccac00 solid;}
.social-icons{text-decoration:none;color:#010101;font-size:16px;}
.social-icons:hover{color:#ccac00;}.inner-link{text-decoration:none;color:#fff;padding:12px;background:#000;display:inline-block;transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;}.inner-link:hover{background:#404040;}.inner-link-donate{text-decoration:none;color:#fff;padding:12px;background:#ccac00;display:inline-block;transition:border-color 0.4s ease 0s, background-color 0.4s ease 0s;}.inner-link-donate:hover{background:#404040;}.inner-link-donate-2{text-decoration:none;color:#404040;padding:12px;background:#fff;border:1px #404040 solid;display:inline-block;transition:border-color 0.4s ease 0s, background-color 0.4s ease 0s;}.inner-link-donate-2:hover{background:#ccac00;color:#fff;border:1px #ccac00 solid;}.submit-link{transition:border-color 0.4s ease 0s, background-color 0.4s ease 0s;}.footer-link{padding:3px;text-decoration:none;color:#fff;display:inherit;font-size:16px;transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;}.footer-link:hover{color:#ccac00;}.footer-link-active{color:#ccac00;}

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,800,300,700);@import url(http://fonts.googleapis.com/css?family=Quicksand:400,300,700);@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);@import url(http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,700italic,900);.tp-caption.roundedimage img{-webkit-border-radius:300px;  -moz-border-radius:300px;  border-radius:300px}.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
 </style>
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://www.jfmedias.com/designs/js/settings.css?ver=5.1.6' type='text/css' media='all' />
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://www.jfmedias.com/designs/js/js.min.js"></script>
<script type="text/javascript" src="http://www.feelingbeauty.net/servlet/source/js/mainSlidder.js"></script>
  <script type="text/javascript">
  var ww = $(window).width() - 18;
  $(".simple").css("width", "" + ww + "px");
  $(document).ready(function() {
  $("#slider").fadeIn("slow");
        $(function() {
            jQuery("#slider").slider({
                width: ww,
                height:470
            });
        });
  $(".simple").css("width", "" + ww + "px");
 $("#donate_c").hover(function() {
     $(".donate_c").css("background", "#404040");
    }, function() {
        $(".donate_c").css("background", "#ccac00");
   });
$(".submit-link").hover(function() {
     $(this).css("background", "#fff").css("color", "#ccac00");
    }, function() {
        $(this).css("background", "#ccac00").css("color", "#fff");
   });
    $(".contact-form-fly").click(function() {  
$('html, body').animate({
                    scrollTop: $("#contact-space").offset().top
                     }, 'normal');
   });
  });
        </script>
</head>
  <body  style="font-family:Trebuchet MS,sans serif;margin:0px;">
<div class="live-chat-holder" style="position:fixed;bottom:0px;right:0px;width:300px;background:#ccac00;border:1px #ddd solid;-moz-border-radius:0px;-webkit-border-radius:10px 10px 0px 0px;border-radius:10px 10px 0px 0px;z-index:10;padding:6px;color:#fff;text-align:center;"><div id="chat-connect-wrapper" style="width:100%;background:#fff;"></div><div id="submit-button-hold" class="live-chat-openner" style="padding:3px;cursor:pointer;">Chat with us live</div></div>
 <div class="site-content-wrapper" init="start">
<header style="position:relative;width:100%;height:40px;margin-left:auto;margin-right:auto;background:#fff;border-bottom:1px #e5e5e5d solid;color:#fff;z-index:100;">
<div style="position:relative;width:980px;margin-left:auto;margin-right:auto;">
<div style="float:left;margin:12px 0 0;">
<a href="http://www.facebook.com/johnfredoluwaseyi" target="_blank" title="Become our fan" class="social-icons" style="margin-right:10px;"><i class="social-icons fa fa-facebook"></i></a>
<a href="https://twitter.com/johnfredmedia" target="_blank" title="Fllow us on twitter" class="social-icons" style="margin-right:10px;"><i class="social-icons fa fa-twitter"></i></a>
<a href="https://www.youtube.com/user/johnfred0" target="_blank" title="" class="social-icons" style="margin-right:10px;"><i class="social-icons fa fa-youtube"></i></a>
<a href="http://www.google.com/johnfred0" target="_blank" title="" class="social-icons" style="margin-right:10px;"><i class="social-icons fa fa-google-plus"></i></a>
<a href="https://www.instagram.com/johnfred4u/" target="_blank" title="" class="social-icons" style="margin-right:10px;"><i class="social-icons fa fa-instagram"></i></a>

</div>
<div style="position:relative;float:right;top:10px;"><img src="http://www.jfmedias.com/designs/images/636163368b2b548279b39a5b7979338f.png" style="width:21px;height:21px;cursor:pointer;"><img src="http://www.jfmedias.com/designs/images/7daeb9be305f4ffcc3916acaaf5b60d1.png" style="width:21px;height:21px;cursor:pointer;margin-left:10px;"></div>
<div style="float:right;color:#333;font-size:13px;padding:14px;margin-right:25px;"><i class="fa fa-phone" style="color:#ccac00;font-size:13px;"> </i><span style="">06 95 43 81 26</span></div>
<div style="clear:both;"></div>
  </div>
 </header>
<header style="position:relative;width:100%;height:60px;color:#fff;z-index:100;">
<div style="width:100%;position:relative;height:50px;background:#fff;backface-visibility:hidden;box-shadow:0 8px 6px -8px rgba(0,0,0,.3);" class="sticky_nav_wrapper sticky_nav">
<div style="width:980px;position:relative;bottom:0px;margin-left:auto;margin-right:auto;" id="headerNav"><div style="float:left;width:80px;">
<img title="Johnfred Medias International" src="http://www.jfmedias.com/designs/images/jmi_logo.png" style="width:50px;height:51px;cursor:pointer;"> </div><div style="float:left;"><a href="/index.php" style="display:inline-block;margin:3px;padding:12px 18px;" class="">Home</a></div> <div style="float:left;"><a href="/youth-help-center.html" style="display:inline-block;margin:3px;padding:12px 18px;">Rehabilitation Center</a></div> <div style="float:left;"><a href="/events.html" style="display:inline-block;margin:3px;padding:12px 18px;">Events</a></div> <div style="float:left;"><a href="/watch-jfm-videos.html" style="display:inline-block;margin:3px;padding:12px 18px;">Channel</a></div> <div style="float:left;"><a class="contact-form-fly" href="/contact.html" style="display:inline-block;margin:3px;padding:12px 18px;">Contact</a></div> <div style="float:left;"><a href="/members.html" style="display:inline-block;margin:3px;padding:12px 18px;">Members</a></div> <div style="float:left;"><a href="/gallery.php" style="display:inline-block;margin:3px;padding:12px 18px;">Gallery</a></div>
 <div style="clear:both;"> </div>
<div id="donate_c" style="position:absolute;top:4px;right:0px;"><div style="text-decoration:none;color:#fff;"><div rel="no" class="cause donate_c" style="position:relative;width:130px;background:#ccac00;padding:10px 0;text-align:center;color:#fff;cursor:pointer;
    border-radius: 0;
    transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
    box-shadow: -2.99px 1.03px 6px 0px rgba(0,0,0,0.2);
    border: solid rgba(35, 35, 35, 1) 0px;"><i>Donate today!</i></div>
  <div style="width:130px;height:26px;position:relative;background:url(http://www.jfmedias.com/designs/images/liftedshadow_medium.png);"> </div>
 </div>
 </div>
</div></div>
  </header>
    <div style="width:100%;height:400px;position:relative;top:-6px;z-index:1;">
        <div style="position:relative;top:38%;width:980px;height:100%;position:relative;z-index:5;background:transparent;color:#fff;margin-left:auto;margin-right:auto;">
<div style="padding:30px 0 0;font-size:30px;line-height:1em;color:#fff;text-transform:uppercase;text-align:center;"><strong>YOUR Donations COUNTS</strong></div>
<div style="padding:10px 0 0;font-size:15px;line-height:1em;color:#fff;text-align:center;"><strong><a class="footer-link" href="/index.php">Home</a></strong></div>
</div>
<div style="position:absolute;top:0px;width:100%;height:400px;background:url(http://www.jfmedias.com/designs/images/42c4a9_d36cf25244522fkffr4253d9e63f45a91.jpg);background-repeat:no-repeat;background-position:top center;background-size:cover;z-index:1;"> </div>

  </div>

<div class="content-bottom" style="position:relative;top:0px;width:100%;background:#f2f2f2;">
<div style="padding:30px;position:relative;width:920px;height:500px;background:#fff;margin-left:auto;margin-right:auto;z-index:1;text-align:center;">
<div style="text-align:left;color:#444;background:#fff;">
<?php //echo($json['ResponseCode']); ?> </h4>
                    <p><?php //echo($json['ResponseDescription']); ?></p>
<?php
//print_r($json);

$temp = "$submittedref";

 include "/home/jfmedia1/public_html/dbconnection.php";
  $sqldata = mysqli_query($link, "SELECT * FROM donations WHERE ref_numb='$temp'");
          while($row = mysqli_fetch_array($sqldata)) {
                $email = $row["email"];
                $firstname = $row["firstname"];
                $pay_amount = $row["pay_amount"];
                $ref_numb = $row["ref_numb"];
 }
$ammt = $json[Amount];
$pay_reference = $json[RetrievalReferenceNumber];
$pay_date = $json[TransactionDate];
 $success = $json[ResponseDescription];

   if ($pay_reference == "") {
 $pay_reference = "No reference was returned";
 } else {
 $pay_reference = "$pay_reference";
}
   if ($pay_date == "0001-01-01T00:00:00") {
 $pay_date = date('Y-m-d H:i:s');
 } else {
 $pay_date = "$pay_date";
}

 $sqlupdate = mysqli_query($link, "UPDATE donations SET retrieval_reference_number='$pay_reference' WHERE ref_numb='$temp'");
 $sqlupdate = mysqli_query($link, "UPDATE donations SET transactiondate='$pay_date' WHERE ref_numb='$temp'");
 $sqlupdate = mysqli_query($link, "UPDATE donations SET Transaction_response='$success' WHERE ref_numb='$temp'");

   if ($success == "Pending") {
 $sqlupdate = mysqli_query($link, "UPDATE donations SET Transaction_response='$success' WHERE ref_numb='$temp'");
}

  if ($success == "Approved Successful") {

 echo '<div style="font-size:14px;width:400px;"><div style="color:#cc0000;font-size:24px;">Successful transactions</div>
<div style="color:#000;font-size:30px;">Your Transaction</div>
<div style="margin:15px 0 0;padding:8px;background:#00b6bd;color:#fff;border-radius:6px;moz-border-radius:6px;-webkit-border-radius:6px;"><div>Approved Successful</div>
<div>Your insurance certificate has been sent to your mail(' . $email . ').</div>
<div>Your donation reference is: <b>' . $pay_reference . '</b></div>
</div>
</div>';

$sendto = "$email"; 
$subject = "Your donation in jfmedias.com"; 
$headers .= "From: jfmedias.com <notification@jfmedias.com>\r\n";
$header .= "Reply-to: no-reply@jfmedias.com\r\n";
$header = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset: utf8\r\n"; 

$message = "<html>
  <head>
<title> </title>
</head>
<body>
 Dear $firstname 

Your donation of ?$pay_amount in jfmedias.com was successful.
And your reference number for this donation is $pay_reference

Please feel free to contact us through our website if need to do so.

Thanks.
JMI FOUNDATION TEAM
www.jfmedias.com
</body>
</html>";

  mail($sendto, $subject, $message, $headers);

  }
 
  if ($success == "Insufficient Funds") {

 echo '<div style="font-size:14px;width:400px;"><div style="color:#cc0000;font-size:24px;">Insufficient Funds</div>
<div style="color:#000;font-size:30px;">Your Transaction</div>
<div style="margin:15px 0 0;padding:8px;background:#da4f49;color:#fff;border-radius:6px;moz-border-radius:6px;-webkit-border-radius:6px;">
<div>Your transaction was not successful.</div>
<div>Reason: <b>Insufficient Funds</b></div>
</div>
</div>';
  }
 
  if ($success == "Expired Card") {

 echo '<div style="font-size:14px;width:400px;"><div style="color:#cc0000;font-size:24px;">Expired card</div>
<div style="color:#000;font-size:30px;">Your Transaction</div>
<div style="margin:15px 0 0;padding:8px;background:#da4f49;color:#fff;border-radius:6px;moz-border-radius:6px;-webkit-border-radius:6px;">
<div>Your transaction was not successful.</div>
<div>Reason: <b>Expired card</b></div>
</div>
</div>';
  }

  if ($success == "Bank or switch network error") {

 echo '<div style="font-size:14px;width:400px;"><div style="color:#cc0000;font-size:24px;">Insufficient Funds</div>
<div style="color:#000;font-size:30px;">Your Transaction</div>
<div style="margin:15px 0 0;padding:8px;background:#da4f49;color:#fff;border-radius:6px;moz-border-radius:6px;-webkit-border-radius:6px;">
<div>There was an error with the transaction. Please bare with us.</div>
<div>Reason: <b>Bank or switch network error</b></div>
</div>
</div>';
  }
 

  if ($success == "Amount Inconsistency") {

 echo '<div style="font-size:14px;width:400px;"><div style="color:#cc0000;font-size:24px;">Insufficient Funds</div>
<div style="color:#000;font-size:30px;">Your Transaction</div>
<div style="margin:15px 0 0;padding:8px;background:#da4f49;color:#fff;border-radius:6px;moz-border-radius:6px;-webkit-border-radius:6px;">
<div>Your donation was declined due to Amount Inconsistency.</div>
<div>Reason: <b>Amount Inconsistency</b></div>
</div>
</div>';
  }

  if ($success == "Incorrect Pin" || $success == "PIN tries exceeded") {

 echo '<div style="font-size:14px;width:400px;"><div style="color:#cc0000;font-size:24px;">Incorrect Pin(Transaction Error)</div>
<div style="color:#000;font-size:30px;">Your Transaction</div>
<div style="margin:15px 0 0;padding:8px;background:#da4f49;color:#fff;border-radius:6px;moz-border-radius:6px;-webkit-border-radius:6px;">
<div>Your transaction was not successful.</div>
<div>Reason: <b>Transaction Error</b></div>
</div>
</div>';
  }
 
  if ($success == "Customer cancellation") {

 echo '<div style="font-size:14px;width:400px;"><div style="color:#cc0000;font-size:24px;">Customer cancellation</div>
<div style="color:#000;font-size:30px;">Your Transaction</div>
<div style="margin:15px 0 0;padding:8px;background:#da4f49;color:#fff;border-radius:6px;moz-border-radius:6px;-webkit-border-radius:6px;">
<div>Your transaction was not successful.</div>
<div>Reason: <b>Incomplete Transaction</b></div>
</div>
</div>';
  }
 
  if ($success == "No Card Record") {

 echo '<div style="font-size:14px;width:400px;"><div style="color:#cc0000;font-size:24px;">No Card Record Found</div>
<div style="color:#000;font-size:30px;">Your Transaction</div>
<div style="margin:15px 0 0;padding:8px;background:#da4f49;color:#fff;border-radius:6px;moz-border-radius:6px;-webkit-border-radius:6px;">
<div>Your transaction was not successful.</div>
<div>Reason: <b>No Card Record</b></div>
</div>
</div>';
  }

?>


</div>
</div>
<div style="clear:both;">
  </div><!-- END floats -->
</div><!-- END content-bottom -->


<footer style="position:relative;width:100%;height:400px;background:#000;color:#fff;border-top:5px solid #ccac00;border-bottom: 0px solid rgba(213, 43, 30, 1);">

<div style="position:relative;width:100%;height:100%;z-index:5;background:#000;">
<div style="width:980px;margin-left:auto;margin-right:auto;z-index:5;">
<div style="float:left;width:33%;margin-top:6px;margin-right:15px;">
 <h3 style="line-height: 1.3em;" class="font_6"><span style="line-height: 1.3em;"><span style="color:#D4D4D4;"><em>Location</em></span></span></h3>
<div style="width:270px;height:214px;">
<iframe src="http://static.parastorage.com/services/santa/1.1595.14/static/external/googleMapWithDesigns.html?language=en" width="100%" height="100%" frameborder="0" scrolling="no" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$GglMp0.$mapContainer.0"></iframe>
  </div>
  </div>
<div style="float:left;width:33%;margin-top:6px;margin-right:15px;">
 <h3 style="line-height: 1.3em;" class="font_6"><span style="line-height: 1.3em;"><span style="color:#D4D4D4;"><em>Site links</em></span></span></h3>
<div style="width:100%;">
<div style=""><a class="footer-link" href="http://www.jfmedias.com/index.php">Home</a></div>
<div style=""><a class="footer-link" href="http://www.jfmedias.com/youth-help-center.html">Rehabilitation Center</a></div>
<div style=""><a class="footer-link" href="http://www.jfmedias.com/events.html">Events</a></div>
<div style=""><a class="footer-link" href="http://www.jfmedias.com/watch-jfm-videos.html">Channel</a></div>
<div style=""><a class="footer-link contact-form-fly" href="" onclick="return false;">Contact</a></div>
<div style=""><a class="footer-link" href="http://www.jfmedias.com/members.html">Members</a></div>
<div style=""><a class="footer-link" href="http://www.jfmedias.com/gallery.php">Gallery</a></div>
</div>
</div>
<div style="float:left;width:30%;">
 <h3 style="line-height: 1.3em;" class="font_6"><span style="line-height: 1.3em;"><span style="color:#D4D4D4;"><em>Sponsors</em></span></span></h3>
<div style="float:left;margin:8px;padding:6px 6px 0;width:41px;height:41px;cursor:pointer;background:url(http://www.jfmedias.com/designs/images/41d000_694d471f12d15b555ecff99cca62725d.png);background-repeat:no-repeat;"> </div>
<div style="float:left;margin:8px;padding:6px 6px 0;width:41px;height:41px;cursor:pointer;background:url(http://www.jfmedias.com/designs/images/41d000_0d1990fc1ec183c628c1f6be848172a2.png);background-repeat:no-repeat;"> </div>
<div style="float:left;margin:8px;padding:6px 6px 0;width:41px;height:41px;cursor:pointer;background:url(http://www.jfmedias.com/designs/images/41d000_41e50ae815adae1d938b15c928f9d1fe.png);background-repeat:no-repeat;"> </div>
<div style="float:left;margin:8px;padding:6px 6px 0;width:41px;height:41px;cursor:pointer;background:url(http://www.jfmedias.com/designs/images/41d000_94ae9cada255bc61b3e0981a911be723.png);background-repeat:no-repeat;"> </div>
<div style="float:left;margin:8px;padding:6px 6px 0;width:41px;height:41px;cursor:pointer;background:url(http://www.jfmedias.com/designs/images/41d000_9fba8be6e654206f0c5c87585b65cd96.png);background-repeat:no-repeat;"> </div>
<div style="float:left;margin:8px;padding:6px 6px 0;width:41px;height:41px;cursor:pointer;background:url(http://www.jfmedias.com/designs/images/41d000_a7293bb200bdaefe71bbe01b0afbe58e.png);background-repeat:no-repeat;"> </div>
<div style="float:left;margin:8px;padding:6px 6px 0;width:41px;height:41px;cursor:pointer;background:url(http://www.jfmedias.com/designs/images/41d000_f260e00e5c6522e79e481ccb0720803f.png);background-repeat:no-repeat;"> </div>
<div style="float:left;margin:8px;padding:6px 6px 0;width:41px;height:41px;cursor:pointer;background:url(http://www.jfmedias.com/designs/images/41d000_609c5e798891fef7450bdd78a02369a5.png);background-repeat:no-repeat;"> </div>
 <div style="clear:both;"> </div>
 <a href="/help/donations.html" style="text-decoration:none;color:#fff;"><h2 style="line-height: 1.3em;font-size:20px;" class="font_6"><span style="line-height: 1.3em;"><span style="color:#D4D4D4;"><em>Donate to our account here</em><div style="font-size:14px;">Read more...</div></span></span></h2></a>
  </div>
 <div style="clear:both;"> </div>
  </div>
 <div id="footer-copyright" style="position:absolute;bottom:0;width:100%;height:100px;background:#444;">
<div style="width:980px;margin-left:auto;margin-right:auto;font-size:12px;font-family:Arial,sans serif;padding:6px;">
<div style="float:left;"><img style="border-radius:10px;
    moz-border-radius:10px;-webkit-border-radius:10px;" src="http://www.jfmedias.com/designs/images/42c4a9_eab43d2318c24943928b9c557526311d.jpg"></div>
<div style="float:left;padding:6px 6px 0;"> <div>Sponsored by JMI Foundation. All right reserved.</div>
<div>Association in France  Loi 1901 - Registration N° w952007035</div>
<div>Association in Nigeria - Registration N° CACIT2902</div></div>
 <div style="clear:both;"> </div>
 </div>
  </div>
</div>
   </footer>
 </div>
 <div class="ui-popup-wrapper" style="display:none;color:#000;top:0px;text-align:center;position:fixed;width:100%;height:100%;z-index:1000;"> </div>
  </body>
 </html>
