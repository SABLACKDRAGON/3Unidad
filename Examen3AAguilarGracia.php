<?php
/* PROGRAMA QUE ALMACENA EL NOMBRE DE CUATRO ARTICULOS EN UN ARREGLO LLAMADO $PRODUCTOS Y EN OTRO ARREGLO MULTIDIMENSIONA LLAMADO PRECIO ALMACENA LOS PRECIOS CORRESPONDIENTES DE 3 MESES , ESTO SE HACE POR MEDIO DE FILAS Y COLUMNAS. Luis Abisai Aguilar Gracia */



$productos = ["Vestido", "Pantalón", "Cinturón", "Camiseta"];
$precios = [
    [500, 600, 550],
    [800, 700, 600],
    [400, 200, 300],
    [500, 200, 500]
];

$subtotales = [];
$promedios = [];

for ($i = 0; $i < count($precios); $i++) {
    $subtotal = 0;
    for ($j = 0; $j < count($precios[$i]); $j++) {
        $subtotal += $precios[$i][$j];
    }
    $subtotales[$i] = $subtotal;
    $promedios[$i] = $subtotal / count($precios[$i]);
}

echo "TIENDA DE ROPA<br>";
echo "Productos Subtotal Promedio<br>";
for ($i = 0; $i < count($productos); $i++) {
    echo $productos[$i] . " ------- " . $subtotales[$i] . " ------- " . $promedios[$i] . "<br>";
}


?>