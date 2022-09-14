<?php

    $to = "info@lifechanger.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['topic'];
    $number = $_REQUEST['phone'];
    $cmessage = $_REQUEST['msg'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a new mail.";

    $logo = 'img/life-changer.png';
    $link = 'index.html';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>LifeChanger College</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt='lifechanger-logo' width='80px'></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Phone Number:</strong> {$number}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Service of Topic:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

	//redirect to the ‘thank you’ page

    header('Location: http://www.lifechanger.com/thankyou.html');
    exit;

?>