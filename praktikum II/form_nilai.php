<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-2">
                <p>Form Penilaian Mahasiswa STT Nurul Fikri</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="GET">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                        <input id="nama" name="" placeholder="Masukan Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Matkul Anda</label> 
                        <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select" aria-describedby="matkul">
                            <option value="">Pilih Matkul</option>
                            <option value="DDP">B.INGGRIS</option>
                            <option value="BD1">Database </option>
                            <option value="WEB1">Komunikasi efektif</option>
                        </select> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Penilaian UTS</label> 
                        <div class="col-8">
                        <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Penilaian UAS</label> 
                        <div class="col-8">
                        <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Penilaian Tugas</label> 
                        <div class="col-8">
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-primary">Unggah</button>
                        </div>
                    </div>
                </form>
                <?php
                    $proses = isset($_GET['proses']) ? $_GET['proses'] : '';
                    $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
                    $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : '';
                    $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
                    $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
                    $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';

                    echo "Nama             = $nama";
                    echo "<br/>Mata kuliah = $mata_kuliah";
                    echo "<br/>Nilai UTS   = $nilai_uts";
                    echo "<br/>Nilai UAS   = $nilai_uas";
                    echo "<br/>Nilai Tugas = $nilai_tugas";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Develop made by Rifki Ubaidillah Mahasiswa STT NF @2022</p>
            </div>
        </div>
    </div>
</body>
</html>