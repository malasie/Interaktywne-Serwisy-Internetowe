<?php
    session_start();

    if($_POST['zatwierdz']) {
        $_SESSION['nazwisko'] = urlencode($_REQUEST['nazwisko']);
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
?>