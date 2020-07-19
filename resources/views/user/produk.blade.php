@extends('user.main')

@section('container')

<link rel="stylesheet" href="{{ asset('css/produk.css') }}">

<div class="jumbotron jumbotron-fluid" id="produk">
    <div class="container">
        <h1 class="display-4">Produk</h1>
    </div>
</div>

<div class="container-fluid" id="produk-card">
    <div class="row produk-popular">
        <div class="col-sm-7 card-image">
            <img src="img/produk/jagung.png" width="95%" height="95%">
        </div>
        <div class="col-md">
            <div class="row desc-card">
                <div class="col-9 produk-card">
                    <p class="h3">Popular Produk</p>
                    <p class="h1 mb-4">Jagung Bose</p>
                    <p>Dalam bahasa setempat Bose artinya lunak. Jadi itu adalah makanan Khas daerah NTT, berupa jagung serta kacang-kacangan lainnya direbus kemudian ditambah sedikit pemanis seperti gula, dll</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section list-produk">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3>List</h3>
                <p class="h2">Produk</p>
            </div>
        </div>
        <div class="row btn-produk">
            <div class="col">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      KKN Real
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row img-produk">
            <div class="col-sm-3">
                <div class="card">
                    <img src="img/produk/gambar2.png" class="card-img-top" alt="image Produk">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="{{ url('/produk/detailproduk') }}" class="btn">Visit Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="img/produk/gambar1.png" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn">Visit Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="img/produk/gambar1.png" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn">Visit Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="img/produk/gambar1.png" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn">Visit Us</a>
                    </div>
                </div>
            </div>

            {{-- <a href="" class="btn btn-outline-warning "> Lainnya </a> --}}

            <div class="row mx-auto my-5">
                <div class="col-sm-12">
                    <a href="" class="btn btn-outline-warning laporan-btn py-2">Lainnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
