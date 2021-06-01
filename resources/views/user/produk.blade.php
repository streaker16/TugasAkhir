@extends('user.main')

@section('container')

<link rel="stylesheet" href="{{ asset('css/produk.css') }}">

<div class="jumbotron jumbotron-fluid" id="produk">
    <div class="container">
<<<<<<< HEAD
        @section('title', 'Produk')
=======
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
        <h1 class="display-4">Produk</h1>
    </div>
</div>

<div class="container-fluid" id="produk-card">
    <div class="row produk-popular">
        <div class="col-sm-7 card-image">
<<<<<<< HEAD
            <div style="width:727px; height:727px; border-radius: 5px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/produk')}}/{{$newproduks[0]->gambar}}')"></div>
        </div>
        <div class="col-md">
            <div class="row desc-card">
                <div class="col produk-card">

                    <p class="h3">Produk Baru</p>
                    <p class="h1 mb-4">{{$newproduks[0]->nama}}</p>
                    <p>{{$newproduks[0]->deskripsi}}</p>
=======
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
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section list-produk">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
<<<<<<< HEAD
                <h3>Daftar</h3>
                <p class="h2">Produk</p>
            </div>
        </div>
        <div class="row btn-produk mb-3">
            <div class="col">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Provinsi
                    </button>
                    <div class="dropdown-menu">
                        <div class="scroll">
                            <a class="dropdown-item" href="{{ url('produk') }}">Semua</a>

                            @foreach ($provinsis as $provinsi)
                            <a class="dropdown-item" href="{{ url('produk',$provinsi->id) }}">{{$provinsi->nama}}</a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row img-produk">

            <div class="card-deck" style="width:100%">
            @if (!empty($produks))
            @foreach ($produks as $produk)

            <div class="col-sm-3">
                <div class="card mx-0">
                    <div class="card-img-top" style="background-image: url('{{ asset('img/produk')}}/{{$produk->gambar}}')"></div>
                    <div class="card-body">
                      <h5 class="card-title">{{$produk->nama}}</h5>
                      <p class="card-text">{{Str::limit($produk->deskripsi, 40)}}</p>
                      <a href="{{ url('/produk/'.$produk->id.'/detailproduk') }}" class="btn btn-outline-dark">Kunjungi Kami</a>
=======
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
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
                    </div>
                </div>
            </div>

            @endforeach
<<<<<<< HEAD
            @endif
            </div>

            {{-- <a href="" class="btn btn-outline-warning "> Lainnya </a> --}}

        </div>
        <div class="row py-5 mx-auto">
            <div class="col text-center">
                <a href="{{ url('produklainnya')}}" class="btn btn-outline-warning produk-btn py-2" style="color: black
                ">Lainnya</a>
=======

            {{-- <a href="" class="btn btn-outline-warning "> Lainnya </a> --}}

            <div class="row my-5 mx-auto">
                <div class="col-sm-12">
                    <a href="" class="btn btn-outline-warning produk-btn py-2">Lainnya</a>
                </div>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
            </div>
        </div>
    </div>
</div>

@endsection
