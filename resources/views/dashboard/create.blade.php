<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body><br><br>
    <div class="container-sm mt-5">
        <form action="{{ route('Databarang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Produk</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="product_name" class="form-label">Nama Produk</label>
                            <input class="form-control @error('product_name') is-invalid @enderror" type="text" name="product_name" id="product_name" value="{{ old('product_name') }}" placeholder="Produk">
                            @error('product_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="product_price" class="form-label">Harga</label>
                            <input class="form-control @error('product_price') is-invalid @enderror" type="text" name="product_price" id="product_price" value="{{ old('product_price') }}" placeholder="Harga produk">
                            @error('product_price')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="cv" class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="fotoproduk" id="cv">
                        </div>
                        <div class="col">
                            <label for="product_deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control @error('product_deskripsi') is-invalid @enderror" type="text" name="product_deskripsi" id="product_deskripsi" value="{{ old('product_deskripsi') }}" placeholder="Produk">
                            @error('product_deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>

</html>