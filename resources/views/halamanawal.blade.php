@extends('layouts.app')

@section('content')
<body>
    <!-- Header-->
    <header class="py-5">
    <div class="container" style="align-items: right; width : 450px;" >
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="{{ Vite::asset('resources/images/doalancar.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="{{ Vite::asset('resources/images/doalancar.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="{{ Vite::asset('resources/images/doalancar.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-3 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
                @foreach ( $produk as $prodak )
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#fullImageModal{{ $prodak->id }}">
                            <img src="{{ asset('storage/files/' . $prodak->encrypted_filename) }}" alt="FotoResi" style="max-width: 400px;">
                        </a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $prodak->product_name}}</h5>
                                <!-- Product price-->
                                {{ $prodak->product_price}}<br><br>
                                <h6 class="fw-bolder">
                                {{ $prodak->product_deskripsi}}</h6>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('HalamanProduk', ['id' => $prodak->id ]) }}">Beli</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
@endsection

