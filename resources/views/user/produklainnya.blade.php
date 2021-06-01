@extends('user.main')

@section('container')
@section('title', 'Semua Produk')

<link rel="stylesheet" href="{{ asset('css/produk.css') }}">

<div class="jumbotron jumbotron-fluid" id="produk" style="margin-bottom: 0">
    <div class="container">
        <h1 class="display-4">Produk</h1>
    </div>
</div>

<div class="section list-produk">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3>Daftar</h3>
                <p class="h2" style="border-bottom: 1px solid">Produk</p>
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
                            <a class="dropdown-item" href="{{ url('produklainnya') }}">Semua</a>

                            @foreach ($provinsis as $provinsi)
                            <a class="dropdown-item" href="{{ url('produklainnya',$provinsi->id) }}">{{$provinsi->nama}}</a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row img-produk pb-4">

            <div class="card-deck" style="width:100%">
            @if (!empty($produks))
            @foreach ($produks as $produk)

            <div class="col-sm-3 py-4">
                <div class="card mx-0">
                    <div class="card-img-top" style="background-image: url('{{ asset('img/produk')}}/{{$produk->gambar}}')"></div>
                    <div class="card-body">
                      <h5 class="card-title">{{$produk->nama}}</h5>
                      <p class="card-text">{{Str::limit($produk->deskripsi, 40)}}</p>
                      <a href="{{ url('/produk/'.$produk->id.'/detailproduk') }}" class="btn btn-outline-dark">Kunjungi Kami</a>
                    </div>
                </div>
            </div>

            @endforeach
            @endif
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row justify-content-center  ">
            <div class="col-sm-1">
                {{ $produks->links() }}
            </div>
        </div>
    </div>

</div>
@endsection
