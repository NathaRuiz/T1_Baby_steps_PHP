<?php
echo '<form action="index.php" method="get">';
echo '<button type="submit">INICIO</button>';
echo '</form>';

echo " <h3> VARIABLES </h3>";
$numero = 42;
echo "Número en pantalla: " . $numero . "<br>";
echo '<script>console.log("Número en consola:", ' . json_encode($numero) . ')</script><br>';

$decimal = 5.64;
echo "Decimal en pantalla: " . $decimal . "<br>";
echo '<script>console.log("Decimal en consola:", ' . json_encode($decimal) . ')</script><br>';

$nombre = "Juan";
echo "Nombre en pantalla: " . $nombre . "<br>";
echo '<script>console.log("Nombre en consola:", ' . json_encode($nombre) . ')</script><br>';

$verdadero = true;
echo "Verdadero en pantalla: " . $verdadero . "<br>";
echo '<script>console.log("Verdadero en consola:", ' . json_encode($verdadero) . ')</script><br>';

$falso = false;
echo "Falso en pantalla: " . $falso . "<br>";
echo '<script>console.log("Falso en consola:", ' . json_encode($falso) . ')</script><br>';

$array = array("uno", "dos", "tres");
echo "Array en pantalla: ";
print_r($array);
echo "<br>";
echo '<script>console.log("Array en consola:", ' . json_encode($array) . ')</script><br>';

$valorNulo = NULL;
echo "Valor nulo en pantalla: " . var_export($valorNulo, true) . "<br>";
echo '<script>console.log("Valor nulo en consola:", ' . json_encode($valorNulo) . ')</script><br>';

class Persona {
    public $nombre;
    public $edad;
}

$persona = new Persona();    
$persona->nombre = "Ana";
$persona->edad = 25;
echo "Información de la clase Persona: ";
print_r($persona);
echo "<br>";
echo '<script>console.log("Información de la clase Persona:", ' . json_encode($persona) . ')</script><br>';

define("PI", "3.14159");
echo "Valor de la constante PI en pantalla: " . PI . "<br>";
echo '<script>console.log("Valor de la constante PI:", ' . json_encode(PI) . ')</script><br>';

echo "<h3>Tipos de Datos </h3>" ;
echo "<h4>Fácil: </h4>" ;
$nombre = "Luna";    
echo "Nombre: ". $nombre . " => ";
var_dump($nombre); 
echo "<br>";  
echo "<br>"; 
$apellido = "Lovegood";  
echo "Apellido: ". $apellido . " =>";
var_dump($apellido); 
echo "<br>";
echo "<br>"; 
$edad = 42; 
echo $edad . " => ";
var_dump($edad); 
echo "<br>"; 
echo "<br>";              
$Ravenclaw = true;    
echo " Ravenclaw  => ";
var_dump($Ravenclaw);  
echo "<br>";  
echo "<h4>Medio:</h4>" ;
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; 
echo "Promedio: " . $promedio . " => ";
var_dump($promedio);
echo '<script>console.log("Promedio en consola:", ' . json_encode($promedio) . ')</script> <br><br>';
$nombre_completo = $nombre . " " . $apellido;  
echo "Nombre completo: " . $nombre_completo . " => ";
var_dump($nombre_completo);
echo '<script>console.log("Nombre completo en consola:", ' . json_encode($nombre_completo) . ')</script><br><br>';
$presento_examen = (bool) 1; 
echo "Presentó examen: " . json_encode($presento_examen) . " =>";
var_dump($presento_examen);
echo '<script>console.log("Presentó examen en consola:", ' . json_encode($presento_examen) . ')</script><br>';
echo "<h4>Avanzado:</h4>" ;
$numero_preguntas = 5 + "5";
echo "Numero de preguntas:" . $numero_preguntas . " => ";
var_dump($numero_preguntas);
echo '<script>console.log("Numero de preguntas en consola: ",'.json_encode($numero_preguntas).')</script><br><br>';
$numero_respuestas = "5". 5;
echo "Numero de respuestas: ". $numero_respuestas." => ";
var_dump($numero_respuestas);
echo '<script>console.log("Numero de respuestas en consola:" ,'.json_encode($numero_respuestas).')</script><br><br>';
$promedio_maximo = $numero_respuestas / 1.0;
echo "Promedio Máximo: ".$promedio_maximo." => ";
var_dump($promedio_maximo);
echo '<script>console.log("Promedio Maximo en consola: ", '.json_encode($promedio_maximo).')</script><br>';
echo "<br>";
$nargles = 3 ."5 nargles";
echo "Nargles: ".$nargles." => ";
var_dump($nargles);
echo '<script>console.log("Nargles: ", '.json_encode($nargles).')</script><br><br>';

?>