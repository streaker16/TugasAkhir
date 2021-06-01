@section('judul', 'Dashboard')
{{-- link relation plugin, css, etc --}}
@include('admin.default')

<!-- Navbar -->
@include('admin.header')
<!-- /.navbar -->
<!-- Main Sidebar Container -->
@include('admin/sidebar')

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6">
                <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$produks}}</h3>
                            <p>Total Produk</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-utensils"></i>
                        </div>
                        <a href="/admin/produk" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$news}}</h3>
                            <p>Total Berita</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-newspaper"></i>
                        </div>
                        <a href="/admin/news" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$documents}}</h3>
                            <p>Total Dokumen</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-file"></i>
                        </div>
                        <a href="/admin/document" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$gallerys}}</h3>
                            <p>Total Galeri</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon far fa-image"></i>
                        </div>
                        <a href="/admin/gallery" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                @if (Session::get('role') == 'admin')

                <div class="col">
                    <!-- small box -->
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3>{{$users}}</h3>
                            <p>Total User</p>
                        </div>
                        <div class="icon">
                              <i class="ion ion-person" style="color: white"></i>
                        </div>
                        <a href="admin/list_user" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                @endif

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('admin/footer')
