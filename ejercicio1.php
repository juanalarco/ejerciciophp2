<?php
//Creacion de variable

$puntuacion=110;

//Creacion de If

if ($puntuacion>=100 ) {
  echo "Tu nota es $puntuacion y por eso puedes entrar en todas las facultades";
} elseif ($puntuacion==90) {
  echo "Tu notas es $puntuacion y por eso puedes entrar en Electronica, Industrial y
  Administracion";
} elseif ($puntuacion==80) {
  echo "Tu nota es $puntuacion y por eso puedes entrar en Industrial y
  Administracion";
} elseif ($puntuacion==70) {
  echo "Tu nota es $puntuacion y solo puedes entrar en Administracion";
}
 ?>
