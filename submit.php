<?php

 include "/home/jfmedia1/public_html/dbconnection.php";

 $apps = "'";
   $cc = session_id();
    date_default_timezone_set('UTC');

 //include "/home/jfmedia1/public_html/incs/options.php"; // This is where i place this include at after you told us it was giving kobo then i commented it out and place it downwards 
//if you scroll down you will see where is place so the file can carry the variable of the result of kobo inside the options before passing it
// to the query string result.

$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
$webOS = stripos($_SERVER['HTTP_USER_AGENT'],"Blackberry");

  if( $iPod || $iPhone ){
    $media = "Mobile/Iphone";
}else if($iPad){
    $media = "Mobile/Ipad";
}else if($Android){
    $media = "Mobile/Android";
}else if($webOS){
    $media = "Mobile/WebOS";
}else if($webOS){
    $media = "Mobile/Blackberry";
}else {
    $media = "PC";
}

$tempref = $_POST['ref'];
$amount = $_POST['amount'];
$donate_amount = $_POST['donate_amount'];
$donate_type = $_POST['donate_type'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$note = $_POST['note'];

$fname = strip_tags($_POST['fname']);
$lname = strip_tags($_POST['lname']);
$email = strip_tags($_POST['email']);
$address = strip_tags($_POST['address']);
$phone = strip_tags($_POST['phone']);
$note = strip_tags($_POST['note']);
$donate_amount = strip_tags($_POST['donate_amount']);

$fname = stripslashes($fname);
$lname = stripslashes($lname);
$email = stripslashes($email);
$address = stripslashes($address);
$phone = stripslashes($phone);
$note = stripslashes($note);
$donate_amount = stripslashes($donate_amount);

$note = strip_tags($_POST['note']);
$note = htmlspecialchars($note);
$note = nl2br(htmlentities($_POST['note'],ENT_QUOTES,'UTF-8'));
$note = stripslashes($note);

$address = strip_tags($_POST['address']);
$address = htmlspecialchars($address);
$address = nl2br(htmlentities($_POST['address'],ENT_QUOTES,'UTF-8'));
$address = stripslashes($address);
$donate_amount = stripslashes($donate_amount);

	 $fname = str_replace("`", "", $fname);
	 $lname = str_replace("`", "", $lname);
	 $email = str_replace("`", "", $email);
	 $phone = str_replace("`", "", $phone);
	 $address = str_replace("`", "", $address);
	 $note = str_replace("`", "", $note);
	 $donate_amount = str_replace("`", "", $donate_amount);

	 $fname = mysqli_real_escape_string($link, $_POST["fname"]);
	 $lname = mysqli_real_escape_string($link, $_POST["lname"]);
	 $email = mysqli_real_escape_string($link, $_POST["email"]);
        $phone = mysqli_real_escape_string($link, $_POST["phone"]);
        $address = mysqli_real_escape_string($link, $_POST["address"]);
        $note = mysqli_real_escape_string($link, $_POST["note"]);
        $donate_amount = mysqli_real_escape_string($link, $_POST["donate_amount"]);

$numchars = rand(3,4); 
$chars = explode(',','A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9'); 
$random=''; 
for($i=0; $i<$numchars;$i++)  { 
  $random.=$chars[rand(0,count($chars)-1)];

$donnorpaynumber = "$random";
   }

    if (isset($_POST['fname'])) {

  if ($donate_amount == "") {
 $amount = "$amount";
$real_amt = "$amount";
$amount =  $amount * 320.42;
//$amount = $amount * 100;
//$amount = 1000000;
} else {
$donate_amount =  str_replace(".00", "", $donate_amount);
$donate_amount =  str_replace("euros", "", $donate_amount);
$donate_amount =  str_replace("dollars", "", $donate_amount);
$donate_amount =  str_replace("dollar", "", $donate_amount);
$real_amt = "$donate_amount";
$donate_amount =  $donate_amount * 320.42; ///// This is where the amount is times by the current exchange rate of dollar to naira
//$donate_amount = $donate_amount * 100;
$amount = "$donate_amount";
 }

$amt1 = "$amount";

 include "/home/jfmedia1/public_html/incs/options.php";

	 //$_SESSION['amt4hash'] =  $amt1;
	 //$tref =  $_SESSION['genref'];

 $amount = $amount/100;
       $amount = number_format($amount, 2, ',', ' ');

 include "/home/jfmedia1/public_html/dbconnection.php";
   $sql = mysqli_query($link, "INSERT INTO donations VALUES('','$cc','$reference','','','','$fname','$lname','$address','$phone','$email','$note','$donate_type','$amount','$real_amt','CC','$media','1', now())");

echo '<table style="width:100%;height:100%;"><tr>
<td style="vertical-align:middle">
<form id="" action="https://webpay.interswitchng.com/paydirect/pay" method="post">
<input name="product_id" type="hidden" value="' . $pdtid .'">
                                <input name="pay_item_id" type="hidden" value="' . $payitemid .'">
                                <input name="currency" type="hidden" value="566" >
                                <input name="amount" type="hidden" value="' . $amt1 . '">
                                <!--<input name="txn_ref" type="hidden" value="' . $reference .'">-->
                                <input name="txn_ref" type="hidden" value="' . $reference .'">
                    <input name="site_redirect_url" type="hidden" value="http://www.jfmedias.com/script/payweb/response.php">
                                <input name="cust_name" type="hidden" value="' . $fname . ' ' . $lname . '">
                                <input name="site_name" type="hidden" value="http://www.jfmedias.com/">
                                <input name="cust_id" type="hidden" value="' . $reference . '">
<input name="hash" type="hidden" value="' . dohash($amt1) . '" />
<div id="setting_pass" style="padding:2px;font-size:16px;"><input name="log-submit" constant="search" class="ui-donate-submit submit-link" id="ui-donate-submit" type="submit" data-type="submit" style="width:98%;font-size:16px;outline:none;padding:12px;color:#fff;background:#ccac00;border:0px #aaa solid;cursor:pointer;font-family:Trebuchet MS,sans-serif;" value="CLICK HERE TO MAKE YOUR PAYMENT">
  </div>
</form>
</td></tr></table>';

  }

?>
