@extends('user.main')

@section('container')
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
@endsection
