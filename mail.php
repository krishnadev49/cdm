<?php
$otp="A5RdS#3";
$e="maria15arackal@gmail.com";
$project_name="Restorent";
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
$mail             = new PHPMailer();
$body             = "your new password : $otp";
$mail->IsSMTP(); 
$mail->SMTPDebug  =1;                    
$mail->SMTPAuth   = true;                 
$mail->CharSet="UTF-8";
//$mail->SMTPSecure = "tls";                 
$mail->Host       = "mail.trinitytechnology.in"; 
$mail->Port       = 25;
$mail->Username   = "web@trinitytechnology.in";  
$mail->Password   = "abc123!@#";          
$mail->SetFrom('web@trinitytechnology.in', "$project_name"); 
$mail->Subject    = "OTP from $project_name";
$mail->MsgHTML($body);
$address = "$e";
$mail->AddAddress($address, "$project_name");

if($mail->Send()) {

echo"Success";
}
else
{
echo"failes";
}
?>