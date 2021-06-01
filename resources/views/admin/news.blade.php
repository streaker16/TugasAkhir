<<<<<<< HEAD
@section('judul', 'Berita')
=======
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
{{-- link relation plugin, css, etc --}}
@include('admin.default')

<!-- Navbar -->
@include('admin.header')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('admin/sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
<<<<<<< HEAD
                <button style="color: white" type="button" class="close" data-dismiss="alert">x</button>
=======
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
                {{session('sukses')}}
            </div>
        @endif
        <div class="row mb-2">
          <div class="col-sm-6">
<<<<<<< HEAD
            <h1>Berita</h1>
=======
            <h1>News</h1>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
<<<<<<< HEAD
              <li class="breadcrumb-item active">Berita</li>
=======
              <li class="breadcrumb-item active">News</li>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row mb-3">
            <div class="col-sm">
<<<<<<< HEAD

                @if(Session::get('role') != 'admin')

                <a href="/admin/newstambah" class="btn btn-primary">+ Tambah Berita</a>

                @endif

=======
                <a href="../admin/newstambah" class="btn btn-primary">+ Tambah News</a>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
            </div>
        </div>

        <div class="card card-info">
            <div class="card-header">
<<<<<<< HEAD
                <h3 class="card-title">List Berita</h3>
=======
                <h3 class="card-title">List News</h3>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4

                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
            </div>
        <div class="card-body p-0">
            <table class="table">
            <thead>
                <tr>
                <th style="width: 20%">Judul Berita</th>
                <th>Deskripsi</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
<<<<<<< HEAD
                @foreach ($news as $berita)

                <tr>
                <td>{{$berita->judul_berita}}</td>
                <td class="text-justify">{{ strip_tags($berita->deskripsi) }}</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="/news/{{$berita->id}}/detailnews" class="btn btn-info" target="_blank"><i class="fas fa-eye"></i></a>
                    <a href="/admin/{{$berita->id}}/editnews" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href="/admin/{{$berita->id}}/deletenews" class="btn btn-danger"><i class="fas fa-trash" onclick="return confirm('Apakah Anda yakin akan menghapus file ini?')"></i></a>
=======
                @foreach ($news as $news)

                <tr>
                <td>{{$news->judul_berita}}</td>
                <td>{{$news->deskripsi}}</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="/news/{{$news->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="/admin/{{$news->id}}/deletenews" class="btn btn-danger"><i class="fas fa-trash"></i></a>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
                    </div>
                </td>

                @endforeach
            </tbody>
            </table>
<<<<<<< HEAD
            <div class="p-3">
                Menunjukkan
                {{ $news->firstItem() }}
                to
                {{ $news->lastItem() }}
                of
                {{ $news->total() }}
                entries
            </div>
            <div class="float-right pr-3" style="margin-top: -50px">
                {{ $news->links() }}
            </div>
=======
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
        </div>
        <!-- /.card-body -->
        </div>

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>


  @include('admin/footer')
