<?php
$angka = 5;
$jumlahPerkalian = 5; 

echo "Hasil perkalian angka $angka </br>";

for ($i = 1; $i <= $jumlahPerkalian * 2; $i += 2) {
    $result = $i * $angka; 
    echo "$i x $angka = $result </br>";
}
?>
