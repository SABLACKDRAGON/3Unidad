

<?php
/* P41Array21.php

Programa que almacena en un arreglo llamado $Compras el valor de 6 compras posteriormente en otros arreglos se debe almacenar información de acuerdo a las siguientes condiciones
El contenido del arreglo $Descuentos so Benará de la siguiente manera Si el valor de la compra es menor o igual a 300 el descuento es O
Si la compra es mayor de 300 pero menor o igual a 1000 se calculará un descuento del 10% Si la compra es mayor de 1000 pero menor o igual a 2500 se calculará un descuento del 15%
Si la compra es mayor de 2500 pero menor o igual a 5000 se calculará un descuento del 20%
Si la compra es mayor de 5000 se calculará un descuento del 25%
En el arreglo $Total se coloca la diferencia entre la compra y el descuento En el arreglo $Porcentaje colocar el porcentaje que se le aplicó de descuento
  Aguilar Gracia Luis Abisai 
   3°A Programación Matutino

⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣶⣶⣶⣦⠀⠀
⠀⠀⣠⣤⣤⣄⣀⣾⣿⠟⠛⠻⢿⣷⠀
⢰⣿⡿⠛⠙⠻⣿⣿⠁⠀⠀ ⠀⣶⢿⡇
⢿⣿⣇⠀⠀⠀⠈⠏⠀⠀⠀ CBTIS 89
⠀⠻⣿⣷⣦⣤⣀⠀⠀⠀ ⠀⣾⡿⠃⠀
⠀⠀⠀⠀⠉⠉⠻⣿⣄⣴⣿⠟⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣿⡿⠟⠁⠀⠀⠀


██╗░░░░░██╗░░░██╗██╗░██████╗  ░█████╗░██████╗░██╗░██████╗░█████╗░██╗
██║░░░░░██║░░░██║██║██╔════╝  ██╔══██╗██╔══██╗██║██╔════╝██╔══██╗██║
██║░░░░░██║░░░██║██║╚█████╗░  ███████║██████╦╝██║╚█████╗░███████║██║
██║░░░░░██║░░░██║██║░╚═══██╗  ██╔══██║██╔══██╗██║░╚═══██╗██╔══██║██║
███████╗╚██████╔╝██║██████╔╝  ██║░░██║██████╦╝██║██████╔╝██║░░██║██║
╚══════╝░╚═════╝░╚═╝╚═════╝░  ╚═╝░░╚═╝╚═════╝░╚═╝╚═════╝░╚═╝░░╚═╝╚═╝

░█████╗░░██████╗░██╗░░░██╗██╗██╗░░░░░░█████╗░██████╗░  ░██████╗░██████╗░░█████╗░░█████╗░██╗░█████╗░
██╔══██╗██╔════╝░██║░░░██║██║██║░░░░░██╔══██╗██╔══██╗  ██╔════╝░██╔══██╗██╔══██╗██╔══██╗██║██╔══██╗
███████║██║░░██╗░██║░░░██║██║██║░░░░░███████║██████╔╝  ██║░░██╗░██████╔╝███████║██║░░╚═╝██║███████║
██╔══██║██║░░╚██╗██║░░░██║██║██║░░░░░██╔══██║██╔══██╗  ██║░░╚██╗██╔══██╗██╔══██║██║░░██╗██║██╔══██║
██║░░██║╚██████╔╝╚██████╔╝██║███████╗██║░░██║██║░░██║  ╚██████╔╝██║░░██║██║░░██║╚█████╔╝██║██║░░██║
╚═╝░░╚═╝░╚═════╝░░╚═════╝░╚═╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝  ░╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝░╚════╝░╚═╝╚═╝░░╚═╝


El codigo esta aqui abajo */



// Definir los arreglos de compras, descuentos, totales y porcentajes y mucha mas encontraras en coppel.com visita nuestro citio web
$Compras = array(800, 2700, 1900, 150, 7600, 1000);
$Descuentos = array();
$Total = array();
$Porcentaje = array();

