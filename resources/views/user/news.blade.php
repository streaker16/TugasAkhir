@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="news">
      <div class="container">
        <h1 class="display-4">News</h1>
      </div>
    </div>

    <div class="container" id="news1">
        <div class="media position-relative">
            <img src="img/laporan1.jpg" width="377px" height="213px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Media with stretched link</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <a href="{{ url('/news/detailnews') }}"> Baca selengkapnya --></a>
            </div>
        </div>

        <div class="media position-relative">
            <img src="img/laporan1.jpg" width="377px" height="213px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Media with stretched link</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <a href="#" >Baca selengkapnya --></a>
            </div>
        </div>

        <div class="media position-relative pb-5">
            <img src="img/laporan1.jpg" width="377px" height="213px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Media with stretched link</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <a href="#" >Baca selengkapnya --></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-1">
                <a href="" class="btn btn-outline-warning news-btn py-2">Lainnya</a>
            </div>
        </div>
    </div>
@endsection
