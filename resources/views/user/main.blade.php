<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- Icon Fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    {{-- My Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>KKN UGM</title>
  </head>

  <body>

    <header class="py-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="nav-item"><i class="fas fa-map-marker-alt mr-2"></i>Caturtunggal, Kec. Depok, Yogyakarta 55281</a>
                    <a class="nav-item ml-4"><i class="fas fa-phone mr-2"></i>(0274) 541020</a>
                </div>
                <div class="col d-flex justify-content-end">
                    <a class="nav-item"><i class="fab fa-facebook-square mr-2"></i>KKN REAL UGM</a>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand"><img src="img/LogoUGM.png" width="56" height="57" class="d-inline-block align-center mr-2">Universitas Gadjah Mada</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Home</a>
                    <a class="nav-item nav-link" href="{{ url('/about') }}">About</a>
                    <a class="nav-item nav-link" href="{{ url('/produk') }}">Produk</a>
                    <a class="nav-item nav-link" href="{{ url('/laporan') }}">Laporan</a>
                    <a class="nav-item nav-link" href="{{ url('/galery') }}">Galery</a>
                    <a class="nav-item nav-link" href="{{ url('/contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('container')



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
