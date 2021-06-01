@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="gallery">
      <div class="container">
        @section('title', 'Galeri')
        <h1 class="display-4">Galeri</h1>
      </div>
    </div>

    <div class="container-fluid" id="dgallery">
        <div class="row">
            <div class="col-sm-3">
                <img src="{{ asset('img/gallery/gallery1.png') }}" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('img/gallery/gallery2.png') }}" width="111%" height="111%" >
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('img/gallery/gallery3.png') }}" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('img/gallery/gallery4.png') }}" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('img/gallery/gallery5.png') }}" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('img/gallery/gallery6.png') }}" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('img/gallery/gallery7.png') }}" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('img/gallery/gallery8.png') }}" width="111%" height="111%">
            </div>
        </div>
    </div>

    <div class="container-fluid" id="backgallery">
        <div class="row">
            @foreach ($gallerys as $gallery)

            <div class="col-sm-3 py-4">
                <a href="{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}" target="_blank">
                    <div style="width:270px; border-radius: 10px; border-style: solid; border-width: 1px; border-color: black; height:163px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}')" ></div>
                </a>
            </div>

            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-1">
                {{ $gallerys->links() }}
            </div>
        </div>
    </div>
@endsection
