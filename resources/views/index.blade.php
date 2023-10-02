<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    {{-- notification --}}
    <div class="my-4">
        @if (session('success'))
            <div class="alert alert-info">
                {{ session('success') }}
            </div>
        @endif

        @if (session('edit'))
            <div class="alert alert-info">
                {{ session('edit') }}
            </div>
        @endif

        @if (session('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif
    </div>

    <div class="container">
        {{-- tambah data --}}
        <div class="card" style="width: 10rem;">
            <a href="/tambah_data" class="btn btn-success">Tambah data</a>
        </div>

        {{-- tabel data --}}
        <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Ketegori id</th>
                        <th scope="col">status id</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $p)
                    <tr>
                        <th scope="row">{{$p->id_produk}}</th>
                        <td>{{$p->nama_produk}}</td>
                        <td>{{$p->harga}}</td>
                        <td>{{$p->nama_kategori}}</td>
                        <td>{{$p->nama_status}}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                action="/hapus/{{ $p->id_produk }}" method="POST">
                                <a href="/edit/{{$p->id_produk}}"class="btn btn-primary mr-2">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
