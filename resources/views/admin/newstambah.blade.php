<<<<<<< HEAD
@section('judul', 'Tambah Berita')
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item active">News</li>
              <li class="breadcrumb-item active">Tambah News</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<<<<<<< HEAD
        <div class="row mb-3">
            <div class="col-sm">
                <a href="/admin/news" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Upload News</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('admin/newstambah')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                <label>Judul Berita</label>
                <input required type="text" class="form-control" name="judul_berita"  placeholder="Masukkan judul">
                </div>

                <div class="form-group">
                <label>Masukkan File Gambar</label>
                <input required type="file" class="form-control @error('file') is-invalid @enderror" name="file">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    File format must be JPEG, JPG, SVG, PNG. Max size file 2mb.
                </small>
                @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group">
                <label>Deskripsi</label>
                <textarea required class="textarea" name="deskripsi" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
        <!-- /.card -->
=======
        <div class="row">
            <div class="col-sm">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Upload News</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('admin/newstambah')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Berita</label>
                    <input required type="text" class="form-control" name="judul_berita" id="exampleInputEmail1" placeholder="Masukkan judul">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Masukkan File Gambar</label>
                    <input required type="file" class="form-control" name="file" id="exampleInputFile">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Deskripsi</label>
                    <textarea required class="textarea" name="deskripsi" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            <!-- /.card -->

            </div>
        </div>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
    </section>
    <!-- /.content -->
  </div>


  @include('admin/footer')
