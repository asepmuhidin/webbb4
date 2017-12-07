<?php
    include "DB.php";
    $dbku=new DB();
    $koneksi=$dbku->open();

    $nim=$_GET['nim'];
    $sql="select * from mahasiswa where nim='$nim'";

    $datasiswa=$dbku->recordset($sql,$koneksi);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Data Mahasiswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  </head>
  <body>
  <div class="container">
        <h1>Edit Data Mahasiswa</h1>

  <form action="update.php" method="POST">

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">NIM</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" placeholder="NIM" name="tnim" 
      value="<?php echo $datasiswa[0]['nim']; ?>" >
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="tnama"
      value="<?php echo $datasiswa[0]['nama']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" placeholder="Email" name="temail"
      value="<?php echo $datasiswa[0]['email']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Telp/HP</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" placeholder="Telp/HP" name="ttelp"
      value="<?php echo $datasiswa[0]['telp']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Alamat</label>
    <div class="col-sm-9">
      <Textarea class="form-control" placeholder="Alamat" name="talamat">
        <?php echo $datasiswa[0]['alamat']; ?>
      </Textarea>
    </div>
  </div>  

  <div class="form-group row">
    <label class="col-sm-3 col-form-label"></label>
    <div class="col-sm-9">
      <input type="submit" class="btn btn-primary btn-lg" value="Save">
    </div>
  </div>
</form>
  </div>
  </body>
</html>        