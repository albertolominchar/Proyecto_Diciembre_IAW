<?php
//Crea un programa que analice la frase:
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

//1.Convertir el texto a minúsculas.
$textoMinusculas = mb_strtolower($texto);
echo "------------------------" . PHP_EOL;
echo "El texto en minúsculas es : " . $textoMinusculas . PHP_EOL;
echo "------------------------" . PHP_EOL;

//2.Contar cuántas palabras tiene.
$textoArray = explode(" ",$texto);
$cantidadPalabras = count($textoArray);
echo "El texto contiene " . $cantidadPalabras . " palabras" . PHP_EOL;
echo "------------------------" . PHP_EOL;

//3.Contar cuántas veces aparece cada palabra.
$contadorDePalabras = array_count_values($textoArray);
echo "Resultado de cuantas veces se repite cada palabra:" . PHP_EOL;
print_r($contadorDePalabras);
echo "------------------------" . PHP_EOL;

//4.Mostrar solo las palabras que aparecen más de una vez.
$masUnaPalabra = [];
foreach ($contadorDePalabras as $palabra => $cantidad) {
  if ($cantidad > 1) {
    array_push($masUnaPalabra, $palabra); 
  }
}
echo "Las palabras que se repiten más de una vez son: " . implode(", ", $masUnaPalabra) . PHP_EOL;
echo "------------------------" . PHP_EOL;

//5.Mostrar la palabra más repetida.
$cantidadMasRepetida = 1;
$palabraMasRepetida = "";
foreach ($contadorDePalabras as $palabra => $cantidad) {
  if ($cantidad > $cantidadMasRepetida) {
    $cantidadMasRepetida = $cantidad;
    $palabraMasRepetida = $palabra;
  }
}
echo "La palabra más repetida es: " . $palabraMasRepetida . PHP_EOL;
echo "------------------------" . PHP_EOL;

//6.Ignora palabras de menos de 3 letras.
$palabrasFiltradas = [];
foreach ($textoArray as $palabra) {
  if (mb_strlen($palabra) >= 3) {
    $palabrasFiltradas[] = $palabra;
  }
}
echo "La frase filtrada sería: " . implode(" ",$palabrasFiltradas) . PHP_EOL;
echo "------------------------" . PHP_EOL;