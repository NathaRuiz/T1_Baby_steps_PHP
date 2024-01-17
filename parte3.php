<?php 
echo '<form action="index.php" method="get">';
echo '<button type="submit">INICIO</button>';
echo '</form>';

echo " <h2> Parte 3 </h2>";
$cadena = "mi gato tiene un collar verde";
$mayusculas = strtoupper($cadena);
echo "Original: $cadena <br><br>";
echo "En Mayusculas: $mayusculas <br><br>";
echo "Longitud de la cadena: " . strlen($cadena) . "<br><br>";
$palabras = str_word_count($cadena);
echo "Cantidad de palabras: $palabras <br><br>";
$inverso = strrev($cadena);
echo "Cadena en orden inverso: $inverso <br><br>";
$cadenaReemplazada = str_replace('gato', 'Michi', $cadena);
echo "Cadena con reemplazo: $cadenaReemplazada <br><br>";

$numero1 = 5;
$numero2 = 10;
echo "Variables tipo integer: \$numero1 = $numero1 , \$numero2 = $numero2 <br><br>";
$suma = $numero1 + $numero2;
echo "Suma de las variables: $suma <br><br>";

$variable1 = 1;
$variable2 = 0;
echo "Tipo de dato de \$variable1: $variable1 => " . gettype($variable1) . "<br>";
echo '<script>console.log("Tipo de dato de variable1:", ' . json_encode(gettype($variable1)) . ')</script><br>';
echo "Tipo de dato de \$variable2: $variable2 =>" . gettype($variable2) . "<br>";
echo '<script>console.log("Tipo de dato de variable2:", ' . json_encode(gettype($variable2)) . ')</script><br>';

$variable1 = (bool) $variable1;
$variable2 = (bool) $variable2;
echo "Nuevo tipo de dato de \$variable1: $variable1 => " . gettype($variable1) . "<br><br>";
echo '<script>console.log("Nuevo tipo de dato de variable1:", ' . json_encode(gettype($variable1)) . ')</script>';
echo "Nuevo tipo de dato de \$variable2: $variable2 => " . gettype($variable2) . "<br><br>";
echo '<script>console.log("Nuevo tipo de dato de variable2:", ' . json_encode(gettype($variable2)) . ')</script>';

function sumar($num1, $num2) {
    return $num1 + $num2;
}

$resultadoSuma = sumar(3, 7);
echo "Resultado de la suma (función sumar(3,7): $resultadoSuma <br><br>";
echo '<script>console.log("Resultado de la suma (función):", ' . json_encode($resultadoSuma) . ')</script>';

function par_impar($numero) {
    if ($numero % 2 == 0) {
    echo "El número $numero es par.<br>";
    echo '<script>console.log("El número '.$numero.' es par.")</script>';
} else {
    echo "El número $numero es impar.<br>";
    echo '<script>console.log("El número '.$numero.' es impar.")</script>';
}
}
echo "Resultado de la funcion para saber si un numero es par o impar: ";
$resultadoParImapr = par_impar(8);

?>