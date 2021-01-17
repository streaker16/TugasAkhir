@extends('user.main')

@section('container')

    <div class="container" id="dnews">
        <div class="row">
            <div class="col-sm-9">

                <h1>{{$news->judul_berita}}</h1>
                <div class="row">
                    <div class="col-sm-7 mb-4">
                        <img src="{{ asset('img/news_gambar') }}/{{$news->gambar}}" width="626px" height="333px">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        {{$news->deskripsi}}
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <h4>Berita Lainnya</h4>
                <hr>
                <div class="media position-relative">
                    <img src="{{ asset('img/news1.jpg') }}" width="100px" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="my-0">Media with stretched link</h5>
                    <a href="{{ url('/news/detailnews') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
