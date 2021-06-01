@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="gallery">
      <div class="container">
<<<<<<< HEAD
        @section('title', 'Galeri')
        <h1 class="display-4">Galeri</h1>
=======
        <h1 class="display-4">Gallery</h1>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
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
<<<<<<< HEAD
                <a href="{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}" target="_blank">
                    <div style="width:270px; border-radius: 10px; border-style: solid; border-width: 1px; border-color: black; height:163px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}')" ></div>
                </a>
=======
                <img src="{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}" width="270" height="163">
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
            </div>

            @endforeach
        </div>
    </div>

<<<<<<< HEAD
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-1">
                {{ $gallerys->links() }}
            </div>
        </div>
    </div>
=======
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>

>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
@endsection
