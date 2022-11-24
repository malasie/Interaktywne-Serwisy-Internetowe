<?php
if($_POST['zatwierdz']) {
    $cookie_value ['imie'] = urlencode($_REQUEST['imie']);
    setcookie("hide_menu", "1");
    header("Location: " . $_SERVER['HTTP_REFERER']);
}


?>