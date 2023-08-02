@extends('layouts.app')

@section('content')

    <body>
        <!-- Body-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                        <img src="{{ asset('storage/files/' . $produk->encrypted_filename) }}" style="width: 500px;">
                        <div class="col-md-6">
                            <div class="small mb-1">SKU: BST-498</div>
                            <h1 class="display-5 fw-bolder">{{ $produk->product_name }}</h1>
                            <div class="fs-5 mb-5">
                                <span>{{ $produk->product_price }}</span>
                            </div>
                            <p class="lead"><span>{{ $produk->product_deskripsi }}</span></p>
                            <form action="{{ route('cart.add', ['id' => $produk->id]) }}" method="post"
                                class="updateForm">
                                @csrf
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                href="{{ route('pembayaran') }}">Beli</a></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </section>
    </body>
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

          <!-- Right -->
          <div>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3 text-secondary"></i>Company name
                </h6>
                <p>
                  Here you can use rows and columns to organize your footer content. Lorem ipsum
                  dolor sit amet, consectetur adipisicing elit.
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Products
                </h6>
                <p>
                  <a href="#!" class="text-reset">Angular</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">React</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Vue</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Laravel</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="#!" class="text-reset">Pricing</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Orders</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Help</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                <p>
                  <i class="fas fa-envelope me-3 text-secondary"></i>
                  info@example.com
                </p>
                <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
          © 2021 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
    @endsection
