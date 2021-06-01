<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- Icon Fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    {{-- My Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Quicksand:wght@500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap" rel="stylesheet">


    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>KKN UGM - @yield('title')</title>
  </head>

  <body>
    <header class="py-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="nav-item"><i class="fas fa-map-marker-alt mr-2"></i>Caturtunggal, Kec. Depok, Yogyakarta 55281</a>
                    <a class="nav-item ml-4">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                        </svg>
                    (0274) 541020</a>
                </div>
                <div class="col text-right pr-4">
                    <a class="nav-item"><i class="fab fa-facebook-square mr-2"></i>KKN REAL UGM</a>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container py-3">
            <img src="{{ asset('img/logo.png') }}">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Beranda</a>
                    <a class="nav-item nav-link" href="{{ url('/about') }}">Tentang</a>
                    <a class="nav-item nav-link" href="{{ url('/produk') }}">Produk</a>
                    <a class="nav-item nav-link" href="{{ url('/news    ') }}">Berita</a>
                    <a class="nav-item nav-link" href="{{ url('/document') }}">Dokumen</a>
                    <a class="nav-item nav-link" href="{{ url('/gallery') }}">Galeri</a>
                    <a class="nav-item nav-link" href="{{ url('/contact') }}">Kontak</a>
                    <!-- Button trigger modal -->

                    @if (Session::has('id'))

                    <a class="nav-item btn btn-primary tombol" href="/admin">Dashboard</a>

                    @else

                    <a class="nav-item btn btn-primary tombol" data-toggle="modal" data-target="#modal">Masuk</a>

                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header border-0">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"><h5>LOGIN</h5></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false"><h5>REGISTER</h5></a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                  <div class="tab-content" id="myTabContent">

                    {{-- Login --}}
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form action="/postlogin" method="POST">
                            @csrf

                            @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    {!! Session::get('message') !!}
                                </p>
                            @endif
                            <div class="form-group">
                              <label>Email</label>
                              <input name="email" type="email" class="form-control" id="email" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                <small id="emailHelp" class="form-text text-muted">
                                    Kami tidak akan pernah membagikan email Anda dengan orang lain.
                                </small>
                            </div>

                            <div class="form-group">
                              <label>Password</label>
                              <input name="password" type="password" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                <small id="emailHelp" class="form-text text-muted">
                                    Harus lebih dari 5 karakter.
                                </small>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    {{-- Register --}}
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form action="{{ url('/postregister')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label> Nama </label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                <small class="form-text text-muted">
                                    Masukkan nama lengkap
                                </small>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> NIM </label>
                                <input type="text" name="nim" maxlength="18" class="form-control @error('nim') is-invalid @enderror" maxlength="18" value="{{ old('nim') }}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                <small class="form-text text-muted">
                                    Masukkan NIM lengkap
                                </small>
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> Angkatan KKN </label>
                                <select name="angkatan_kkn" class="form-control @error('angkatan_kkn') is-invalid @enderror" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                    @php
                                        for ($i=1990; $i<=date('Y') ; $i++) {
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    @endphp
                                </select>
                            </div>

                            <div class="form-group">
                                <div id="list_kelompok">
                                    <label>Pilih Kelompok</label>
                                    <select class="form-control" name="list_kelompok" onchange="myFunction(event)">
                                        <option disabled selected>Pilih Kelompok</option>

                                        @foreach ($kelompoks as $kelompok)
                                        <option value="{{$kelompok->id_kelompok}}">{{$kelompok->nama_kelompok}} | Kec: {{$kelompok->nama_kecamatan}} Desa: {{$kelompok->nama_desa}} </option>
                                        @endforeach

                                        <option value="+">Tambah Kelompok Anda</option>
                                    </select>
                                </div>
                                <div id="nama_kelompok" style="display: none">
                                    <label>Input Nama Kelompok</label>
                                    <input type="text" name="nama_kelompok" class="form-control @error('nama_kelompok') is-invalid @enderror" value="{{ old('nama_kelompok') }}">
                                    @error('nama_kelompok')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsi" onchange="myFunction(event)" value="{{ old('provinsi') }}" id="provinsi" disabled>
                                            <option value="0">Pilih Provinsi</option>
                                            @foreach ($provinsis as $provinsi)

                                                <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <select class="form-control" name="kabupaten" value="{{ old('kabupaten') }}" id="kabupaten">
                                            <option value="0">Pilih Kabupaten</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select class="form-control" name="kecamatan" value="{{ old('kecamatan') }}" id="kecamatan">
                                            <option value="0">Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Desa</label>
                                        <select class="form-control" name="desa" value="{{ old('desa') }}" id="desa" required>
                                            <option value="0">Pilih Desa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                <small class="form-text text-muted">
                                    Kami tidak akan pernah membagikan email Anda dengan orang lain.
                                </small>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                <small class="form-text text-muted">
                                    Harus Lebih dari 5 karakter.
                                </small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                              <label>Password Konfirmasi</label>
                              <input required type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                              @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="alert alert-info">
                                    - Harap Periksa Kembali Data Yang Anda Masukkan.<br>
                                    - Silahkan Melakukan Login Dalam Kurun Waktu 1x24 Jam.<br>
                                </div>
                            </div>

                            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>

            </div>
        </div>
        </div>
    </div>


    @yield('container')

    <div class="container-fluid" id="contact-section">
        <div class="row py-3">
            <div class="col-sm-12">
                <h2 class="text-center py-3">Kontak Kami</h2>
                <dl class="row ">
                    <dt class="col-6 text-right">Email :</dt>
                    <dd class="col-6 pl-1 pt-2">kknreal@ugm.ac.id</dd>
                    <dt class="col-6 text-right">Facebook :</dt>
                    <dd class="col-6 pl-1 pt-2" ><a href="https://www.facebook.com/KKNREALUGM/">@KKNREALUGM</a></dd>
                </dl>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm" id="footer">
        <div class="container px-5 ">
            <img src="{{ asset('img/logofooter.png') }}" width="9%" height="9%">
            <p> &copy; copyright 2020 | dibuat dengan <i class="fas fa-heart"></i> oleh KKN UGM</p>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{ url('/about') }}">Tentang</a>
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Halaman Beranda</a>
                    <a class="nav-item nav-link" href="{{ url('/produk') }}">Produk</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    @if ($errors->any())
        <script>
            $('#modal').modal('show')
            $('[href="#register"]').tab('show');
        </script>
    @endif
    @if (Session::has('message'))
        <script>
            $('#modal').modal('show')
            $('[href="#login"]').tab('show');
        </script>
    @endif
    <script>
        function myFunction(e) {
            console.log(e.target.value)
            if(e.target.value == '+'){
                console.log('tambah kelompok sendiri')
                $('#nama_kelompok').show();
                $('#provinsi').prop('disabled', false); //untuk menonaktifkan kolom select provinsi
            }else{
                console.log (e.target.value)
                $('#nama_kelompok').hide();
                $('#provinsi').prop('disabled', true); //untuk mengaktifkan kolom select provinsi
            }
        }
    </script>
    <script>
         $(document).ready(function(){
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

        //provinsi on change, untuk mengaitkan id dari masing2 provinsi, kabupaten, kec, dan desa
            $('#provinsi').change(function (e) {
                $.ajax({
                    url: "<?= url('/kabupaten/') ?>/" + $(this).val(),
                    method: 'GET',
                    success: function (data) {

                        $('#kabupaten').children('option:not(:first)').remove().end();

                        $.each(data, function (index, kabupaten) {
                            $('#kabupaten').append('<option value="' + kabupaten.id + '"> ' +
                                kabupaten.nama + ' </option>')
                        });
                    }
                });
            });

            $('#kabupaten').change(function (e) {
                $.ajax({
                    url: "<?= url('/kecamatan/') ?>/" + $(this).val(),
                    method: 'GET',
                    success: function (data) {

                        $('#kecamatan').children('option:not(:first)').remove().end();

                        $.each(data, function (index, kecamatan) {
                            $('#kecamatan').append('<option value="' + kecamatan.id + '"> ' +
                                kecamatan.nama + ' </option>')
                        });
                    }
                });
            });

            $('#kecamatan').change(function (e) {
                $.ajax({
                    url: "<?= url('/desa/') ?>/" + $(this).val(),
                    method: 'GET',
                    success: function (data) {

                        $('#desa').children('option:not(:first)').remove().end();

                        $.each(data, function (index, desa) {
                            $('#desa').append('<option value="' + desa.id + '"> ' +
                                desa.nama + ' </option>')
                        });
                    }
                });
            });
        });
    </script>
  </body>
</html>
