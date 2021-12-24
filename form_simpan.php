<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Aplikasi CRUD dengan PHP</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <container>
        <h1>Tambah Data Siswa</h1>
        <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
            <table cellpadding="8">
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nis" /></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jenis_kelamin" value="Laki-laki" /> Laki-laki <input type="radio"
                            name="jenis_kelamin" value="Perempuan" /> Perempuan</td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="telp" /></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td><input type="file" name="foto" /></td>
                </tr>
            </table>

            <hr />
            <a href="tampildata.php"><input type="submit" value="Simpan" /></a>
            <a href="tampildata.php"><input type="button" value="Batal" /></a>
        </form>
    </container>
</body>

</html>

</html>