<?php 
$matriz_frutas = array(
    array("manzana","Banana", "cereza"),
    array("Damasco","Frambueza","Naranja"),
    array("kiwi","Pera","Uva")
);

echo "<br>Recorriendo con for:<br>";
echo "<table border='1'>";
$filas = count($matriz_frutas);
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    $columnas = count($matriz_frutas[$i]);
    for ($j = 0; $j < $columnas; $j++) {
        echo "<td>" . $matriz_frutas[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>