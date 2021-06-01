@section('judul', 'Daftar Pengguna')
{{-- link relation plugin, css, etc --}}
@include('admin.default')

<!-- Navbar -->
@include('admin.header')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('admin/sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                <button style="color: white" type="button" class="close" data-dismiss="alert">x</button>
                {{session('sukses')}}
            </div>
        @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Daftar Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Pengguna</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No
                      </th>
                      <th style="width: 15%">
                          Nama
                      </th>
                      <th style="width: 15%">
                          Email
                      </th>
                      <th style="width: 15%">
                          NIM
                      </th>
                      <th style="width: 9%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%" class="text-center">
                        Aksi
                      </th>
                  </tr>
              </thead>
              <tbody>

                @foreach ($list_user as $key => $user)

                  <tr>
                      <td>
                          {{ $list_user->firstItem() + $key }}
                      </td>
                      <td>
                          <a>
                              {{$user->nama}}
                          </a>
                          <br/>
                          <small>
                              {{$user->created_at}}
                          </small>
                      </td>
                      <td>
                          {{$user->email}}
                      </td>
                      <td>
                          {{$user->nim}}
                      </td>
                      <td class="text-center">
                          @if($user->status == 'sudah-aktif')
                          <span class="badge badge-success">{{$user->status}}</span>
                          @else
                          <span class="badge badge-danger">{{$user->status}}</span>
                          @endif
                      </td>


                      <td class="project-actions text-right">


                          <a class="btn btn-info btn-sm" href="/admin/list_user/edit/{{$user->id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Aktivasi
                          </a>

                          <a class="btn btn-danger btn-sm" href="/admin/{{$user->id}}/deleteuser" onclick="return confirm('Apakah Anda yakin akan menghapus file ini?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </a>
                      </td>
                  </tr>

                @endforeach
              </tbody>
          </table>
          <div class="p-3">
            Menunjukkan
            {{ $list_user->firstItem() }}
            to
            {{ $list_user->lastItem() }}
            of
            {{ $list_user->total() }}
            entries
        </div>
        <div class="float-right pr-3" style="margin-top: -50px">
            {{ $list_user->links() }}
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<!-- /.content-wrapper -->
@include('admin/footer')
