<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <h3 class="mb-3 mt-3">Tambah Identitas</h3>
        </header>
        
        <div class="row ">
            <div class="col-md-8 form-floating mb-3">
                <form action="proses_tambah.php" method="POST">
                    <fieldset>
                        <p>
                            <label class for="nama">nama: </label>
                            <input class="form-control" type="text" name="nama" placeholder="nama lengkap" />
                        </p>
                        <p>
                            <label for="alamat">alamat: </label>
                            <textarea class="form-control" name="alamat"></textarea>
                        </p>
                        <p>
                            <label for="telp">telp: </label>
                            <textarea class="form-control" name="telp"></textarea>
                        </p>
                        <p>
                            <label for="prodi">prodi: </label>
                            <input class="form-control" type="text" name="prodi" placeholder="prodi" />
                        </p>
                        <p>
                            <input class="form-control btn btn-primary" type="submit" value="Daftar" name="daftar" />
                        </p>

                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</body>

</html>