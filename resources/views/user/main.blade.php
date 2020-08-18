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
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Quicksand:wght@500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap" rel="stylesheet">


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
            <img src="../img/logo.png">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Home</a>
                    <a class="nav-item nav-link" href="{{ url('/about') }}">About</a>
                    <a class="nav-item nav-link" href="{{ url('/produk') }}">Produk</a>
                    <a class="nav-item nav-link" href="{{ url('/news') }}">News</a>
                    <a class="nav-item nav-link" href="{{ url('/document') }}">Document</a>
                    <a class="nav-item nav-link" href="{{ url('/gallery') }}">Gallery</a>
                    <a class="nav-item nav-link" href="{{ url('/contact') }}">Contact</a>
                    <a class="nav-item btn btn-primary tombol" href="#">Join Us</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('container')

    <div class="container-fluid" id="contact-section">
        <div class="row py-3">
            <div class="col-sm-12">
                <h2 class="text-center py-3">Contact Us</h2>
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
            <img src="../img/logofooter.png" width="9%" height="9%">
            <p> &copy; copyright 2020 | build with <i class="fas fa-heart"></i> by. KKN UGM</p>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{ url('/about') }}">About</a>
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Homepage</a>
                    <a class="nav-item nav-link" href="{{ url('/produk') }}">Produk</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
