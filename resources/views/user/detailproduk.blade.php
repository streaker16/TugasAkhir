@extends('user.main')

@section('container')
<<<<<<< HEAD
@section('title', 'Detail Produk')

<div class="container" id="dproduk"> {{-- dproduk = detail produk --}}
    <div class="row">
        <div class="col-sm-6 pr-5">
            <div style="background-image: url('{{ asset('img/produk') }}/{{$produks->gambar}}')"></div>
        </div>
        <div class="col-sm-6 pl-5">


            <h2 class="bg-kkn">{{$produks->nama}}</h2>
            <p>{{$produks->deskripsi}}</p>


        </div>
    </div>
</div>

<div class="section list-produk-lainnya">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Produk Lainnya</h4>
            </div>
        </div>
        <div class="row">

            @foreach ($produklainnya as $produk)
            <div class="col-sm-3">
                <a href="{{ url('/produk/'.$produk->produk_id.'/detailproduk') }}" style="color: black ">
                <div class="card">
                    <div class="card-img-top" style="width: 100%; height: 250px; border-top-left-radius: 20px; border-top-right-radius: 20px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/produk')}}/{{$produk->gambar}}')"></div>
                    <div class="card-body">
                        <h5 class="card-title pb-2">{{$produk->produk_nama}}</h5>
                        <p class="card-text">{{$produk->provinsi_nama}}</p>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row pt-5 mx-auto">
            <div class="col text-center">
                <a href="{{ url('produklainnya')}}" class="btn btn-outline-warning produk-btn py-2" style="color: black">Lihat Semua Produk</a>
            </div>
        </div>
    </div>
</div>
=======

    <div class="container" id="dproduk"> {{-- dproduk = detail produk --}}
        <div class="row">
            <div class="col-sm-6 pr-5">
                <img src="{{ asset('img/produk') }}/{{$produks->gambar}}" class="img-fluid" alt="image detail produk">
            </div>
            <div class="col-sm-6 pl-5">


                <h2 class="bg-kkn">{{$produks->nama}}</h2>
                <p>{{$produks->deskripsi}}</p>


            </div>
        </div>
    </div>

    <div class="section list-produk-lainnya">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Produk Lainnya</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <img src="{{ asset('img/produk') }}/{{$produks->gambar}}" class="card-img-top" alt="image Produk">
                        <div class="card-body">
                          <h5 class="card-title">Kue Cucur</h5>
                          <p class="card-text">Nusa tenggara tImur</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="../img/produk/gambar2.png" class="card-img-top" alt="image Produk">
                        <div class="card-body">
                          <h5 class="card-title">Kue Cucur</h5>
                          <p class="card-text">Nusa tenggara tImur</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="../img/produk/gambar2.png" class="card-img-top" alt="image Produk">
                        <div class="card-body">
                          <h5 class="card-title">Kue Cucur</h5>
                          <p class="card-text">Nusa tenggara tImur</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="../img/produk/gambar2.png" class="card-img-top" alt="image Produk">
                        <div class="card-body">
                          <h5 class="card-title">Kue Cucur</h5>
                          <p class="card-text">Nusa tenggara tImur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
@endsection
