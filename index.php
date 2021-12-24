<!DOCTYPE html>
<html lang="en">

<head>
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
    <style>
    body {
        min-height: 100vh;
        padding: 0;
        margin: 0;
        font-family: "Lato", sans-serif;
        color: #2d3436 !important;
    }

    .container {
        margin: auto;
    }

    .gap-32 {
        gap: 30px;
    }
    </style>
</head>

<body class="bg-purple text-dark d-flex flex-column">
    <div class="container-fluid content flex-grow-1 d-flex flex-column align-items-center justify-content-center">
        <header class="text-center mb-3 text-dark title p-2">
            <h1>Pendaftaran Siswa Baru 👨‍🎓👩‍🎓</h1>
        </header>
        <section class="mb-4 d-flex flex-row align-items-center justify-content-center gap-32">
            <a href="form_simpan.php" class="btn btn-primary bg-trans flex px-5 py-4">
                <i class="fas fa-chalkboard-teacher btn-icon"></i>
                <p class="m-0 mt-3">Tambah pendaftar</p>
            </a>
            <a href="tampildata.php" class="btn btn-primary bg-trans flex px-5 py-4">
                <i class="fas fa-user-friends btn-icon"></i>
                <p class="m-0 mt-3">Tampilkan Pendaftar</p>
            </a>
        </section>

        <footer class="mt-5"></footer>
    </div>
</body>

</html>