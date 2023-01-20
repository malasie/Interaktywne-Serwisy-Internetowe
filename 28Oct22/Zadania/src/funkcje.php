<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
    Funkcje
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  function pierwszaFunkcja()
  {
    return "Wiadomosc z pierwszej funkcji";
  }
  echo pierwszaFunkcja();
  echo "</br>";

  function funkcjaZArgumentami($imie, $nazwisko = "Nowak")
  {
    return "Hello " . $imie . " " . $nazwisko . "</br>";
  }
  echo funkcjaZArgumentami("Jan", "Drążkowski");
  echo "</br>";
  echo funkcjaZArgumentami("Kacper", "Szymański");
  echo "</br>";


  ?>
</div>