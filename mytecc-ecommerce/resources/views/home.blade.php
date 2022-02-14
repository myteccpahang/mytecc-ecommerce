@extends('layouts.app')
@section('title', 'Shop')
@section('content')
<section>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-8 p-lg-8 mx-auto my-5">
            <p class="f-2 lead fw-normal">Hello! Welcome To</p>
            <h1 class="display-4 fw-bold">MYTECC Official Shop</h1>
            <p class="f-2 lead fw-normal">
                Here you can find everything sell by MYTECC. Here you can find everything sell by MYTECC. Here you can find everything sell by MYTECC.
                Here you can find everything sell by MYTECC. Here you can find everything sell by MYTECC. Here you can find everything sell by MYTECC.
            </p>
            <a class="btn btn-outline-danger" href="#products">Shop Now</a>
        </div>
    </div>
</section>
<section class="container">
    <h3 class="text-center my-5" id="products">You Might Like These</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <a href="" class="text-underline-hover link-dark">
                    <img src="{{ asset('tmp/corporate.png') }}" class="card-img-top w-75 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Corporate Shirt 2020 Edition - Men</h5>
                        <h5 class="card-text f-2">RM45</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <a href="" class="text-underline-hover link-dark">
                    <img src="{{ asset('tmp/corporate2.png') }}" class="card-img-top w-75 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Corporate Shirt 2020 Edition - Women</h5>
                        <h5 class="card-text f-2">RM55</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <a href="" class="text-underline-hover link-dark">
                    <img src="{{ asset('tmp/tshirt.png') }}" class="card-img-top w-75 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MYTECC T-Shirt 2020 Edition</h5>
                        <h5 class="card-text f-2">RM25</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <a href="" class="text-underline-hover link-dark">
                    <img src="{{ asset('tmp/lanyard.png') }}" class="card-img-top w-75 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MYTECC Lanyard 2020 Edition</h5>
                        <small class="f-2 text-decoration-line-through text-muted">RM15</small>
                        <h5 class="card-text f-2 text-danger">RM10</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
