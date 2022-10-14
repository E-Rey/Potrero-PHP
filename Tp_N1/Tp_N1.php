<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico N1</title>
</head>

<body>
    <h1>TRABAJO PRACTICO N1</h1>
    <br>
    <h2>Punto Numero 1 - Imprima por pantalla: "Hola mundo"</h2>
    <?php
    echo "Hola mundo";
    ?>
    <br>
    <h2>Punto Numero 2 - Cargue en una variable la cadena de caracteres "Hola mundo" y luego la imprima por pantalla.</h2>
    <?php
    $var1 = "Hola mundo";
    echo $var1;
    ?>

    <h2>Punto Numero 3 - Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicacion, la division
        entera y el resto de la division entera.
    </h2>

    <?php
    $num1 = 57;
    $num2 = 44;
    echo "Suma";
    echo $num1 + $num2;
    echo "Resta";
    echo $num1 - $num2;
    echo "multiplicacion";
    echo $num1 * $num2;
    echo "division";
    echo $num1 + $num2;
    echo "Modulo";
    echo $num1 + $num2;
    ?>
    <h2>Punto Numero 4 - Realizar la transformacion de grados Celsius a Fahrenheit, para el valor 20C y luego lo imprima por
        pantalla</h2>
    <p>Vamos a realiza la equivalencia de 25 grados celcius a grados Fahrenheit, la formula es la siguiente ºF=(ºC*1,8)+32</p>
    <?php
    $celcius = 20;
    echo $conversion = ($celcius * 1.8) + 32;
    ?>
    <br>
    <h2>Punto Numero 5 - Implementar algoritmos que permitan: </h2>

    <h3>a) Calcular el perimetro y el area de un rectangulo, dado que su base es 18cm y su altura 12cm.</h3>
    <?php
    $base = 18;
    $altura = 12;
    print "Lados del Rectángulo: $base cm y $altura cm</p>\n";
    print "<p>Perímetro: " . (2 * $base) + (2 * $altura) . " cm</p>\n";
    print "<p>Área: " . $base * $altura . " cm^2</p>";
    ?>
    <br>
    <h3>b) Calcular el perametro y el area de un circulo dado que su radio es de 30cm.</h3>
    <?php
    $radio = 30;
    print "El radio del círculo es: $radio cm </p>\n";
    define("PI", 3.14159);
    print "<p>Teniendo en cuenta que el valor de pi es " . PI . "</p>\n";
    print "<p>Perímetro: " . 2 * PI * $radio . " cm</p>\n";
    print "<p>Área: " . PI * ($radio ** 2) . " cm^2</p>";

    ?>


    <?php
    ?>



</body>

</html>