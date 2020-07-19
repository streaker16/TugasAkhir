@extends('user.main')

@section('container')

    <div class="container" id="dproduk"> {{-- dproduk = detail produk --}}
        <div class="row">
            <div class="col-sm-6 pr-5">
                <img src="../img/produk/produkdetail.png" class="img-fluid" alt="image detail produk">
            </div>
            <div class="col-sm-6 pl-5">
                <h2 class="bg-kkn">Bakpia</h2>
                <p>Merupakan makanan khas asal Yogya yang sudah lama ada dan masih eksis sampai sekarang ini. Biasanya bakpia berisikan dengan isian kacang hijau, namun kini sudah makin bervariasi. Bakpia ini mudah didapatkan, jadi kawan - kawan tidak akan kesusahan apabila ingin mencoba jajanan khas asal Yogya yang satu ini.</p>
            </div>
        </div>
    </div>

    <div class="section list-produk-lainnya">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Produk Lainnya</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <img src="../img/produk/gambar2.png" class="card-img-top" alt="image Produk">
                        <div class="card-body">
                          <h5 class="card-title">Kue Cucur</h5>
                          <p class="card-text">Nusa tenggara tImur</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="../img/produk/gambar2.png" class="card-img-top" alt="image Produk">
                        <div class="card-body">
                          <h5 class="card-title">Kue Cucur</h5>
                          <p class="card-text">Nusa tenggara tImur</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="../img/produk/gambar2.png" class="card-img-top" alt="image Produk">
                        <div class="card-body">
                          <h5 class="card-title">Kue Cucur</h5>
                          <p class="card-text">Nusa tenggara tImur</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="../img/produk/gambar2.png" class="card-img-top" alt="image Produk">
                        <div class="card-body">
                          <h5 class="card-title">Kue Cucur</h5>
                          <p class="card-text">Nusa tenggara tImur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
