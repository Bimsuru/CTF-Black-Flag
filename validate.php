<?php


$lvlstatus="flag_captured";
$val_string=$_POST["flag_unvalidated"].$_POST["level_code"].$lvlstatus;
$flagid=(int)$_POST["level_id"];
$flags=array("error","ad4214bbd31be345ca736a7688079e97054b9ad0","bc81883c37cd66d71de13cf9727729dd579c696c","7602f2b09dde4938946891d6d2223c0ee4efe6a6","cf9b01ead0ab1c64ffc327eddbd160bb640d06f8","f5b326765c9aa4aa7f3ff808827754b6a5ddd9d9",sha1("flag6"),sha1("flag7"),"99e88b7f0f95ab176bdee429757d1a315f881cbd","c257d74726d1c83cbc3084ea1b560d6c89764d06","16b05537dcd7cecbbf37a3773cd1365e01178611","32df8f7e1df3906f3463171d28ead95862d39d60",sha1("flag12"),sha1("flag13"),sha1("flag14"),sha1("flag15"));




if($flags[$flagid]==sha1($_POST["flag_unvalidated"])){
	$cookie_name=sha1($_POST["level_code"]);
	$cookie_value = sha1($val_string);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	header("Location:dashboard.php");
}else{
	header("Location:dashboard.php");
	
}



?>