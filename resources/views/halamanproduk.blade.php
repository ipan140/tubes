@extends('layouts.app')

@section('content')
    <body>
        <!-- Body-->
        <section class="py-5">
            <div class=""></div>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <img src="{{ asset('storage/files/' . $produk->encrypted_filename) }}" style="width: 500px;">
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">{{ $produk->product_name}}</h1>
                        <div class="fs-5 mb-5">
                            <span>{{ $produk->product_price}}</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <form action="{{ route ('cart.add', ['id' => $produk->id])}}" method="post" class="updateForm">
                        @csrf
                        <div class="d-flex">
                            <!-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="{{1}}" style="max-width: 3rem"> -->
                            <input type="hidden" name="product_id" value="{{ $produk->id }}">
                            <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <footer class="py-5">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer
@endsection
