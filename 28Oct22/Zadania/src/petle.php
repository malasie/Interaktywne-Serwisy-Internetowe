<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Petle
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  for ($i = 0; $i<10; $i++){
    echo $i;
  }
  echo ''.'</br>';
  $i=0;
  $j=5;
  while (($i< 10) and ($j <10)){
    $wynik= $i * $j;
    echo "$wynik\n";
    $i++;
    $j++;
  }
  for ($count=0; $count<10; $count++){
    echo "<!DOCTYPE HTML>",
        '<html>',
        '</html>';
  }

  ?>
</div>
