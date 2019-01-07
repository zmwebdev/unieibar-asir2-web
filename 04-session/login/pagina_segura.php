<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Kaixo " . $_SESSION['user'];

    // sigue el código ...

} else {
    header('Location: '."login.html");
}
