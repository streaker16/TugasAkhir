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
            @php
                $total = count($produks);
            @endphp
            <img src="{{ asset('img/produk')}}/{{$produks[$total-1]->gambar}}" width="95%" height="95%">
        </div>
        <div class="col-md">
            <div class="row desc-card">
                <div class="col-9 produk-card">

                    <p class="h3">New Produk</p>
                    <p class="h1 mb-4">{{$produks[$total-1]->nama}}</p>
                    <p>{{$produks[$total-1]->deskripsi}}</p>

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
            @foreach ($produks as $produk)

            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('img/produk')}}/{{$produk->gambar}}" class="card-img-top" alt="image Produk">
                    <div class="card-body">
                      <h5 class="card-title">{{$produk->nama}}</h5>
                      <p class="card-text">{{$produk->deskripsi}}</p>
                      <a href="{{ url('/produk/'.$produk->id.'/detailproduk') }}" class="btn">Visit Us</a>
                    </div>
                </div>
            </div>

            @endforeach

            {{-- <a href="" class="btn btn-outline-warning "> Lainnya </a> --}}

            <div class="row my-5 mx-auto">
                <div class="col-sm-12">
                    <a href="" class="btn btn-outline-warning produk-btn py-2">Lainnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
