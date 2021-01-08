@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="news">
      <div class="container">
        <h1 class="display-4">News</h1>
      </div>
    </div>

    <div class="container" id="news1">
        <div class="media position-relative">
            @foreach ($news as $news)

            <img src="img/news_gambar/{{$news->gambar}}" width="377px" height="213px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">{{$news->judul_berita}}</h5>
                {{$news->deskripsi}}
            <a href="{{ url('/news/detailnews') }}"> Baca selengkapnya --></a>
            </div>

            @endforeach
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
