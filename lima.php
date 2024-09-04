<?php
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

$banding = array_intersect($bill1, $bill2);

$unique = array_merge(array_diff($bill1, $bill2), array_diff($bill2, $bill1));

$banding_str = implode(',', $banding);
$unique_str = implode(',', $unique);


echo "Bilangan yang ada di kedua variable:";
echo "</br>";
echo $banding_str;
echo "</br>"; 
echo "Bilangan yang hanya ada di salah satu variable:";
echo "</br>";
echo $unique_str;
?>
