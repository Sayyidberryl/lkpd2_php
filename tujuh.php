<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('https://i.pinimg.com/564x/f2/9c/77/f29c77eec49a8498e4370d2208df1d9b.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: #fff;
    }

    .main {
        height: 100vh;
    }

    .motorkeong {
        height: 400px;
        width: 550px;
        box-sizing: border-box;
        border-radius: 10px;
    }

    .container {
        display: inline-block;
        cursor: pointer;
    }
</style>

<body>
    <div class="container main d-flex flex-column justify-content-center align-items-center ">
        <div class="container motorkeong p-5 shadow-lg p-3 mb-5">
            <p class="container text-center fs-5 fw-bold">Selisih Kata</p>
            <form action="" method="post">

                <div>
                    <label for="bil1" style="text-center">Masukan kata 1</label>
                    <input type="text" class="form-control" name="text1" id="text1">
                </div>
                <div>
                    <label for="bil1" style="text-center">Masukan kata 2</label>
                    <input type="text" class="form-control" name="text2" id="text2">
                </div>


                <div>
                    <button class="container btn btn-success form-control mt-3" type="submit" name="cek">Hitung
                    </button>
                </div>

            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>





<?php
if (isset($_POST['text1']) && ($_POST['text1'])) {
    $kata1 = $_POST['text1'];
    $kata2 = $_POST['text2'];

    function hitung($kata1, $kata2)
    {
        $kal1 = strlen($kata1);
        $kal2 = strlen($kata2);
        $selisih = $kal1 - $kal2;

        return $selisih;
    }



    $selisihKarakter = hitung($kata1, $kata2);

    $str =
        "<div class='card my-3 bg-primary text-white'>
<div class='card-body text-center'>
    <p class=' ms-2 mb-0'>Selisih antara " . $kata1 . " dan " . $kata2 . "adalah " . $selisihKarakter . "</p>
</div>
</div>";
    echo $str;
}

?>