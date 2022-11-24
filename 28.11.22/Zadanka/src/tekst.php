<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tekst
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    #zad2
    $tekst = "Programowanie w PHP";
    echo strlen($tekst);
    echo "</br>";

    $zleSformatowanytekst = "Programowanie w PhP";
    echo strtolower($zleSformatowanytekst); 
    echo "</br>";
    echo strtoupper($zleSformatowanytekst);
    echo "</br></br>";

    $krotkiTekst = "kasztan ";
    echo str_repeat($krotkiTekst, 5);
    echo "</br></br>";

    $innyTekst = "dziobak ";
    echo str_repeat($innyTekst, 15);
    echo "</br></br>";

    #zad3
    $tekstDoOdworcenia = "tekst";
    $odwroconyTekst = strrev($tekstDoOdworcenia);
    echo "Slowo to ", $tekstDoOdworcenia, "</br>";
    echo "Slowo odworcone to ", $odwroconyTekst, "</br>";

    $tekstDoMieszania = "Tekst do pomieszania";
    echo str_shuffle($tekstDoMieszania);
    echo "</br>";

    $tekstDoWybrania = "Pierwsza czesc, druga czesc";
    $tekstDoWybrania = substr($tekstDoWybrania, 16, 20);
    echo $tekstDoWybrania;
    echo "</br>";

  ?>
</div>