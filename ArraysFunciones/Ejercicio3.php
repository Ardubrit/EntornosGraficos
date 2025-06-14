<?php
 $fun = getdate(); 
 echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] segundos, del $fun[mday]/$fun[mon]/$fun[year]";
 ?>

 <?php 
 function sumar($sumando1,$sumando2){
$suma=$sumando1+$sumando2;
echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>

//Muestra:
//Has entrado en esta pagina a las 23 horas, con 11 minutos y 46 segundos, del 11/6/2025
// 5+6=11