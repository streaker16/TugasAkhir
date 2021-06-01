@extends('user.main')

@section('container')
@section('title', 'Detail Berita')

    <div class="container" id="dnews">
        <div class="row">
            <div class="col-sm-9">

                <h1>{{$news->judul_berita}}</h1>
                <div class="row">
                    <div class="col-sm-10 mb-4">
                        <div class="mr-3" style="width:100%; height:333px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/news_gambar') }}/{{$news->gambar}}')"></div>
                        {{-- <img src="{{ asset('img/news_gambar') }}/{{$news->gambar}}" width="626px" height="333px"> --}}
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-10">
                        {!!$news->deskripsi!!}
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <h4>Berita Lainnya</h4>
                <hr>
                @foreach ($newslainnya as $news)

                <div class="media position-relative">
                    <div class="mr-3" style="width:100px; height:70px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/news_gambar') }}/{{$news->gambar}}')"></div>
                    <div class="media-body">
                        <h5 class="my-0">{{ Str::limit($news->judul_berita, 19) }}</h5>
                    <a href="{{ url('/news/'.$news->id.'/detailnews') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection
