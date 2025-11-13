<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Servidor - Hamza Satori</title>
</head>
<body>
    <?php
    // Declaro las variables nombre,modulo,nota_media y si es_matriculado

        $nombre_alumno = "Hamza Satori";
        $modulo = "Desarrollo Web en Entorno Servidor";
        $nota_media = 7.5;
        $es_matriculado = true;
    // Imprimo todas las varibles

        echo "<h1>Nombre: $nombre_alumno</h1>";
        echo "<h2>Módulo: $modulo</h2>";
        echo "<p>Mi nota media actual es: $nota_media</p>";
        echo '<p>Mi nota media actual es: $nota_media</p>';

    // Creo la estructura if else para validar la nota dependiendo de la de lo que ha sacado el alumno

        echo "Tu nota es un: ";
        if($nota_media >= 9 && $nota_media <=10){
            echo "Sobresaliente";
        }elseif($nota_media >= 7 && $nota_media < 9){
            echo "Notable";
        }elseif($nota_media >= 5 && $nota_media < 7){
            echo "Aprobado";
        }else{
            echo "Suspenso";
        }
    // Compruebo si el alumno esta matriculado con un if simple
    
    echo "<br><br>";
        if($es_matriculado){
            echo "Estado: Alumno matriculado";
        }
    /*Creo la tabla con el bucle while dandole un borde, donde creo dos columnas y 5 filas, en el que en primera columna 
    esta Fila número y en la segunda columna hay un contador desde la primera fila hasta la última*/

    echo "<br><br>";
    echo "<table border=1>";
        $i = 1;
        while($i <= 5){
            echo "<tr>";
            echo "<td>Fila número:</td>";
            echo "<td>$i</td>";
            echo "</tr>";
            $i++;
        }

    echo "</table>";

    ?>
    
</body>
</html>