<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="/" class="brand-link align-items-center justify-content-center d-flex flex-row">
    <img src="{{asset('dist/img/fitlifelogo-white.png')}}" alt="fitlife" class="brand-image" />
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{Storage::url(auth()->user()->trainer->pp_path)}}" class="img-circle elevation-2" alt="User Image" />
      </div>
      <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Danışan Listesi
              <span class="right badge badge-danger">
                {{auth()->user()->trainer->customers->count()}}</span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>