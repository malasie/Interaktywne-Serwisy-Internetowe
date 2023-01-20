<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Składowe witryny</title>
</head>
<body>
    <?php
    echo '<p>Hello World</p>';
    ?>
  <form action="src/potwierdzenieGET.php" method="GET">  
  <form method='GET'>
        <div>
            Metoda GET
        </div>
        <div>
            <label for="imie">
            Imie
            </label>
            <input name="imiie">
        </div>
        <div>
                <label for="nazwisko">Nazwisko</label>
                <input name="nazwisko">
            </div>
            <div>
                <label for="email">Email</label>
                <input name="email">
            </div>
        <div>
            <button
            type="submit"
            name="zatwierdz"
            value="zatwierdzenie"
            >
            Zatwierdz  
    </form>
</body>
</html>