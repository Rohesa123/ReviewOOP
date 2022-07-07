<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <title>Halaman Edit</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Guru<span class="sr-only"></span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <center><h2>Guru</h2></center>
        <div class="container">
        <div class="card text-bg-dark">
            <div class="card-header">
                Edit Guru
            </div>
            <div class="card-body">
            <?php
include '../database.php';
$guru = new Guru();
foreach ($guru->edit($_GET['id']) as $data) {
    $no = $data['no'];
    $nip = $data['nip'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
}
?>
            <form action="proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="no" value="<?php echo $no; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="number" class="form-control" name="nip" value="<?php echo $nip; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $alamat ?></textarea>
                    </div>
                    <div class="d-flex justify-content-center p-3">
                        <button type="submit" name="save" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                        <a href="index.php" class="ps-3">
                            <button class="btn btn-danger" type="button"><i class="bi bi-backspace"></i> Kembali</button>
                        </a>
                    </div>
                </form>
                <div>
                </div>
            </div>
        </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>