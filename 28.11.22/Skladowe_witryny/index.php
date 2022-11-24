<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">

  <title>Składowe witryny</title>
</head>
<body>


<form action="src/ciasteczko.php">

<?php 
#zad2 i 3 
?>
<h1 class="center flex">
    Formularze
</h1>
<div class="center flex one-450 two-450">
    <div>
        <form action="src/potwierdzenieGET.php" method="GET">
            <form method="GET">
                <div style="background-color:DodgerBlue;">
                <h2 class="center flex" style= "color:white">
                    metoda GET
                </h2>
                </div>
                <div>
                    <label for="imie">Imie</label>
                    <input name="imie">
                </div>
                <div>
                    <label for="nazwisko">Nazwisko</label>
                    <input name="nazwisko">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input name="email">
                </div>
                <button type="submit" name="zatwierdz" value="zatwierdzenie">
                    Wyslij
                </button>
            </form>
    </div>
    <div name="POST">
        <?php 

        #zad 4 i 5
        ?>
        
        <form action="src/potwierdzeniePOST.php" method="POST">

        <form method="POST">
        <div style="background-color:DodgerBlue;">
                <h2 class="center flex" style= "color:white">
                    metoda POST
                </h2>
        </div>
        <div>
            <label for="imie">Imie</label>
            <input name="imie">
        </div>
        <div>
            <label for="nazwisko">Nazwisko</label>
            <input name="nazwisko">
        </div>
        <div>
            <label for="email">Email</label>
            <input name="email">
        </div>
        <button type="submit" name="zatwierdz" value="zatwierdzenie">
            Wyslij
        </button>
    </form>
    </div>
</div>

 


</body>
</html>