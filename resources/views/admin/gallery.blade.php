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
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Gallery</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-sm">
                <a href="../admin/gallerytambah" class="btn btn-primary">+ Tambah Gallery</a>
            </div>
        </div>
        <!-- /.card -->
        <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">List Gallery</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
            <thead>
                <tr>
                <th>File Name</th>
                <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($gallerys as $gallery)

                <tr>
                <td>{{$gallery->gambar}}</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="/gallery" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="/admin/{{$gallery->id}}/deletegallery" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                </td>

                @endforeach

            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>



<!-- /.content-wrapper -->
@include('admin/footer')
