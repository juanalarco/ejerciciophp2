<?php
//Creacion de variable

$colegio='particular';
$nivel='C';
//Creacion de If

if ($colegio=='nacional' && $nivel=='A') {
  echo "Tu importe a pagar es 300€";
} elseif ($colegio=='particular' && $nivel=='A') {
  echo "Tu importe a pagar es 400€";
}
  if ($colegio=='nacional' && $nivel=='B') {
    echo "Tu importe a pagar es 200€";
  } elseif ($colegio=='particular' && $nivel=='B') {
    echo "Tu importe a pagar es 300€";
}
    if ($colegio=='nacional' && $nivel=='C') {
      echo "Tu importe a pagar es 100€";
    } elseif ($colegio=='particular' && $nivel=='C') {
      echo "Tu importe a pagar es 200€";
}


 ?>
