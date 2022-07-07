<?php

class Guru extends Database
{

    // * menampilkan data guru ke index.php
    public function index()
    {
        $dataguru = mysqli_query($this->koneksi, "SELECT * FROM guru");

        return $dataguru;
    }

    public function create($nip, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "INSERT INTO guru VALUES (null,'$nip','$nama','$alamat')");
    }

    // * Mermilih data guru yang akan di ubah
    public function edit($no)
    {
        $dataguru = mysqli_query($this->koneksi, "SELECT * FROM guru WHERE no='$no'");

        return $dataguru;
    }

    // * merubah data guru
    public function update($no, $nip, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "UPDATE guru SET nip='$nip', nama='$nama', alamat='$alamat' WHERE no='$no'");
    }

    // * Menampilkan data guru berdasarkan no
    public function show($no)
    {
        $dataguru = mysqli_query($this->koneksi, "SELECT * FROM guru WHERE no='$no'");

        return $dataguru;
    }

    // * Menghapus data guru
    public function delete($no)
    {
        mysqli_query($this->koneksi, "DELETE FROM guru WHERE no='$no'");
    }
}
