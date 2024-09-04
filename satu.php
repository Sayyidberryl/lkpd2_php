<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
</head>

<body>

    <div class="container main d-flex flex-column justify-content-center align-items-center ">
        <div class="container motorkeong p-5 shadow-lg p-3 mb-5">
            <p class="container text-center fs-5 fw-bold">Number detector</p>
            <form action="" method="post">

                <div>
                    <label for="bil1" style="text-center">Masukan Teks</label>
                    <input type="text" class="form-control" name="text" id="text">
                </div>


                <div>
                    <button class="container btn btn-success form-control mt-3" type="submit" name="cek">Hitung
                    </button>
                </div>

            </form>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous">
                </script>
</body>

<script>

</script>

</html>




<?php

if (isset($_POST['text'])) {
    function checkForNumbers($text)
    {

        // $cleanText = filter_var($text, FILTER_SANITIZE_STRING);

        $karakter = str_split($text);

        $numbers = [];

        foreach ($karakter as $char) {
            if (ctype_digit($char)) {
                $numbers[] = $char;
            }
        }

        $numbers = array_unique($numbers);


        if (!empty($numbers)) {
            $numbersStr = implode(', ', $numbers);
            echo "Teks mengandung angka: $numbersStr";
        } else {
            echo "Teks tidak mengandung angka";
        }
    }


    checkForNumbers($_POST['text']);

} else {
    echo "masukan angka";
}

?>