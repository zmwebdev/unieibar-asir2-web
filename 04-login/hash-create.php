<?php

// https://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/

$pass = 'p1';
$hash = password_hash($pass, PASSWORD_DEFAULT);
echo $hash;

