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
                    <h1 class="m-0 text-dark">Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                    <li class="breadcrumb-item active">Tambah Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
        <!-- /.content-header -->

    <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Upload Produk</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form"  method="POST" enctype="multipart/form-data" action="{{ url('admin/produktambah')}}">
            @csrf
            <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Produk</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kota</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" name="kota" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi Produk</label>
                <input  required type="text" class="form-control" id="exampleInputPassword1" name="deskripsi" placeholder="Deskripsi">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Masukkan File</label>
                <input required type="file" class="form-control" name="file" id="exampleInputFile">
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
