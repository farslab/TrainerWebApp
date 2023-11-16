<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link align-items-center justify-content-center d-flex flex-row">
      <img
        src="dist/img/fitlifelogo-white.png"
        alt="fitlife"
        class="brand-image"
      />
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            src="dist/img/avatar.png"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('admin-dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Genel Bakış
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/trainers" class="nav-link {{ Request::is('trainers') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Antrenör Listesi
                <span class="right badge badge-danger">{{\App\Models\Trainer::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/customers" class="nav-link {{ Request::is('customers') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danışan Listesi
                <span class="right badge badge-danger">{{\App\Models\Customer::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/create-new-user" class="nav-link {{ Request::is('create-new-user') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Yeni Kullanıcı Oluştur
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <span class="badge badge-info right">+</span>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>UI Elements</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Forms</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Tables</p>
            </a>
          </li>
          <li class="nav-header">EXAMPLES</li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>