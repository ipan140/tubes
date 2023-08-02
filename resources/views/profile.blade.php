@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <h4> {{ Auth::user()->name }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-person-circle me-3 fs-1"></div>
            <h4 class="mb-0">Selamat Bergabung!  {{ Auth::user()->name }}</h4>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Masukkan Alamatmu</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
    <div class="text-left"><a class="btn btn-warning" href="#">Save</a></div>
</div>
@endsection
