<?php
echo 'TestCookie:' . $_COOKIE['TestCookie'] . "<br />\n";

// array cookie
if (isset($_COOKIE['info'])) {
    foreach ($_COOKIE['info'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}
?>