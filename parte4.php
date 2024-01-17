<?php
echo '<form action="index.php" method="get">';
echo '<button type="submit">INICIO</button>';
echo '</form>';

echo " <h3> Arrays </h3>";
$array1 = array(5, 3, 17, 64, 15, 6, 87, 22, 99, 105);
$longitudArray = count($array1);
echo "Array: ";
print_r($array1);
echo "<br><br>Longitud del array: $longitudArray<br>";
echo '<script>console.log("Longitud del array:", ' . json_encode($longitudArray) . ')</script>';

$array1[] = "Gato";
echo "<br>Array después de agregar un elemento tipo string: <br><br>";
print_r($array1);
echo "<br>";

$array1[] = 11;
$array1[] = "Perro";
echo "<br>Array después de agregar 2 elementos más: ";
print_r($array1);
echo "<br>";

$nuevoArray = array(13, 14, 15);
$arrayConcatenado = array_merge($array1, $nuevoArray);
echo "<br>Array concatenado: ";
print_r($arrayConcatenado);

$arrayNumeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo " <h3> Funciones </h3>";
function recorrerArray($arrayNumeros) {
    echo "Lista de Números:<br>";
    echo "<ul>";
    foreach ($arrayNumeros as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";
    echo '<script>console.log("Números en consola:", ' . json_encode($arrayNumeros) . ')</script>';
}
recorrerArray($arrayNumeros);

function addNumero($arrayNumeros){
    $numeroAleatorio = rand(1, 100);
    $arrayNumeros[]= $numeroAleatorio;

    echo "Array después de agregar un número aleatorio: ";
    print_r($arrayNumeros);
    echo "<br>";
}
addNumero($arrayNumeros);


function eliminarPares($arrayNumeros){
    foreach ($arrayNumeros as $indice => $numero) {
        if($numero % 2 == 0 ){
            unset($arrayNumeros[$indice]);
        }
    }
    $arrayNumeros = array_values($arrayNumeros);
    echo "<br>Array después de eliminar números pares: ";
    print_r($arrayNumeros);
    echo "<br>";
}
eliminarPares($arrayNumeros);

function mayorNumero($arrayNumeros){
    $maxNum=$arrayNumeros[0];
    foreach($arrayNumeros as $numero){
        if($numero > $maxNum){
            $maxNum=$numero;
        }
    }
    return $maxNum;
}
mayorNumero($arrayNumeros);

function menorNumero($arrayNumeros){
    $minNum=$arrayNumeros[0];
    foreach($arrayNumeros as $numero){
        if($numero < $minNum){
            $minNum=$numero;
        }
    }
    return $minNum;
}
menorNumero($arrayNumeros);

$frase = "EsTa Es Una PruebA pAarA VER la CoNvErsiON <br>";
echo "<br>Texto en Original: $frase <br>";

function convertirAMinusculas($frase) {
    return strtolower($frase);
}
$fraseMinusculas = convertirAMinusculas($frase);
echo "Texto en minúsculas: $fraseMinusculas <br>";

function convertirAMayusculas($frase) {
    return strtoupper($frase);
}
$fraseMayusculas = convertirAMayusculas($frase);
echo "Texto en mayúsculas: $fraseMayusculas <br>";

$arrayNombres = array("juan", "maría", "pedro", "ana");
echo "Nombres originales: " . implode(", ", $arrayNombres) . "<br>";
function primeraLetraMayuscula ($arrayNombres){
  $nuevoArrayNombres = array();
  foreach ($arrayNombres as $nombre){
    $nuevoNombre = ucfirst($nombre);
    $nuevoArrayNombres[] = $nuevoNombre;
  }
  return $nuevoArrayNombres;
}
$nombres = primeraLetraMayuscula($arrayNombres);
echo "<br>Nombres capitalizados: " . implode(", ", $nombres);

class Coche {
    public $marca;
    public $cantidadPuertas;
    public $coloresDisponibles; 

    public function __construct($marca, $cantidadPuertas, $coloresDisponibles) {
        $this->marca = $marca;
        $this->cantidadPuertas = $cantidadPuertas;
        $this->coloresDisponibles = $coloresDisponibles;
    }

    public function obtenerMarca() {
        return $this->marca;
    }

    public function obtenerCantidadPuertas() {
        return $this->cantidadPuertas;
    }

    public function obtenerColor($indice) {
        if (isset($this->coloresDisponibles[$indice])) {
            return $this->coloresDisponibles[$indice];
        } else {
            return null; 
        }
    }
}

$miCoche = array("color" => "rojo", "anio" => 2022);

$coche2024 = new Coche("Toyota", 4, $miCoche);
echo "<br><br>Marca del coche: " . $coche2024->obtenerMarca() . "<br>";
echo "<br>Cantidad de puertas: " . $coche2024->obtenerCantidadPuertas() . "<br>";

$indiceAtributo = "color";
echo "<br>Atributo '$indiceAtributo': " . $coche2024->obtenerColor($indiceAtributo);
?>