//Ejercicio2a

<?php 
$matriz = array("x" => "bar", 12 => true); 
echo $matriz["x"]; 
echo $matriz[12]; 
?>

//Ejercicio2b
<?php 
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6]; 
echo $matriz["unamatriz"][13]; 
echo $matriz["unamatriz"]["a"];  
?>

//Ejercicio2c
<?php 
$matriz = array(5 => 1, 12 => 2); 
$matriz[] = 56; $matriz["x"] = 42; 
unset($matriz[5]); 
unset($matriz);
?>

//Muestra
//Ejercicio2a: bar1 
//Ejercicio2b: 5942 
//Ejercicio2c: no muestra nada
