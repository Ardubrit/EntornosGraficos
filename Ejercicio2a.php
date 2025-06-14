<?php
$i = 1;
while ($i <= 10) {
print $i++;
}
print("-------")
?>

<?php
$i = 1;
while ($i <= 10):
print $i;
$i++;
endwhile;
print("-------")
?>

<?php $i = 0; 
do { print ++$i; } 
while ($i<10);
?>