
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <div class="sidebar-brand-text mx-3"><img src="<?= base_url();?>assets/img/logo.png" width="100" alt=""></div>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-2">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        Administratior
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user"></i>
          <span>My Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user"></i>
          <span>Produk</span>
        </a>
      </li>

     <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit') ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Edit</span>
        </a>
      </li>
    
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    