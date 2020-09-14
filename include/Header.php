
  <body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img class="img-profile rounded-circle" style="width:50px;height: 50px;" src="<?php echo $base_url;?>include/img/user.png"/>
        </div>
        <div class="sidebar-brand-text mx-3" style="font-size: 14px;">
          <?php echo $_SESSION["loggedId"];?>
          <br><small>online</small>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-user"></i>
          <span>Admin Management</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url;?>bills.php">
          <i class="fa fa-share"></i>
          <span>Bill Management</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url;?>sign-images.php">
          <i class="fa fa-share"></i>
          <span>Upload Image</span></a>
      </li>
     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">



            <!-- Nav Item - Alerts -->
           

            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["loggedId"];?></span>
                <img class="img-profile rounded-circle" src="<?php echo $base_url;?>include/img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo $base_url;?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="">
                  <i class="fa fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                  Changd Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
        </nav>
        <!-- End of Topbar -->