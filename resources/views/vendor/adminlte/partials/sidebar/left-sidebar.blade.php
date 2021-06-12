<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="mt-2">
            <!-- <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item') -->
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
            <a href="home" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Dashboard
              </p>
            </a>
         
          </li>
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('pegawai.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('cuti.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Cuti</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('perjadin.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Perjalanan Dinas</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-header">Rotasi dan Kenaikan</li>
          <li class="nav-item">
            <a href="{{route('rotasi.index')}}" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
               Rotasi Pegawai
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('kenaikanjbtn.index')}}" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
               Kenaikan Jabatan
              </p>
            </a>
          </li>

          <li class="nav-header">Lainnya</li>
          <li class="nav-item">
            <a href="{{route('rencana.index')}}" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
               Rencana Pengembangan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('laporan.index')}}" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
              laporan
              </p>
            </a>
         
          </li>
            </ul>
        </nav>
    </div>

</aside>
