<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Warunki
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  $liczba=8;
  if ($liczba < 10){
    echo ('True'. '</br>');
  } else {
    echo ('False'. '</br>');
  } 
  $liczbaInna = 10;
  if ($liczbaInna < 10){
    echo 'Mniejsze niz 10' . '</br>';
  } else if ($liczbaInna==10){
    echo 'Równe do 10' . '</br>';
  } else{
    echo 'Musi byc wieksze niz 10' . '</br>';
  }
  $Liczba= 9;
  switch ($Liczba){
    case 7: echo 'To musi byc siedem!' . '</br>';
        break;
    case 8: echo 'To musi byc osiem!' . '</br>';
        break;
    case 9: echo 'To musi byc dziewięć!' . '</br>';
        break;
    default: echo 'To musi byc liczba inna niż siedem, osiem lub dziewięć!' . '</br>';
        break;
  }
  ?>
</div>
