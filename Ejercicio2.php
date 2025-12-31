<?php
//Crea un carrito de compras con este formato:
$carrito = [
    ["nombre" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["nombre" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["nombre" => "Teclado", "precio" => 45, "cantidad" => 1],
];

//1.Mostrar cada producto con Nombre/Precio Unitario/Cantidad/Subtotal.
foreach ($carrito as $producto) {
  $subtotal = $producto["precio"]*$producto["cantidad"];
  echo "Producto: " . $producto["nombre"] . PHP_EOL;
  echo "Precio: " . $producto["precio"] . "€" . PHP_EOL;
  echo "Cantidad: " . $producto["cantidad"] . PHP_EOL;
  echo "Subtotal: " . $subtotal . "€" . PHP_EOL;
  echo "------------------------" . PHP_EOL;
}

//2.Calcular el total general.
$total = 0;
foreach ($carrito as $producto) {
  $subtotal = $producto["precio"]*$producto["cantidad"];
  $total = $total + $subtotal;
}
echo "Precio total: " . $total . "€" . PHP_EOL;
echo "------------------------" . PHP_EOL;

//3.Aplicar descuentos. Si el total > 1000 → 10% de descuento/Si el total > 500 → 5% de descuento/Si no → sin descuento.
if ($total > 1000) {
  $porcentajeAhorro = 0.1;
} elseif (500<$total) {
  $porcentajeAhorro = 0.05;
} else {
  $porcentajeAhorro = 0;
}
$descuento = $total*$porcentajeAhorro;
$precioFinal = $total - $descuento;

//4.Mostrar: Total sin descuento/Descuento aplicado/Total final
echo "Precio total: " . $total . "€" . PHP_EOL;
echo "------------------------" . PHP_EOL;
echo "Descuento aplicado: - " . $descuento . "€" . PHP_EOL;
echo "------------------------" . PHP_EOL;
echo "Precio final: " . $precioFinal . "€" . PHP_EOL;
echo "------------------------" . PHP_EOL;

//5.Usa una función calcularTotal($carrito)

function calcularTotal($carrito) {
  $total = 0;
  foreach ($carrito as $producto) {
    $subtotal = $producto["precio"]*$producto["cantidad"];
    $total = $total + $subtotal;
  }
  if ($total > 1000) {
    $porcentajeAhorro = 0.1;
  } elseif (500<$total) {
    $porcentajeAhorro = 0.05;
  } else {
    $porcentajeAhorro = 0;
  }
  $descuento = $total*$porcentajeAhorro;
  $precioFinal = $total - $descuento;
  return $precioFinal;
}
$totalPagar = calcularTotal($carrito);
echo "El total a pagar es " . $totalPagar . "€" . PHP_EOL;
echo "------------------------" . PHP_EOL;
?>
