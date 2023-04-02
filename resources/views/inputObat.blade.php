<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>
<body>
    <h1>rieseb
    </h1>
    <h2>Tambah Obat</h2>

    <form>
    <div class="mb-3">
        <label for="kode" class="form-label">Kode</label>
        <input type="kode" class="form-control" id="kode" aria-describedby="kode">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="nama" class="form-control" id="nama" aria-describedby="nama">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea name="desc" id="desc" rows="4"></textarea>
    </div>
    <div class="mb-3">
        <label for="kode" class="form-label">Kode</label>
        <input type="kode" class="form-control" id="kode" aria-describedby="kode">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>