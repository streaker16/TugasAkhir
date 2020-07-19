@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="gallery">
      <div class="container">
        <h1 class="display-4">Gallery</h1>
      </div>
    </div>

    <div class="container-fluid" id="dgallery">
        <div class="row">
            <div class="col-sm-3">
                <img src="img/gallery/gallery1.png" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="img/gallery/gallery2.png" width="111%" height="111%" >
            </div>
            <div class="col-sm-3">
                <img src="img/gallery/gallery3.png" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="img/gallery/gallery4.png" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="img/gallery/gallery5.png" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="img/gallery/gallery6.png" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="img/gallery/gallery7.png" width="111%" height="111%">
            </div>
            <div class="col-sm-3">
                <img src="img/gallery/gallery8.png" width="111%" height="111%">
            </div>
        </div>
    </div>

    <div class="container-fluid" id="backgallery">
        <div class="row">
            <div class="col-sm-3 py-4">
                <img src="img/laporan1.jpg" width="270" height="163">
            </div>
            <div class="col-sm-3 py-4">
                <img src="img/laporan1.jpg" width="270" height="163">
            </div>
            <div class="col-sm-3 py-4">
                <img src="img/laporan1.jpg" width="270" height="163">
            </div>
            <div class="col-sm-3 py-4">
                <img src="img/laporan1.jpg" width="270" height="163">
            </div>
            <div class="col-sm-3 py-4">
                <img src="img/laporan1.jpg" width="270" height="163">
            </div>
            <div class="col-sm-3 py-4">
                <img src="img/laporan1.jpg" width="270" height="163">
            </div>
            <div class="col-sm-3 py-4">
                <img src="img/laporan1.jpg" width="270" height="163">
            </div>
            <div class="col-sm-3 py-4">
                <img src="img/laporan1.jpg" width="270" height="163">
            </div>
        </div>
    </div>

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

@endsection
