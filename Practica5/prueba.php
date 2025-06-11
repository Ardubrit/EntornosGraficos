//Codigo 1
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"]; //bar
echo $matriz[12]; //1
?>
//Codigo 2
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6]; //5
echo $matriz["unamatriz"][13]; //9
echo $matriz["unamatriz"]["a"]; //42
?>
//Codigo 3
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42;
unset($matriz[5]); //5 quedaria indefinido. Imprimiría ""
unset($matriz); //El array deja de existir.
?>
//No imprime nada.
