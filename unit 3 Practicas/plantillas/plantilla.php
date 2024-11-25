<?php
// Comenzar la tabla con borde y espacio interno
echo '<table border="1" cellpadding="10">';

// Encabezados de la tabla
echo '<tr>'; // Inicio de la fila de encabezados
echo '<th>Encabezado 1</th>'; // Columna 1 de encabezado
echo '<th>Encabezado 2</th>'; // Columna 2 de encabezado
echo '<th>Encabezado 3</th>'; // Columna 3 de encabezado
echo '</tr>'; // Fin de la fila de encabezados

// Fila 1 de datos
echo '<tr>'; // Inicio de la fila de datos 1
echo '<td>Dato 1.1</td>'; // Columna 1 de datos
echo '<td>Dato 1.2</td>'; // Columna 2 de datos
echo '<td>Dato 1.3</td>'; // Columna 3 de datos
echo '</tr>'; // Fin de la fila de datos 1

// Fila 2 de datos
echo '<tr>'; // Inicio de la fila de datos 2
echo '<td>Dato 2.1</td>'; // Columna 1 de datos
echo '<td>Dato 2.2</td>'; // Columna 2 de datos
echo '<td>Dato 2.3</td>'; // Columna 3 de datos
echo '</tr>'; // Fin de la fila de datos 2

// Cerrar la tabla
echo '</table>';

// Ilustración de la estructura de la tabla
/*
    <table se abre>

      columna <th>              columna <th>      columna <th>
    +-----------------+-----------------+-----------------+
    |  Encabezado 1   |  Encabezado 2   |  Encabezado 3   |  // Fila de Encabezados (fila 1) <tr> es la fila cuando se cierra y se abre otra se va a la siguiente fila. <td> son los elementos adjuntos 
    +-----------------+-----------------+-----------------+  // a esa fila que se recorren horizontalmente.
    |     Dato 1.1    |     Dato 1.2    |     Dato 1.3    |  // Fila de Datos (fila 2)
    +-----------------+-----------------+-----------------+
    |     Dato 2.1    |     Dato 2.2    |     Dato 2.3    |  // Fila de Datos (fila 3)
    +-----------------+-----------------+-----------------+
    <table se cierra>
*/

// Usar comillas simples: el comando para poner comillas simples es '', no olvidar que para cerrar es / y lo que es ejemplo </tr>
?>
