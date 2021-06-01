@extends('user.main')

@section('container')

    <div class="jumbotron jumbotron-fluid" id="document">
      <div class="container">
        @section('title', 'Dokumen')
        <h1 class="display-4">Dokumen</h1>
      </div>
    </div>

    <div class="container mb-5" id="document1">
        @foreach ($documents as $document)

            @php
            $nama = explode('_',$document->nama_file,2);
            @endphp

        <div class="media mb-4">
            <a href="{{ asset('file_dokumen') }}/{{$document->nama_file}}" target="_blank" style="color: black">
                <img src="img/pdf.svg" width="50px" class="mr-3">
                <div class="media-body">
                    <h5 class="mt-3">{{$nama[1]}}</h5>
                    <a href="{{ asset('file_dokumen') }}/{{$document->nama_file}}" download="{{$nama[1]}}" class="btn btn-success float-right" style="margin-top: -40px"> Download </a>
                </div>
            </a>
        </div>

        @endforeach
    </div>

    <div class="container pt-5">
        <div class="row justify-content-center  ">
            <div class="col-sm-1">
                {{ $documents->links() }}
            </div>
        </div>
    </div>
@endsection
