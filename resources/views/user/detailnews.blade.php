@extends('user.main')

@section('container')

    <div class="container" id="dlaporan">
        <div class="row">
            <div class="col-sm-9">
                <h1>Penyuluhan ke Masyarakat Setempat</h1>
                <div class="row">
                    <div class="col-sm-7 mb-4">
                        <img src="../img/laporan1.jpg" width="626px" height="333px">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <p>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <h4>Berita Lainnya</h4>
                <hr>
                <div class="media position-relative">
                    <img src="../img/laporan1.jpg" width="100px" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="my-0">Media with stretched link</h5>
                    <a href="{{ url('/laporan/detaillaporan') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>
                <div class="media position-relative">
                    <img src="../img/laporan1.jpg" width="100px" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="my-0">Media with stretched link</h5>
                    <a href="{{ url('/laporan/detaillaporan') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>
                <div class="media position-relative">
                    <img src="../img/laporan1.jpg" width="100px" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="my-0">Media with stretched link</h5>
                    <a href="{{ url('/laporan/detaillaporan') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>
                <div class="media position-relative">
                    <img src="../img/laporan1.jpg" width="100px" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="my-0">Media with stretched link</h5>
                    <a href="{{ url('/laporan/detaillaporan') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>
                <div class="media position-relative">
                    <img src="../img/laporan1.jpg" width="100px" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="my-0">Media with stretched link</h5>
                    <a href="{{ url('/laporan/detaillaporan') }}" class="small"> Baca selengkapnya --></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
