<?php
/* 
Programa que separa a las personas por grupos según sus edades utilizando arreglos. 
Grupo 1: Menores de 18 años
Grupo 2: Entre 18 y 49 años
Grupo 3: 50 años y más
El programa muestra en pantalla el nombre del individuo y su correspondiente grupo.
Aguilar Gracia Luis Abisai 
3°A Programación Matutino
*/

$nombres = array("Lili", "Neft", "Zhaid", "paco", "lalo", "paty", "beto", "vero");
//xd por que puse el nombre de mi ex
$edad = array(16, 16, 37, 67, 34, 25, 16, 51);

$grupo1 = array();
$grupo2 = array();
$grupo3 = array();

for ($i = 0; $i < count($nombres); $i++) {
    if ($edad[$i] < 19) {
        $grupo1[] = 1;
        $grupo2[] = 0;
        $grupo3[] = 0;
    } elseif ($edad[$i] < 50) {
        $grupo1[] = 0;
        $grupo2[] = 1;
        $grupo3[] = 0;
    } else { 
        $grupo1[] = 0;
        $grupo2[] = 0;
        $grupo3[] = 1;
    }
}

// Mostrar los datos en una tabla super meja recontra facherita :)
echo "<h2>Nombres, Edades y Grupos</h2>";
echo '<table border="1" cellpadding="10">';
echo '<tr><th>Nombre</th><th>Edad</th><th>Grupo 1</th><th>Grupo 2</th><th>Grupo 3</th></tr>';

for ($i = 0; $i < count($nombres); $i++) { 
    echo '<tr>';
    echo '<td>' . $nombres[$i] . '</td>';
    echo '<td>' . $edad[$i] . '</td>';
    echo '<td>' . $grupo1[$i] . '</td>';
    echo '<td>' . $grupo2[$i] . '</td>';
    echo '<td>' . $grupo3[$i] . '</td>';
    echo '</tr>';
}
echo '</table>';

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
/*
───────────────────────────────────────────────────────────────────────────────────────────────────────────
─██████████████─██████████████───██████████████─██████████─██████████████────██████████████─██████████████─
─██░░░░░░░░░░██─██░░░░░░░░░░██───██░░░░░░░░░░██─██░░░░░░██─██░░░░░░░░░░██────██░░░░░░░░░░██─██░░░░░░░░░░██─
─██░░██████████─██░░██████░░██───██████░░██████─████░░████─██░░██████████────██░░██████░░██─██░░██████░░██─
─██░░██─────────██░░██──██░░██───────██░░██───────██░░██───██░░██────────────██░░██──██░░██─██░░██──██░░██─
─██░░██─────────██░░██████░░████─────██░░██───────██░░██───██░░██████████────██░░██████░░██─██░░██████░░██─
─██░░██─────────██░░░░░░░░░░░░██─────██░░██───────██░░██───██░░░░░░░░░░██────██░░░░░░░░░░██─██░░░░░░░░░░██─
─██░░██─────────██░░████████░░██─────██░░██───────██░░██───██████████░░██────██░░██████░░██─██████████░░██─
─██░░██─────────██░░██────██░░██─────██░░██───────██░░██───────────██░░██────██░░██──██░░██─────────██░░██─
─██░░██████████─██░░████████░░██─────██░░██─────████░░████─██████████░░██────██░░██████░░██─██████████░░██─
─██░░░░░░░░░░██─██░░░░░░░░░░░░██─────██░░██─────██░░░░░░██─██░░░░░░░░░░██────██░░░░░░░░░░██─██░░░░░░░░░░██─
─██████████████─████████████████─────██████─────██████████─██████████████────██████████████─██████████████─
───────────────────────────────────────────────────────────────────────────────────────────────────────────
*/


/* Escuelas Secundarias Técnicas
Juventud entusiasta y febril
El deporte, el estudio y el trabajo
Son la meta que hemos de seguir
Escuelas Secundarias Técnicas
Semilleros de porvenir
En tus aulas forjas los técnicos
Que engrandecen a nuestro país
El deporte en nuestra vida
Es salud y bienestar
En competencias, la alegría
Es paz, amor y hermandad
Marchemos, Secundarias Técnicas
Estudiando con dedicación
En el trabajo está el progreso
En el deporte, la salud
En el trabajo está el progreso
En el deporte, la salud
¡Escuelas Secundarias Técnicas!
¡Para la superación de México, México, México! */


?>