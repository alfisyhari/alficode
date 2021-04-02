<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Praktikum OOP | Alfisyhari</title>
</head>
<body class="bg-light">
    <div class="container-fluid">
            <div class="py-5 text-center">
            <!-- Start Form -->
                <h2>Form Isian Index Massa Tubuh (BMI) </h2>
            </div>
            <form action="index.php" method="POST">
                <div class="form-group row">
                    <label for="nama_lengkap" class="control-label col-sm-2">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input id="nama_lengkap" required="" name="nama_lengkap" type="text" class="form-control">
                </div>
                </div>
                <div class="form-group row">
                    <label for="berat_badan" class="control-label col-sm-2">Berat Badan</label>
                <div class="col-sm-10">
                    <input id="berat_badan" required="" name="berat_badan" type="text" class="form-control">
                    <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">Kg</span>
                    </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi_badan" class="control-label col-sm-2">Tinggi Badan</label>
                <div class="col-sm-10">
                    <input id="tinggi_badan" required="" name="tinggi_badan" type="number" class="form-control">
                    <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">Cm</span>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="control-label col-sm-2">Umur</label>
                <div class="col-sm-10">
                <input id="umur" required="" name="umur" type="number" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">Thn</span>
                </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="control-label col-sm-2">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
                    <label class="form-check-label">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
                    <label class="form-check-label">Perempuan</label>
                </div>
                </div>
                <div class="form-group row">
                <div class="offset-sm-2 col-sm-10 pull-right">
                    <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
</form>
<!-- End Form -->
<br>
<!-- Start Result BMI -->
<div class="card output__card">
<div class="py-5 text-center">
<h2>Hasil Evaluasi (BMI) </h2>
                <div class="card-body">
                    <?php 
                    require_once "class_bmipasien.php";
                    if(isset($_POST['kirim'])) {
                        $nama_lengkap = $_POST['nama_lengkap'];
                        $berat_badan = $_POST['berat_badan'];
                        $tinggi_badan = $_POST['tinggi_badan'];
                        $umur = $_POST['umur'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $pasien = new bimPasien($nama_lengkap, $berat_badan, $tinggi_badan, $umur, $jenis_kelamin);
                            
                        echo 'Nama Lengkap: ' . $pasien->nama_lengkap . '</br>';
                        echo 'Berat Badan : ' . $pasien->berat_badan . '</br>';
                        echo 'Tinggi Badan : ' . $pasien->tinggi_badan . '</br>' ;
                        echo 'Umur : ' . $pasien->umur. '</br>';
                        echo 'Jenis Kelamin : ' . $pasien->jenis_kelamin . '</br>';
                        echo 'BMI : ' . round($pasien->hasilBMI()) . '</br>';
                        echo 'Status : ' . $pasien->statusBMI() . '</br>';
                        }
                    ?>
                    </div>
                </div>
            </div>
<!-- End Result BMI -->
<!-- Start Footer -->
<div class="footer-copyright text-center py-3 ml-4">© 2021 Alfisyhari
</div>    
<!-- End Footer -->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>