{{-- link relation plugin, css, etc --}}
@include('admin.default')

<!-- Navbar -->
@include('admin.header')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('admin/sidebar')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Document</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item active">Document</li>
                    <li class="breadcrumb-item active">Tambah Document</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    {{-- Main Content --}}
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm">
                <a href="/admin/document" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Upload Document</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" action="{{ url('admin/documenttambah')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                <label>Masukkan File</label>
                <input required type="file" class="form-control @error('file') is-invalid @enderror" name="file">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    File format must be PDF. Max size file 10mb.
                </small>
                @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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



<!-- /.content-wrapper -->
@include('admin/footer')
