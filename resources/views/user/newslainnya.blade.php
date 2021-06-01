@extends('user.main')

@section('container')
@section('title', 'Semua Berita')

    <div class="jumbotron jumbotron-fluid" id="news">
      <div class="container">
        <h1 class="display-4">Berita</h1>
      </div>
    </div>

    <div class="container mt-5" id="news1">
        <div class="row pt-1">
            @foreach ($news as $berita)
            <div class="col-3 mb-5 pr-0">
                <div class="mr-3" style="width:100%; height: 150px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('img/news_gambar') }}/{{$berita->gambar}}')"></div>
            </div>
            <div class="col-3 mb-5 pr-4">
                <div>
                    <h5 class="mt-0">{{$berita->judul_berita}}</h5>
                    <div class="text-justify">{{ strip_tags(Str::limit($berita->deskripsi, 300)) }}</div>
                    <a href="{{ url('/news/'.$berita->id.'/detailnews') }}" style="color: black"> Baca selengkapnya --></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container pt-5">
        <div class="row justify-content-center  ">
            <div class="col-sm-1">
                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection
