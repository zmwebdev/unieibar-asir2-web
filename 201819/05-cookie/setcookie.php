<?php
$value = 'something from somewhere';

//setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* expire in 1 hour */
//setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);

// array cookie
// set the cookies
setcookie("info[three]", "cookiethree");
setcookie("info[two]", "cookietwo");
setcookie("info[one]", "cookieone");
?>
