<?php

include "connect.php";

$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM identitas WHERE id_mahasiswa='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Belajar PHP | Edit Data</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <header>
                <h3 class="mb-3 mt-3">Edit Identitas</h3>
            </header>
            <div class="row">
                <div class="col-md-8 form-floating mb-3">
                    <form action="proses_edit.php" method="POST">
                        <fieldset>
                            <input type="hidden" name="id_mahasiswa" value="<?php echo $d['id_mahasiswa']; ?>" />
                            <p>
                                <label for="nama">nama: </label>
                                <input class="form-control" type="text" name="nama" placeholder="nama lengkap" value="<?php echo $d['nama']; ?>" />
                            </p>
                            <p>
                                <label for="alamat">alamat: </label>
                                <textarea class="form-control" name="alamat"><?php echo $d['alamat'] ?></textarea>
                            </p>
                            <p>
                                <label for="telp">telp: </label>
                                <textarea class="form-control" name="telp"><?php echo $d['telp'] ?></textarea>
                            </p>
                            <p>
                                <label for="prodi">prodi: </label>
                                <input class="form-control" type="text" name="prodi" placeholder="prodi" value="<?php echo $d['prodi'] ?>" />
                            </p>
                            <p>
                                <input class="form-control btn btn-primary"type="submit" value="Simpan" name="simpan" />
                            </p>

                        </fieldset>


                    </form>
                </div>
            </div>
        </div>
    </body>
<?php } ?>

    </html>