<?php
  require_once 'config.php';

  if (isset($_POST['submit'])) {
    $Nama = $_POST['search'];

    $sql = 'SELECT * FROM pegawai WHERE nama = :nama';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['nama' => $Nama]);
    $row = $stmt->fetch();
  } else {
    header('Nama: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <style type="text/css" media="print">
   .no-print { display: none; }
</style>
<script>
var number = sessionStorage.getItem("Number");
function panggil(){
console.log(number);
document.getElementById("demo").innerHTML = number;
}
</script>
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?= $row['nama'] ?></h1>
          </div>
          <div class="card-body">
            <h4><b>NIP :</b> <?= $row['nip'] ?></h4>
            <h4><b>Jabatan :</b> <?= $row['jabatan'] ?></h4>
            <h4><b>Jam Makan : </b></h4>
            <h4 class="mt" id="demo"></h4>
          </div>
          <div class="card-footer no-print">
            <input type="button" class="btn btn-info btn-lg" value="Cetak Kupon Makan">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>