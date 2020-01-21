<?php
session_start();
if (isset($_SESSION['count'])) {
  echo "Session inicializada";
} else {
  echo "No tengo session. Redirigir";
}

?>