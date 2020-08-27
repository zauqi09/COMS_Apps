<?php 
$query_us = $conn->query("SELECT*FROM user WHERE id_user='$_SESSION[id]'");
$admin = $query_us->fetch_assoc();
$admin_name = $admin['name_user'];
$tipe = $admin['type']
 ?>
<!-- Logo -->
        <a href="home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>COMS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>COMS</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#">
                  <span class="hidden-xs" id="timer"></span>
                </a>
              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="asset/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $admin_name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php if ($tipe==1){
                        $acc = "Admin";
                      }elseif ($tipe==2){
                        $acc = "Manager";
                      }elseif ($tipe==3){
                        $acc = "General Manager";
                      }elseif ($tipe==4){
                        $acc = "Site Manager";
                      }elseif ($tipe==5){
                        $acc = "Commerce";
                      }
                      ?>
                      <?php echo $admin_name; ?> - <?php echo $acc;?>
                      <small>PT. Indonesia Maklum</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="katasandi" class="btn btn-default btn-flat">Ubah Katasandi</a>
                    </div>
                    <div class="pull-right">
                      <a href="asset/proses.php?logout" class="btn btn-default btn-flat">Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>