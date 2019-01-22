<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("https://ipinfo.io/{$ip}/json"));
$browser = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
 if ($referred == "") {
  $referrer = "This page was accessed directly";
  }
echo "<b>Visitor IP address:</b><br/>" . $ip . "<br/>";
echo "<b>Browser (User Agent) Info:</b><br/>" . $browser . "<br/>";
echo "<b>Referrer:</b><br/>" . $referrer . "<br/>";
echo "<b>Location:</b><br/>" . $details->loc; // ->  . "<br/>";
echo "<br>";
echo "<b>Organization:</b><br/>" . $details->org; // ->  . ;
echo "<br>";
echo "<b>City:</b><br/>" . $details->city; // ->  . ;
echo "<br>";
echo "<b>State:</b><br/>" . $details->region; // ->  . ;
echo "<br>";
echo "<b>Country:</b><br/>" . $details->country; // ->  . ;
?>