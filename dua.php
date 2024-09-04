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
  @media print {
            body>*:not(.output-container) {
                display: none;
            }

            form {
                display: none;
            }

            .mawang {
                display: none;
            }
        }
</style>

<body>
  <div class="container main d-flex flex-column justify-content-center align-items-center ">
    <div class="container motorkeong p-5 shadow-lg p-3 mb-5">
      <p class="container text-center fs-5 fw-bold">Kompensasi gaji lembur</p>
      <form action="" method="post">

        <div>
          <label for="bil1" style="text-center">Masukan Jam kerja</label>
          <input type="number" class="form-control" name="num" id="num">
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



if (isset($_POST['cek']) && ($_POST['num'])) {
  $jamKerja = $_POST['num'];
  function hitungKompensasi($jamKerja, $jamKerjaNormal = 8)
  {
    $jamLembur = $jamKerja - $jamKerjaNormal;

    if ($jamLembur > 0) {
      $kompensasi = 50000;
      if ($jamLembur >= 1) {
        $kompensasi += ($jamLembur - 1) * 25000;
      } else {
        $kompensasi = 0;
      }

      return [
        'jam_kerja' => $jamKerja,
        'jam_lembur' => $jamLembur,
        'kompensasi' => $kompensasi
      ];
    }
  }

  $hasil = hitungKompensasi($jamKerja);

  $str =
    "<div class='card my-3 bg-primary text-white'>
<div class='card-body text-center'>
  <p class=' ms-2 mb-0'> Jam kerja " . $hasil['jam_kerja'] . " Jam</p>
  <p class=' ms-2 mb-0'> Jam Lembur : " . $hasil['jam_lembur'] . " Jam</p>
  <p class=' ms-2 mb-0'> Jumlah Kompensasi : Rp " . number_format($hasil['kompensasi'], 0, ',', '.') . "</p>
  <button onclick=window.print() class='mawang container btn btn-success form-control mt-3' type='submit' name='print'>Print</button>
</div>
</div>";

  echo $str;
}
?>