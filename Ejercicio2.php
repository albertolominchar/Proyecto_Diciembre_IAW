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
?>