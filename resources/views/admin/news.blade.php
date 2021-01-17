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
                {{session('sukses')}}
            </div>
        @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item active">News</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row mb-3">
            <div class="col-sm">
                <a href="../admin/newstambah" class="btn btn-primary">+ Tambah News</a>
            </div>
        </div>

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">List News</h3>

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
                @foreach ($news as $news)

                <tr>
                <td>{{$news->judul_berita}}</td>
                <td>{{$news->deskripsi}}</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="/news/{{$news->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="/admin/{{$news->id}}/deletenews" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                </td>

                @endforeach
            </tbody>
            </table>
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
