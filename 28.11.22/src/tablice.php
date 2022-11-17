<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tablice
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  #zad2
    $tablica = array("pierwszy", "drugi", "czwarty");
    echo $tablica[2]; // zwraca drugie
    echo "</br>";

    foreach ($tablica as $a){
        echo $a,"</br>";
    }

    print_r($tablica);
    echo "</br>";   

    echo count($tablica), "</br>";

  #zad3       



  ?>
</div>