<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATRICES</title>
</head>

<body>

    <h1>Ejercicio 1</h1>
    <h3>
        Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
    </h3>
    <br>
    <?php
    $par = [2, 4, 6, 8, 10];
    foreach ($par as $numerop) {
        print "<p>$numerop</p>\n";
    }
    ?>

    <br>
    <hr>

    <h1>Ejercicio 2</h1>
    <h3>
        Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
        matriz. Mostrar el esquema del array con print_r().
    </h3>
    <br>

    <?php
    $variable1 = ["Pedro", "Ana", "34", "1"];
    print_r($variable1);
    ?>
    <br>
    <hr>
    <h1>Ejercicio 3</h1>
    <h3>
        Crear un array asociativo e introducir los siguientes valores:
    </h3>
    <?php
    $datos = ['Nombre' => "Pedro", 'Apellido' => "Torres", 'Direccion' => "Av. Mayor 3703", 'Telefono' => "1122334455"];
    ?>
    <br>
    <hr>
    <h1>Ejercicio 4</h1>
    <h3>
        Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
        Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
        Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.
    </h3>

    <?php
    $cuidades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
    foreach ($cuidades as $index => $ciudad) {
        print "<p>La ciudad con el índice " . $index . " tiene el nombre " . $ciudad . "</p>\n";
    }
    ?>

    <br>
    <hr>

    <?php
    for ($i = 0; $i < count($cuidades); $i++) {
        print("<p>La ciudad con el índice " . $i . " tiene el nombre " . $cuidades[$i] . "</p>\n");
    }
    ?>

    <br>
    <hr>

    <h1>Ejercicio 5</h1>
    <h3>
        Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
        LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
        Ejemplo: El índice de Madrid es MD.
    </h3>

    <?php

    $cuidades = [
        'MD' => 'Madrid',
        'BCL' => 'Barcelona',
        'LD' => 'Londres',
        'NY' => 'New York',
        'LA' => 'Los Ángeles',
        'CCG' => 'Chicago'
    ];

    foreach ($cuidades as $index => $ciudad) {
        print("<p>El índice de " . $ciudad . " es " . $index . "</p>\n");
    }

    ?>


</body>

</html>