<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body>
<form action="{{ route('update.dataobat', $obat->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="namaObat">Kode</label>
            <input type="text" class="form-control" placeholder="Kode" name="kode">
        </div>
        <div class="form-group">
            <label for="namaObat">Nama Obat</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Obat" name="name">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" placeholder="Deskripsi Obat" name="deskripsi">
        </div>
        <div class="form-group">
            <label for="namaObat">Tipe</label>
            <input type="text" class="form-control" placeholder="Tipe" name="tipe">
        </div>
        <div class="form-group">
            <label for="namaObat">Jumlah</label>
            <input type="text" class="form-control" placeholder="Jumlah Obat" name="jumlah">
        </div>
        <div class="form-group">
            <label for="namaObat">Harga Satuan</label>
            <input type="text" class="form-control" placeholder="Harga Satuan" name="harga_satuan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>