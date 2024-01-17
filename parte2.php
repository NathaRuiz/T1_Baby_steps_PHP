<?php 
echo '<form action="index.php" method="get">';
echo '<button type="submit">INICIO</button>';
echo '</form>';

echo " <h2> Tablas de Verdad </h2>";
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

$resultado1 = $es_un_michi_grande && $le_gusta_comer;
$resultado2 = $es_un_michi_grande || $sabe_volar;
$resultado3 = $sabe_volar || $tiene_2_patas;
$resultado4 = !$le_gusta_comer;
$resultado5 = !$le_gusta_comer || $es_un_michi_grande;

echo "\$es_un_michi_grande && \$le_gusta_comer => " . json_encode($resultado1, true) . "<br><br>";
echo "\$es_un_michi_grande || \$sabe_volar => " . json_encode($resultado2, true) . "<br><br>";
echo "\$sabe_volar || \$tiene_2_patas => " . json_encode($resultado3, true) . "<br><br>";
echo "!\$le_gusta_comer => " . json_encode($resultado4, true) . "<br><br>";
echo "!\$le_gusta_comer || \$es_un_michi_grande => " . json_encode($resultado5, true) . "<br>";

?>