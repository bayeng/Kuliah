

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Belajar PHP </title>
  </head>
</head>
<body>
    
    <div class="container mt-3">
    <?php

        session_start();
        if(isset($_SESSION['username'])){
            echo "selamat datang " . $_SESSION['username'];
            echo "<a href='logout.php'>Log Out</a>";
        }

    ?>

        <h2 class="mb-3 mt-3">Data Mahasiswa</h2>
        
        
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">id_mahasiswa</th>
                            <th scope="col">Nama</th>
                            <th scope="col">alamat</th>
                            <th scope="col">telp</th>
                            <th scope="col">prodi</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <?php
                    include 'connect.php';
                    $no = 1;
                    $data = mysqli_query($db, "SELECT * FROM identitas");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tbody>
                        <tr>
                            <th><?php echo $no++; ?></th>
                            <td><?php echo $d['id_mahasiswa']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['telp']; ?></td>
                            <td><?php echo $d['prodi']; ?></td>
                            <td>
                                <a class="btn btn-outline-primary" href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>">EDIT</a>
                                <a class="btn btn-outline-primary" href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>">HAPUS</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>

                <div class="d-flex justify-content-end">
                    <a href="tambah.php" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>


    </div>
</body>

</html>