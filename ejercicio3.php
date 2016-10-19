<?php

$dado1=2;
$dado2=2;
$dado3=2;

if($dado1==6 && $dado2==6 && $dado3==6){
  echo "Tu puntuacion es oro";
}
elseif ($dado1==6 && $dado2==6 ||$dado1==6 && $dado3==6 ||$dado2==6 && $dado3==6){
  echo "Tu puntuacion es plata";
}

elseif ($dado1==6 || $dado2==6 ||$dado3==6){
  echo "Tu puntuacion es bronce";
}else {
  echo "Has perdido";
}
?>
