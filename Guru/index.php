<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <title>Crud</title>
        <style>
            body {
                padding-bottom: 50px;
            }
            nav {
                 margin-bottom: 30px;
            }
        </style>
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

        <center><h2>GURU</h2></center>

        <div class="container">
            <div class="card text-bg-dark">
                <div class="card-header">
                    <h3>Data guru</h3>
                    <center><a href="create.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data</a></center>
                </div>
                <div class="card-body overflow-auto">
                    <table class="table text-bg-dark">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIPD</th>
                                <th scope="col">Nama guru</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
include '../database.php';
$guru = new Guru();
$no = 1;
foreach ($guru->index() as $data) {
    ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $data['nip'] ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td class="d-flex flex-row justify-content-center">
                                    <a href="show.php?id=<?php echo $data['no']; ?>" class="btn btn-warning"><i class="bi bi-eye"></i> Show</a> ||
                                    <a href="edit.php?id=<?php echo $data['no']; ?>" class="btn btn-success"><i class="bi bi-pencil"></i> Edit</a> ||
                                    <form action="proses.php" method="post">
                                    <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
                                    <input type="hidden" name="aksi" value="delete">
                                    <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                        <i class="bi bi-trash3"></i> Delete
                                    </button>
                                </form>
                                </td>
                            </tr>
                      <?php
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>