// Recorremos el arreglo de compras para calcular los descuentos, totales y porcentajes, etc ya me aburri saquenme de aqui
for ($i = 0; $i < count($Compras); $i++) {
    // Calcular el descuento y porcentaje basado en el valor de la compra directamente desde los arreglos
    if ($Compras[$i] <= 300) {
        $Descuentos[$i] = 0;
        $Porcentaje[$i] = "0%";
    } elseif ($Compras[$i] > 300 && $Compras[$i] <= 1000) {
        $Descuentos[$i] = $Compras[$i] * 0.10;
        $Porcentaje[$i] = "10%";
    } elseif ($Compras[$i] > 1000 && $Compras[$i] <= 2500) {
        $Descuentos[$i] = $Compras[$i] * 0.15;
        $Porcentaje[$i] = "15%";
    } elseif ($Compras[$i] > 2500 && $Compras[$i] <= 5000) {
        $Descuentos[$i] = $Compras[$i] * 0.20;
        $Porcentaje[$i] = "20%";
    } else {
        $Descuentos[$i] = $Compras[$i] * 0.25;
        $Porcentaje[$i] = "25%";
    }
    
    // Calcular el total después del descuento
    $Total[$i] = $Compras[$i] - $Descuentos[$i];
}

// Mostrar los resultados en una tablita porque pablito cablo un clabito
echo "<h3>Resumen de Compras y Descuentos</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Compra</th><th>Descuento</th><th>Total</th><th>Porcentaje</th></tr>";

for ($i = 0; $i < count($Compras); $i++) {
    echo "<tr>";
    echo "<td>".$Compras[$i]."</td>";
    echo "<td>".$Descuentos[$i]."</td>";
    echo "<td>".$Total[$i]."</td>";
    echo "<td>".$Porcentaje[$i]."</td>";
    echo "</tr>";
}

echo "</table>";


echo '<pre style="font-family: \'Courier New\', Courier, monospace; font-size: 12px;">
██╗░░░░░██╗░░░██╗██╗░██████╗  ░█████╗░██████╗░██╗░██████╗░█████╗░██╗
██║░░░░░██║░░░██║██║██╔════╝  ██╔══██╗██╔══██╗██║██╔════╝██╔══██╗██║
██║░░░░░██║░░░██║██║╚█████╗░  ███████║██████╦╝██║╚█████╗░███████║██║
██║░░░░░██║░░░██║██║░╚═══██╗  ██╔══██║██╔══██╗██║░╚═══██╗██╔══██║██║
███████╗╚██████╔╝██║██████╔╝  ██║░░██║██████╦╝██║██████╔╝██║░░██║██║
╚══════╝░╚═════╝░╚═╝╚═════╝░  ╚═╝░░╚═╝╚═════╝░╚═╝╚═════╝░╚═╝░░╚═╝╚═╝

░█████╗░░██████╗░██╗░░░██╗██╗██╗░░░░░░█████╗░██████╗░  ░██████╗░██████╗░░█████╗░░█████╗░██╗░█████╗░
██╔══██╗██╔════╝░██║░░░██║██║██║░░░░░██╔══██╗██╔══██╗  ██╔════╝░██╔══██╗██╔══██╗██╔══██╗██║██╔══██╗
███████║██║░░██╗░██║░░░██║██║██║░░░░░███████║██████╔╝  ██║░░██╗░██████╔╝███████║██║░░╚═╝██║███████║
██╔══██║██║░░╚██╗██║░░░██║██║██║░░░░░██╔══██║██╔══██╗  ██║░░╚██╗██╔══██╗██╔══██║██║░░██╗██║██╔══██║
██║░░██║╚██████╔╝╚██████╔╝██║███████╗██║░░██║██║░░██║  ╚██████╔╝██║░░██║██║░░██║╚█████╔╝██║██║░░██║
╚═╝░░╚═╝░╚═════╝░░╚═════╝░╚═╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝  ░╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝░╚════╝░╚═╝╚═╝░░╚═╝
</pre>';
?>

