<?php

class Database {
    public $host = "localhost", $user = "root", $pass = "", $db = "bd1";

    public function __construct() {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
    }
}

include 'guru.php';

$db = new Database();