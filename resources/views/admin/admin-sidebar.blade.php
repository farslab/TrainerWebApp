<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link align-items-center justify-content-center d-flex flex-row">
      <img
        src="{{asset('dist/img/fitlifelogo-white.png')}}"
        alt="fitlife"
        class="brand-image"
      />
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            src="{{asset('dist/img/avatar.png')}}"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Genel Bakış
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
          
          
        </ul>
      </nav>
    </div>
  </aside>