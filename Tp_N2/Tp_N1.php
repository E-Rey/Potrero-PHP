<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUCTURAS DE CONTROL: PARTE 1</title>
</head>

<body>

    <h1>Ejercicio 1</h1>
    <h3>Crear una variable n y validar que sea un número positivo.</h3>

    <?php
    $var1 = 78
    ?>
    <?php
    if ($var1 > 0) {
        echo " $var1 numero positivo";
    }
    ?>
    <br>
    <hr>

    <h1>Ejercicio 2</h1>
    <h3>Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h3>

    <?php
    $var2 = 9
    ?>
    <?php
    if ($var2 > 1 &  $var2 < 10) {
        echo "$var2 es mayor a 1 y  $var2 es menor a 10";
    }
    ?>
    <br>
    <hr>

    <h1>Ejercicio 3</h1>
    <h3>Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h3>

    <?php
    $var3 = 55
    ?>
    <?php
    if ($var3 > 10 or $var3 < 2) {
        echo "$var3 es mayor a 10";
    }
    ?>

    <br>
    <hr>

    <h1>Ejercicio 4</h1>
    <h3>Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h3>

    <?php
    $numero1 = 4;
    $numero2 = 7;
    ?>
    <?php
    if ($numero1 > $numero2) {
        echo "se muestra suma"($numero1 + $numero2);
    }
    ?>
    <br>
    <hr>
    <?php
    if ($numero1 > $numero2) {
        echo "se muestra resta"($numero1 - $numero2);
    }
    ?>
    <br>
    <hr>
    <?php
    if ($numero1 === $numero2) {
        echo "Los numeros ingresados son iguales";
    }
    ?>


</body>

</html>