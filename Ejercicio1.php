<?php
// 1.Tenga un array con estudiantes y sus notas:
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

//2.Cree una función calcularPromedio($notas) que devuelva el promedio.
function calcularPromedio($notas) {
  $cantidad = count($notas);
  if ($cantidad === 0) {
    return "No hay notas";
  } 
  else {
    $suma = array_sum($notas);
    $promedio = $suma/$cantidad;
    return $promedio;
  }
}

//3.Recorra todos los estudiantes y muestre nombre/promedio/aprobado o suspenso.
foreach ($estudiantes as $nombre => $notas) {
  $media = number_format(calcularPromedio($notas),1);
  if ($media < 6) {
    $notaGeneral = "suspens@";
  } else {
    $notaGeneral = "aprobado@";
  }
  echo "$nombre tiene una nota media de $media por tanto está $notaGeneral" . PHP_EOL;
}

//4.Al final muestre cunatos aprobraron y cuantos suspendieron.
$totalAprobados = 0;
$totalSuspensos = 0;
foreach ($estudiantes as $nombre => $notas) {
  if (calcularPromedio($notas) < 6) {
    $totalSuspensos++;
  } else {
    $totalAprobados++;
  }
}
echo "Hay un total de $totalAprobados aprobados y de $totalSuspensos suspensos". PHP_EOL;

//5. Muestra el estudiante con el promedio más alto.
$mejorPromedio = 0;
$mejorEstudiante = "";
foreach ($estudiantes as $nombre => $notas) {
  if (calcularPromedio($notas) > $mejorPromedio) {
    $mejorPromedio = calcularPromedio($notas);
    $mejorEstudiante = $nombre;
  }  
}
echo "El/La mejor estudiante es $mejorEstudiante con una nota media de " . number_format($mejorPromedio,1) . PHP_EOL;

?>

