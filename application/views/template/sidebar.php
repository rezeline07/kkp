    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin/index') ?>">
        
        <div class="sidebar-brand-text mx-3">Halaman Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if($this->uri->segment(2) == "index"):?>
      <li class="nav-item active">
      <?php else:?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('Admin/index') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Pages Collapse Menu -->
      <?php if($this->uri->segment(2) == "Profilpanti"):?>
      <li class="nav-item active">
      <?php else:?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('Admin/Profilpanti') ?>">
          <i class="fas fa-fw fa-user-plus"></i>
          <span>Profil Panti</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php if($this->uri->segment(2) == "Lokasi"):?>
      <li class="nav-item active">
      <?php else:?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('Admin/Lokasi') ?>">
          <i class="fas fa-fw fa-map-pin"></i>
          <span>Lokasi</span>
        </a>
      </li>

      <hr class="sidebar-divider my-0">
      
      <?php if($this->uri->segment(2) == "kritiksaran"):?>
      <li class="nav-item active">
      <?php else:?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('Admin/kritiksaran') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Kritik & Saran</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Auth/logout') ?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->