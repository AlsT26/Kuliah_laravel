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
    <H2>JURNAL</H2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id placeat officiis deleniti, praesentium expedita molestiae commodi sint natus unde officia delectus nemo laboriosam alias quas repellat excepturi quibusdam porro accusamus?</p>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tipe</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga Satuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obats as $obat)
            <tr>
                <td scope="row">{{$obat->kode}}</td>
                <td>{{$obat->name}}</td>
                <td>{{$obat->deskripsi}}</td>
                <td>{{$obat->tipe}}</td>
                <td>{{$obat->jumlah}}</td>
                <td>{{$obat->harga_satuan}}</td>
                <td><a href="{{ route('create.dataobat') }}" type="button" class="btn btn-secondary">Simpan</button></td>
                <td><a href="{{ route('edit.dataobat', $obat->id) }}" type="button" class="btn btn-secondary">Ubah</button></td>
                <td><a href="{{ route('delete.dataobat', $obat->id) }}" type="button" class="btn btn-secondary">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
        
</body>
</html>