@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="home">
        <div class="container">
        <p class="h1 h1-home">Kuliah Kerja Nyata</p>
        </div>
    </div>

    {{-- NEWS --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>NEWS</h2>
            </div>
        </div>

        <div class="row justify-content-center home_news">
            @foreach ($news as $news)

            <div class="col-sm-4">
                <img src="{{ asset('img/news_gambar') }}/{{$news->gambar}}" width="347" height="220">
                <h3>{{$news->judul_berita}}</h3>
            </div>

            @endforeach
        </div>
    </div>
    {{-- end news --}}


    {{-- produk --}}
    <div class="container"></div>
        <div class="row bg-kkn row-eror">
            <div class="col">
                <h2 class="home_title_produk">Produk</h2>
            </div>
        </div>

        <div class="row bg-kkn home_produk row-eror justify-content-center">
            @foreach ($produks as $produk)

            <div class="col-sm-2">
                <img src="{{ asset('img/produk') }}/{{$produk->gambar}}">
            </div>

            @endforeach
            <div>
                <a href="" class="btn btn-outline-warning home-btn mt-5"> See All Produk</a>
            </div>
        </div>
    </div>
    {{-- end produk --}}


    {{-- galeri --}}
    <div class="container home-galeri">
        <div class="row">
            <div class="col">
                <h2 class="home_title_galeri">Galeri</h2>
                <h4 class="home_photos">Photos</h4>
            </div>
        </div>

        <div class="row justify-content-center home_news">
            @foreach ($gallerys as $gallery)

            <div class="col-sm-4 mb-4x">
                <img src="{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}" width="347" height="220">
            </div>

            @endforeach
        </div>
    </div>
    {{-- end galeri --}}

@endsection
