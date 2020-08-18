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
                <h1 class="m-0 text-dark">Gallery</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Upload Image</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                    </div>
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
        <!-- /.card -->
        <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">File Image</h3>

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
                <th>File Size</th>
                <th></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                <td>Functional-requirements.docx</td>
                <td>49.8005 kb</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                </td>
                <tr>
                <td>UAT.pdf</td>
                <td>28.4883 kb</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                </td>
                <tr>
                <td>Email-from-flatbal.mln</td>
                <td>57.9003 kb</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                </td>
                <tr>
                <td>Logo.png</td>
                <td>50.5190 kb</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                </td>
                <tr>
                <td>Contract-10_12_2014.docx</td>
                <td>44.9715 kb</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                </td>

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
