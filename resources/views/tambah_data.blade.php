<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="container">
                <h3>Tambah Data</h3>
            </div>
            <div class="container"><a href="/index">Kembali</a></div>

            <form action="/simpan" method="POST">
                @csrf
                <div class="card-body">
                    <label for="">Nama Produk</label>
                    <input class="form-control" type="text" name="inputnamaproduk" placeholder="Masukkan Nama Produk"
                        aria-label="default input example" required>
                    <label for="">Harga</label>
                    <input class="form-control" type="number" name="inputharga" placeholder="Masukkan Harga"
                        aria-label="default input example" required>
                    <label for="">Kategori</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="inputketegori"
                                id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                CI MTH TINTA LAIN (IM)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="2" name="inputketegori"
                                id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                L MTH AKSESORIS (IM)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="3" name="inputketegori"
                                id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault1">
                                L MTH AKSESORIS (LK)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="4" name="inputketegori"
                                id="flexRadioDefault4" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                L MTH TABUNG (LK)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="5" name="inputketegori"
                                id="flexRadioDefault5">
                            <label class="form-check-label" for="flexRadioDefault1">
                                L QUEENLY
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="6" name="inputketegori"
                                id="flexRadioDefault6" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                S MTH STEMPEL (IM)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="7" name="inputketegori"
                                id="flexRadioDefault7" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                SP MTH SPAREPART (LK)
                            </label>
                        </div>
                    </div>
                    <label for="">Status</label>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="inputstatus" required>
                        <option value="" >Pilih Di bawah ini</option>
                        <option value="1" >Bisa Dijual</option>
                        <option value="2" >Tidak Bisa Dijual</option>
                    </select>
                </div>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
