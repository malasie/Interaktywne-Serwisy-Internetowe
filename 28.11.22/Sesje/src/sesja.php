<?php
    session_start();

    if (!empty($_SESSION['nazwisko'])) {
      echo $_SESSION['nazwisko'];
    }
?>