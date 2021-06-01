@extends('user.main')

@section('container')
<<<<<<< HEAD
@section('title', 'Detail Berita')
=======
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4

    <div class="container" id="dnews">
        <div class="row">
            <div class="col-sm-9">

                <h1>{{$news->judul_berita}}</h1>
                <div class="row">
<<<<<<< HEAD
                    <div class="col-sm-10 mb-4">
                        <div class="mr-3" style="width:100%; height:333px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/news_gambar') }}/{{$news->gambar}}')"></div>
                        {{-- <img src="{{ asset('img/news_gambar') }}/{{$news->gambar}}" width="626px" height="333px"> --}}
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-10">
                        {!!$news->deskripsi!!}
=======
                    <div class="col-sm-7 mb-4">
                        <img src="{{ asset('img/news_gambar') }}/{{$news->gambar}}" width="626px" height="333px">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        {{$news->deskripsi}}
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <h4>Berita Lainnya</h4>
                <hr>
<<<<<<< HEAD
                @foreach ($newslainnya as $news)

                <div class="media position-relative">
                    <div class="mr-3" style="width:100px; height:70px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/news_gambar') }}/{{$news->gambar}}')"></div>
                    <div class="media-body">
                        <h5 class="my-0">{{ Str::limit($news->judul_berita, 19) }}</h5>
                    <a href="{{ url('/news/'.$news->id.'/detailnews') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>

                @endforeach
=======
                <div class="media position-relative">
                    <img src="{{ asset('img/news1.jpg') }}" width="100px" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="my-0">Media with stretched link</h5>
                    <a href="{{ url('/news/detailnews') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
            </div>
        </div>
    </div>

@endsection
