<?php

// https://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/

$pass = 'p1';
$hash = password_hash($pass, PASSWORD_DEFAULT);
echo $hash;

$hash = '$2y$10$0oQAjTeZJA93WT6p.Xqp8ODf5DYtFMFIDxdkk50ZX01FBmErsg6sW';
//$hash = '$2y$10$uvlutkF7XmAWILbDDyM2b.DaE.WnZvHUrQz.T1Afonw2kICEGoLzW';
echo $hash . "<br>";

if (password_verify($pass, $hash)) {
    // Success!
    echo "Success!";
}
else {
    // Invalid credentials
    echo "Error!";
}

