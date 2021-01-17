@extends('user.main')

@section('container')

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
@endsection
