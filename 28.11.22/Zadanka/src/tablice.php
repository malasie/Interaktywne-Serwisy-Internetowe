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
    $nowaTablica = array("klucz1" => "wartoscJeden", "klucz2" => "DrugaWartosc");
    echo $nowaTablica["klucz2"], "</br>";

    $nowaTablica["klucz2"] = "innaWartosc";
    echo $nowaTablica["klucz2"], "</br>";

    $reversed = array_reverse($nowaTablica);
    print_r($reversed);
    echo "</br></br>";

  #zad4
    function sprawdzCzyJest($wartoscSzukana, $tablica)
    {
      if (in_array($wartoscSzukana, $tablica)) {
        echo "jest", "</br>";
      } else {
        echo "nie ma", "</br>";
      }
    }
  
    sprawdzCzyJest("czwarty", $tablica);
    sprawdzCzyJest("piąty", $tablica);
  
    echo "</br></br>";

  #zad5
    $imiona = array('Jan', 'Monika', 'Dominik', 'Patryk');
    natcasesort($imiona);
    print_r($imiona);
    echo "</br></br>";

    $tablicaLiczbowa = array(1, 2, 4, 9, 8, 7, 6);

    rsort($tablicaLiczbowa);
    print_r($tablicaLiczbowa);
    echo "</br></br>";

    shuffle($tablicaLiczbowa);
    print_r($tablicaLiczbowa);
    echo "</br></br>";
  
  ?>
</div>