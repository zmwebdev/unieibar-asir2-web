<?php
// set the expiration date to one hour ago
setcookie ("TestCookie", "", time() - 3600);

setcookie ("info", "", time() - 3600);
?>