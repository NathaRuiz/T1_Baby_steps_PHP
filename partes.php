<?php
$parte = isset($_GET['parte']) ? $_GET['parte'] : 1;

switch ($parte) {
    case 1:
        include('parte1.php');
        break;
    case 2:
        include('parte2.php');
        break;
    case 3:
        include('parte3.php');
        break;
    case 4:
        include('parte4.php');
        break;       
    default:
        echo "Parte no válida";
}
?>