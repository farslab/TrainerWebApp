<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="/" class="brand-link align-items-center justify-content-center d-flex flex-row">
    <img src="{{asset('dist/img/fitlifelogo-white.png')}}" alt="fitlife" class="brand-image" />
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{Storage::url(auth()->user()->customer->pp_path)}}" class="img-circle elevation-2"
          alt="User Image" />
      </div>
      <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Genel Bakış
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('nutrition.index', auth()->user()->id)}}" class="nav-link {{ Request::is('nutrition-plan/'.auth()->user()->id) ? 'active' : '' }}">
            <i class="nav-icon fas fa-pizza-slice"></i>
            <p>
              Beslenme Planı
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('training.index', auth()->user()->id)}}" class=" {{ Request::is('t_training-program/'.auth()->user()->id) ? 'active' : '' }} nav-link">
            <i class="nav-icon fas fa-dumbbell"></i>
            <p>
              Antrenman Programı
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Gelişim İstatistikleri
              <span class="badge badge-info right">+</span>

            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('pr.index')}}" class="{{Request::is('create-new-pr')? 'active' : ''}} nav-link">
            <i class="nav-icon fas fa-plus"></i>
            <p>Gelişim Verisi Ekle</p>
          </a>
        </li>
        

      </ul>
    </nav>
  </div>
</aside>