<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar" >

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<? site_url('dashboard')?>">
        <div class="sidebar-brand-icon rotate-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text rotate-n-15 mx-3">
            CI13
            <sup>SB</sup>
        </div>
    </a>

    <hr class="sidebar-divider my-0">
    
    <!-- Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    
    <!-- Menu Kategori -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('kategori') ?>">
            <i class="fas fa-box"></i>
            <span>Kategori</span>
        </a>
    </li>

    <!-- Menu Buku -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('buku') ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
 <div id="content">