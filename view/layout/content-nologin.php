<?php
date_default_timezone_set("Asia/Jakarta");
    if (strcmp($page, "home")==0) { 
      ################
      # Halaman Home
      ################
        function showNotif() {
          if (isset($_GET['st'])) {
                    if ($_GET['st'] == 1) {
                          echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil disimpan.
                            </div><br />';
                    } elseif ($_GET['st'] == 2) {
                          echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
                    }
                  }
        }
        $judul = "Home";
        $notif = 'true';
        $halaman = "./view/login.php";
      } elseif (strcmp($page, "login")==0) {
        $notif = 'false';
        $judul = "Login";
        $halaman = "./view/login.php";
      } else {
        ########################
        # SETTING PAGE ERROR
        ########################
        $notif = 'false';
        $judul = "";
        $halaman = "./view/404.php";
      }
?>
 
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $judul; ?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $judul; ?></li>
          </ol>
        </section>

        <section class="content">
  
          <div class="row">
            

              <!-- About Me Box -->
<?php 
            echo "<div class='col-md-12'>";
            
              if ($notif == "true") {
                showNotif();
              }
             ?> 
              <div class="nav-tabs-custom">
                <?php include $halaman; ?>
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
                  
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>