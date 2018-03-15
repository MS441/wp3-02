<?php
$apal = 100;
$botak = 0;
$hp = 200;
$load = 10;

while ($botak != 100) {
  for ($i=0; $i < 5; $i++) {
    $randPirates = rand(0, 10);
    $hp = $hp - $randPirates;
    if ($hp <=0) {die("Loď chcípla");}?>
  </br>
  <?php
    echo "Piráti ubrali $randPirates";?></br>
    <?php
    echo "Loď má $hp";?>
  </br>
    <?php
    }
  $apal = $apal - $load;
  echo "V Apalu je $apal";?>
</br>
  <?php
  $botak = $botak + $load;
  echo "V Botaku je $botak";?>
</br>
  <?php
  }
  ?>
