<?php
include("connect.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $prodi = $_POST['prodi'];

    mysqli_query($db, "INSERT INTO identitas VALUES 
    ('','$nama', '$alamat', '$telp', '$prodi')");
    header("location:index.php");
}