@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="news">
      <div class="container">
          @section('title', 'Berita')
        <h1 class="display-4">Berita</h1>
      </div>
    </div>

    <div class="container mt-5" id="news1">

            @foreach ($news as $news)
            <div class="row mb-5">
                <div class="col-3">
                    <div class="mr-3" style="width:100%; height: 150px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/news_gambar') }}/{{$news->gambar}}')"></div>
                </div>
                <div class="col-9">
                    <div>
                        <h5 class="mt-0">{{$news->judul_berita}}</h5>
                        <div class="text-justify">{{ strip_tags(Str::limit($news->deskripsi, 500)) }}</div>
                        {{-- {!!$news->deskripsi!!} --}}
                        <a href="{{ url('/news/'.$news->id.'/detailnews') }}" style="color: black"> Baca selengkapnya --></a>
                    </div>
                </div>
            </div>
            @endforeach

    </div>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-1">
                <a href="/news/newslainnya" class="btn btn-outline-warning news-btn py-2">Lainnya</a>
            </div>
        </div>
    </div>
@endsection
