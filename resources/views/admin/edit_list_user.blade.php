@section('judul', 'Aktivasi')
{{-- link relation plugin, css, etc --}}
@include('admin.default')

<!-- Navbar -->
@include('admin.header')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('admin/sidebar')

<style>
    td{
        padding-left: 0 !important;
    }
    th{
        padding-right: 0 !important;
    }
</style>

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
                <h1 class="m-0 text-dark">Edit</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item active">Daftar Pengguna</li>
                <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <!-- /.card -->
        <div class="row justify-content-center">
            <div class="card card-info col-8 ">
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 17%">Nama</th>
                                <td>: {{$list_user->nama}}</td>
                                <th style="width: 13%">Provinsi</th>
                                <td>: {{$provinsi->nama}}</td>
                            </tr>
                            <tr>
                                <th>NIM</th>
                                <td>: {{$list_user->nim}}</td>
                                <th>Kabupaten</th>
                                <td>: {{$kabupaten->nama}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: {{$list_user->email}}</td>
                                <th>Kecamatan</th>
                                <td>: {{$kecamatan->nama}}</td>
                            </tr>
                            <tr>
                                <th>Angkatan KKN</th>
                                <td>: {{$list_user->angkatan_kkn}}</td>
                                <th>Desa</th>
                                <td>: {{$desa->nama}}</td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="card-footer text-right">
                    <a class="btn btn-success btn-sm @if ($list_user->status == 'sudah-aktif') disabled @endif" href="/admin/list_user/aktifkan/{{$list_user->id}}">
                        <i class="fas fa-check-circle">
                        </i>
                        Aktifkan
                    </a>
                    <a class="btn btn-danger btn-sm" href="/admin/list_user">
                        <i class="fas fa-arrow-circle-left">
                        </i>
                        Batal
                    </a>
                </div>

                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>



<!-- /.content-wrapper -->
@include('admin/footer')
