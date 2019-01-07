<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."login.html");
}

// código ...
echo "Kaixo " . $_SESSION['user'];
