@extends('layouts.app')

@section('content')

    <body>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-3 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
                    @foreach ($produk as $prodak)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#fullImageModal{{ $prodak->id }}">
                                    <img src="{{ asset('storage/files/' . $prodak->encrypted_filename) }}" alt="FotoResi"
                                        style="max-width: 400px;">
                                </a>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $prodak->product_name }}</h5>
                                        <!-- Product price-->
                                        Rp. {{ $prodak->product_price }}<br><br>
                                        <h6> 1 Bungkus</h6>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#fullImageModal{{ $prodak->id }}">Bayar</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
            <!-- Modal -->
            @foreach ($produk as $prodak)
                <div class="modal fade" id="fullImageModal{{ $prodak->id }}" tabindex="-1"
                    aria-labelledby="fullImageModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="fullImageModalLabel">Scan Barcode dan Tunjukkan Waktu Menerima
                                    Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ Vite::asset('resources/images/dana.jpeg') }}" class="rounded mx-auto d-block"
                                    alt="Barcode" style="width: 300px">
                            </div>
                            <div class="modal-footer" style="justify-content: center">
                                <button data-bs-dismiss="modal" class="btn btn-warning" >Done</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </body>
    @endsection
