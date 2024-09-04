<?php

function rata($array)
{
    return array_sum($array) / count($array);
}

$students = [
    [
        'nama' => 'andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'eko',
        'nilai' => [89, 85, 84, 86, 88],
    ]
];

foreach ($students as $student) {
    $average = rata($student['nilai']);
    echo "Rata-rata nilai " . $student['nama'] . " adalah: " . $average;
}

?>
