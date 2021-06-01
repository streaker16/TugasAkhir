<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ ('/') }}" class="brand-link">
      <img src="{{ asset('img/LogoUGM.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">KKN Real UGM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/admin/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
<<<<<<< HEAD
          <a href="#" class="d-block">{{Session::get('nama')}}</a>
=======
          <a href="#" class="d-block">Alexander Pierce</a>
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
        </div>
      </div>

      <!-- Sidebar Menu -->
<<<<<<< HEAD
      <nav class="mt-2" id="sidebar-menu">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{ url('/admin') }}"
            class="nav-link @php echo url('/admin') == url()->full()?'active':''; @endphp">
=======
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ ('/admin') }}" class="nav-link active">
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
<<<<<<< HEAD

            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/produk')}}" class="nav-link @php echo url('admin/produk') == url()->full()?'active':''; @endphp">
=======
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/produk')}}" class="nav-link">
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
              <i class="nav-icon fas fa-utensils"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
<<<<<<< HEAD
            <a href="{{ url('admin/news')}}" class="nav-link @php echo url('admin/news') == url()->full()?'active':''; @endphp">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
=======
            <a href="{{ url('admin/news')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
              </p>
            </a>
          </li>
          <li class="nav-item">
<<<<<<< HEAD
            <a href="{{ url('admin/document')}}" class="nav-link @php echo url('admin/document') == url()->full()?'active':''; @endphp">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Dokumen
=======
            <a href="{{ url('admin/document')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Document
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
              </p>
            </a>
          </li>
          <li class="nav-item">
<<<<<<< HEAD
            <a href="{{ url('admin/gallery') }}" class="nav-link @php echo url('admin/gallery') == url()->full()?'active':''; @endphp">
              <i class="nav-icon far fa-image"></i>
              <p>
                Galeri
=======
            <a href="{{ url('admin/gallery') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
              </p>
            </a>
          </li>
          <li class="nav-item">

<<<<<<< HEAD
            @if (Session::get('role') == 'admin')

            <a href="{{ url('admin/list_user') }}" class="nav-link @php echo url('admin/list_user') == url()->full()?'active':''; @endphp">
                <i class="nav-icon far fa-user"></i>
                <p>
                    Daftar Pengguna
=======
            @if (Auth::id() == 1)

            <a href="{{ url('admin/admin') }}" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                    List User
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
                </p>
            </a>

            @endif
<<<<<<< HEAD

=======
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
