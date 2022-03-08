<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        form{
            margin:2em;
        }
      
        h3{
            border-bottom: 1px solid;
        }
    </style>
  </head>
  <body>
    <h3>Form Nilai Siswa</h3>
  <div class="row">
    <div class="col-8">
        <form method="GET" action="from_nilai.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="nama" name="nama_siswa" placeholder="Nama Lengkap" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="matkul" name="matkul_siswa" class="custom-select">
                <option value="DDP">Dasar-Dasar Pemrograman</option>
                <option value="BD1">Basis Data I</option>
                <option value="WEB1">Pemrograman Web</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="uts" name="uts_siswa" placeholder="Nilai UTS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="uas" name="uas_siswa" placeholder="Nilai UAS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tuprak" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
            <div class="col-8">
            <input id="tuprak" name="tuprak_siswa" placeholder="Nilai Tugas" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <?php

    $nama_siswa = $_GET['nama_siswa'];
    $mata_kuliah = $_GET['matkul_siswa'];
    $nilai_uts = $_GET['uts_siswa'];
    $nilai_uas = $_GET['uas_siswa'];
    $nilai_tugas = $_GET['tuprak_siswa'];

        echo '</br>Nama : ' .$nama_siswa;
        echo '</br>Mata Kuliah : ' .$mata_kuliah;
        echo '</br>Nilai UTS : ' .$nilai_uts;
        echo '</br>Nilai UAS : ' .$nilai_uas;
        echo '</br>Nilai Tugas Praktikum : '.$nilai_tugas;

    ?>
    <div class="col-4">col-4</div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
