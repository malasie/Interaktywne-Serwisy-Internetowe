<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Funkcje
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  #zad2
    function pierwszaFunkcja() {
        return "Widomosc z pierwszej funkcji";
    }
    echo pierwszaFunkcja();
    echo "</br>";

  #zad3
    function funkcjaZArgumentami($imie, $nazwisko="Nowak"){
        return "Hello ".$imie." ".$nazwisko."</br>";
    }
    echo funkcjaZArgumentami("Jan", "Drążkowski");
    echo funkcjaZArgumentami("Anna");
    echo "</br>";

  #zad4
    function funkcjaZNieznanaLiczbaArgumentow(){
        $args = func_get_args();
        if (func_num_args() != 2) {
            return "<br />Dozwolone są tylko dwa argumenty!" . "</br>";
        } else {
            return "<br />Arg 1: " . $args[0] . " and Arg 2: " . $args[1] . "</br>";
        }
      }

    echo funkcjaZNieznanaLiczbaArgumentow("cytryny", "kamienie");
    echo funkcjaZNieznanaLiczbaArgumentow("cytryny", "pomarańcze", "banany");

  #zad5
    function funkcjaZReferencja(&$imie){
        $imie = strtolower($imie) . " zostal zmieniony poprzez referencje do zmiennej " . "</br>";
    }
    $imieDoReferencji = "Anna";
    funkcjaZReferencja($imieDoReferencji);
    
    echo $imieDoReferencji;
    ?>
</div>