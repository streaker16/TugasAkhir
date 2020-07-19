@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="home">
        <div class="container">
        <p class="h1 h1-home">Kuliah Kerja Nyata</p>
        </div>
    </div>

    {{-- laporan kegiatan --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Laporan kegiatan</h2>
            </div>
        </div>

        <div class="row justify-content-center home_laporan">
            <div class="col-sm-4">
                <img src="img/laporan1.jpg" width="347" height="220">
                <h3>Distribusi Bibit ke Masyarakat</h3>
            </div>
            <div class="col-sm-4">
                <img src="img/laporan1.jpg" width="347" height="220">
                <h3>Keberasilan membuat alat pemurnian air</h3>
            </div>
            <div class="col-sm-4">
                <img src="img/laporan1.jpg" width="347" height="220">
                <h3>Keberangkatan KKn Mahasiswa UGM!</h3>
            </div>
            <div class="col-sm-4">
                <img src="img/laporan1.jpg" width="347" height="220">
                <h3>Pameran Alat Teknologi Pertanian Mahasiswa UGM</h3>
            </div>
            <div class="col-sm-4">
                <img src="img/laporan1.jpg" width="347" height="220">
                <h3>UGM Melepaskan 2225 Mahasiswa untuk KKN</h3>
            </div>
            <div class="col-sm-4">
                <img src="img/laporan1.jpg" width="347" height="220">
                <h3>Penanaman RKT PT.Janggala 2018/2019</h3>
            </div>
        </div>
    </div>
    {{-- end laporan kegiatan --}}


    {{-- produk --}}
    <div class="container"></div>
        <div class="row bg-kkn row-eror">
            <div class="col">
                <h2 class="home_title_produk">Produk</h2>
            </div>
        </div>

        <div class="row bg-kkn home_produk row-eror justify-content-center">
            <div class="col-sm-2">
                <img src="img/produk/gambar1.png">
            </div>
            <div class="col-sm-2">
                <img src="img/produk/gambar2.png">
            </div>
            <div class="col-sm-2">
                <img src="img/produk/gambar3.png">
            </div>
            <div class="col-sm-2">
                <img src="img/produk/gambar4.png">
            </div>
            <div class="col-sm-2">
                <img src="img/produk/gambar5.png">
            </div>
            <div class="col-sm-2">
                <img src="img/produk/gambar6.png">
            </div>
            <a href="" class="btn btn-outline-warning home-btn mt-5"> See All Produk</a>
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

        <div class="row justify-content-center home_laporan">
            <div class="col-sm-4 mb-4x">
                <img src="img/laporan1.jpg" width="347" height="220">
            </div>
            <div class="col-sm-4 mb-4 mx-1 ml-3">
                <img src="img/laporan1.jpg" width="347" height="220">
            </div>
            <div class="col-sm-4 mb-4">
                <img src="img/laporan1.jpg" width="347" height="220">
            </div>
            <div class="col-sm-4 mb-4">
                <img src="img/laporan1.jpg" width="347" height="220">
            </div>
            <div class="col-sm-4 mb-4 mx-1 ml-3">
                <img src="img/laporan1.jpg" width="347" height="220">
            </div>
            <div class="col-sm-4 mb-4">
                <img src="img/laporan1.jpg" width="347" height="220">
            </div>
        </div>
    </div>
    {{-- end galeri --}}

@endsection
