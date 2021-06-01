<<<<<<< HEAD
@section('judul', 'Galeri')
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
<div class="content-header">
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
                <h1 class="m-0 text-dark">Galeri</h1>
=======
                <h1 class="m-0 text-dark">Gallery</h1>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
<<<<<<< HEAD
                <li class="breadcrumb-item active">Galeri</li>
=======
                <li class="breadcrumb-item active">Gallery</li>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
<<<<<<< HEAD
</div><!-- /.content-header -->

    {{-- Main Content --}}
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm">
                @if(Session::get('role') != 'admin')
                    <a href="/admin/gallerytambah" class="btn btn-primary">+ Tambah Galeri</a>
                @endif
=======
</div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-sm">
                <a href="../admin/gallerytambah" class="btn btn-primary">+ Tambah Gallery</a>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
            </div>
        </div>
        <!-- /.card -->
        <div class="card card-info">
        <div class="card-header">
<<<<<<< HEAD
            <h3 class="card-title">List Galeri</h3>
=======
            <h3 class="card-title">List Gallery</h3>
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
<<<<<<< HEAD
                <th>Nama File</th>
=======
                <th>File Name</th>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
                <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($gallerys as $gallery)

<<<<<<< HEAD
                @php
                $nama = explode('_',$gallery->gambar,2);
                @endphp

                <tr>
                <td>{{$nama[1]}}</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="{{ asset('img/gallery_gambar') }}/{{$gallery->gambar}}" class="btn btn-info" target="_blank"><i class="fas fa-eye"></i></a>
                    <a href="/admin/{{$gallery->id}}/deletegallery" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus file ini?')"><i class="fas fa-trash"></i></a>
=======
                <tr>
                <td>{{$gallery->gambar}}</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="/gallery" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="/admin/{{$gallery->id}}/deletegallery" class="btn btn-danger"><i class="fas fa-trash"></i></a>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
                    </div>
                </td>

                @endforeach
<<<<<<< HEAD
            </tbody>
            </table>
            <div class="p-3">
                Menunjukkan
                {{ $gallerys->firstItem() }}
                to
                {{ $gallerys->lastItem() }}
                of
                {{ $gallerys->total() }}
                entries
            </div>
            <div class="float-right pr-3" style="margin-top: -50px">
                {{ $gallerys->links() }}
            </div>
=======

            </tbody>
            </table>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>



<!-- /.content-wrapper -->
@include('admin/footer')
