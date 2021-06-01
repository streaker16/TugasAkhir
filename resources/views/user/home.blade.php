@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="home">
        <div class="container">
        @section('title', 'Beranda')
        <p class="h1 h1-home">Kuliah Kerja Nyata</p>
        </div>
    </div>

    {{-- NEWS --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Berita</h2>
            </div>
        </div>

        <div class="row justify-content-center home_news">
            @foreach ($news as $news)

            <a href="{{ url('/news/'.$news->id.'/detailnews') }}"></a>
            <div class="col-sm-4">
                <a href="{{ url('/news/'.$news->id.'/detailnews') }}" style="color: black">
                    <div style="width:347px; height:220px; border-radius: 10px; border-style: solid; border-width: 1px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/news_gambar') }}/{{$news->gambar}}')" ></div>
                    <h3>{{$news->judul_berita}}</h3>
                </a>
            </div>

            @endforeach
        </div>
    </div>
    {{-- end news --}}


    {{-- produk --}}
    <div class="container"></div>
        <div class="row bg-kkn">
            <div class="col">
                <h2 class="home_title_produk">Produk</h2>
            </div>
        </div>

        <div class="row bg-kkn home_produk justify-content-center">
            @foreach ($produks as $produk)

            <div class="col-sm-2">
                <a href="{{ url('/produk/'.$produk->id.'/detailproduk') }}" class="btn">
                    <div style="width:175px; height:175px; border-radius: 23px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/produk') }}/{{$produk->gambar}}')" ></div>
                    {{-- <img src="{{ asset('img/produk') }}/{{$produk->gambar}}"> --}}
                </a>
                </div>

            @endforeach
        </div>
        <div class="row bg-kkn ">
            <div class="col text-center">
                <a href="/produk" class="btn btn-outline-warning home-btn mb-4"> Lihat Semua Produk </a>
            </div>
        </div>
    </div>
    {{-- end produk --}}


    {{-- galeri --}}
    <div class="container home-galeri">
        <div class="row">
            <div class="col">
                <h2 class="home_title_galeri">Galeri</h2>
                <h4 class="home_photos">Foto</h4>
            </div>
        </div>

        <div class="row justify-content-center home_news">
            @foreach ($gallerys as $gallery)

            <div class="col-sm-4 py-2">
                    <a href="{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}" target="_blank">
                    <div style="width:347px; height:220px; border-radius: 8px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}')" ></div>
                    {{-- <img src="{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}" width="347" height="220"> --}}
                </a>
                </div>

            @endforeach
        </div>
    </div>
    {{-- end galeri --}}

@endsection
