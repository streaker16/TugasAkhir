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
          <a href="#" class="d-block">{{Session::get('nama')}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" id="sidebar-menu">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{ url('/admin') }}"
            class="nav-link @php echo url('/admin') == url()->full()?'active':''; @endphp">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>

            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/produk')}}" class="nav-link @php echo url('admin/produk') == url()->full()?'active':''; @endphp">
              <i class="nav-icon fas fa-utensils"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/news')}}" class="nav-link @php echo url('admin/news') == url()->full()?'active':''; @endphp">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/document')}}" class="nav-link @php echo url('admin/document') == url()->full()?'active':''; @endphp">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Dokumen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/gallery') }}" class="nav-link @php echo url('admin/gallery') == url()->full()?'active':''; @endphp">
              <i class="nav-icon far fa-image"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>
          <li class="nav-item">

            @if (Session::get('role') == 'admin')

            <a href="{{ url('admin/list_user') }}" class="nav-link @php echo url('admin/list_user') == url()->full()?'active':''; @endphp">
                <i class="nav-icon far fa-user"></i>
                <p>
                    Daftar Pengguna
                </p>
            </a>

            @endif

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
