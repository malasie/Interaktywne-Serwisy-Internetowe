<?php
if (!isset($_COOKIE['imie'])){
    echo "Ciasteczko o nazwie imie nie jest ustawione";
}
else echo $_COOKIE['imie'];
?>