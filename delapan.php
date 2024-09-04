<?php
function hitung($array, $value) {
    $counts = array_count_values($array);

    return $counts[$value] ?? 0;
}

$array = [100, 30, 20, 21, 100, 30, 100];
$nilai = 100;

$jumlah = hitung($array, $nilai);
echo "Nilai $nilai ditemukan sebanyak $jumlah kali.";
?>
