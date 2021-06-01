@section('judul', 'Produk')
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
                <button style="color: white" type="button" class="close" data-dismiss="alert">x</button>
                {{session('sukses')}}
            </div>
        @endif
        <div class="row mb-2">
            <div class="col-sm-6">
                @section('judul', 'Produk')
                <h1 class="m-0 text-dark">Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row mb-3" >
            <div class="col-sm">

                @if(Session::get('role') != 'admin')

                <a href="/admin/produktambah" class="btn btn-primary">+ Tambah Produk</a>

                @endif

            </div>
        </div>
        <!-- /.card -->
        <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">List Produk</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
            <thead>
                <tr>
                <th style="width: 15%">Nama</th>
                <th>Deskripsi</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $produk)

                <tr>
                <td>{{$produk->nama}}</td>
                <td class="text-justify">{{$produk->deskripsi}}</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="/produk/{{$produk->id}}/detailproduk" class="btn btn-info" target="_blank"><i class="fas fa-eye"></i></a>
                    <a href="/admin/{{$produk->id}}/editproduk" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href="/admin/{{$produk->id}}/deleteproduk" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus file ini?')"><i class="fas fa-trash"></i></a>
                    </div>
                </td>

                @endforeach
            </tbody>
            </table>
            <div class="p-3">
                Menunjukkan
                {{ $produks->firstItem() }}
                to
                {{ $produks->lastItem() }}
                of
                {{ $produks->total() }}
                entries
            </div>
            <div class="float-right pr-3" style="margin-top: -50px">
                {{ $produks->links() }}
            </div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>



<!-- /.content-wrapper -->
@include('admin/footer')
