<?php
date_default_timezone_set("Asia/Jakarta");
    $user = 0;
    $inven = 0;
    if (strcmp($page, "home")==0) { 
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
                    } elseif ($_GET['st'] == 3) {
                          echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Selamat! Register berhasil.
                            </div><br />';
                    }
                  }
        }
        $query_us = $conn->query("SELECT*FROM user WHERE id_user='$_SESSION[id]'");
        $admin = $query_us->fetch_assoc();
        $tipe = $admin['type'];
        if ($tipe == 1 ){
          $pantau = 1;
          $user = 1;
          $inven = 0;
        } elseif ($tipe == 3|| $tipe ==2|| $tipe ==4){
          $pantau = 1;
          $user = 0;
          $inven = 0;
        } elseif ($tipe == 5){
          $pantau = 0;
          $user = 0;
          $inven = 0;
        }
        $judul = "Home";
        $notif = 'true'; 
        $halaman = "./view/beranda.php";
      
      } elseif (strcmp($page, "add_user")==0) {
        function showNotif() {
          if (isset($_GET['st'])) {
            if ($_GET['st']==1) {
            echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil ditambahkan.
                            </div><br />';
          } elseif ($_GET['st']==2) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
          } elseif ($_GET['st']==3) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Data tidak boleh kosong.
                            </div><br />';
          }
          }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Tambah User";
        $halaman = "./view/add_user.php";
      }elseif (strcmp($page, "katasandi")==0) {
        function showNotif() {
          if (isset($_GET['st'])) {
            if ($_GET['st']==1) {
            echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil dirubah.
                            </div><br />';
          } elseif ($_GET['st']==2) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal dirubah.
                            </div><br />';
          } elseif ($_GET['st']==3) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Katasandi lama tidak cocok.
                            </div><br />';
          } elseif ($_GET['st']==4) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Konfirmasi katasandi tidak sama.
                            </div><br />';
          }  elseif ($_GET['st']==5) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Form tidak boleh kosong
                            </div><br />';
          }
          }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Rubah katasandi";
        $halaman = "./view/ubah-katasandi.php";
      }elseif (strcmp($page, "manage_user")==0) {      
        function showNotif() {
          if (isset($_GET['st'])) {

            if ($_GET['st']==1) {
                echo '<div class="callout callout-success" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil menambahkan akun baru.
                            </div><br />';
            } elseif ($_GET['st']==2) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menambahkan.
                            </div><br />';
            } elseif ($_GET['st']==3) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Data tidak boleh kosong.
                            </div><br />';
            } elseif ($_GET['st']==4) {
                echo '<div class="callout callout-success" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil dihapus.
                            </div><br />';
            } elseif ($_GET['st']==5) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal dihapus.
                            </div><br />';
            } 
        }
        }
        $notif = 'true';
        if (isset($_GET['id'])) {
          $getID = mysqli_real_escape_string($conn, $_GET['id']);
          $d_blok=$conn->query("SELECT (name_blok) FROM blok WHERE id_blok='$getID'")->fetch_assoc();
          $judul = $d_blok['name_blok'];
          $pantau = 0;
        } else {
          $pantau = 0;
          $judul = "Manage User";
        }
        $halaman = "./view/manage_user.php";
      } elseif (strcmp($page, "change")==0) {
        function showNotif() {
          if (isset($_GET['st'])) {

            if ($_GET['st']==1) {
                echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil diajukan.
                            </div><br />';
            } elseif ($_GET['st']==2) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
            } elseif ($_GET['st']==3) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Data tidak boleh kosong.
                            </div><br />';
            } elseif ($_GET['st']==4) {
                echo '<div class="callout callout-success" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil dihapus.
                            </div><br />';
            } elseif ($_GET['st']==5) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal dihapus.
                            </div><br />';
            }
        }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Change Order";
        $halaman = "./view/add_update.php";
      } elseif (strcmp($page, "status")==0) {
        function showNotif() {
          if (isset($_GET['st'])) {

            if ($_GET['st']==1) {
                echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil diajukan.
                            </div><br />';
            } elseif ($_GET['st']==2) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
            } elseif ($_GET['st']==3) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Data tidak boleh kosong.
                            </div><br />';
            } elseif ($_GET['st']==4) {
                echo '<div class="callout callout-success" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil dihapus.
                            </div><br />';
            } elseif ($_GET['st']==5) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal dihapus.
                            </div><br />';
            }
        }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Status Order";
        $halaman = "./view/status.php";
      }elseif (strcmp($page, "approved")==0) {
        function showNotif() {
          if (isset($_GET['st'])) {

            if ($_GET['st']==1) {
                echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil disetujui.
                            </div><br />';
            }
        }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Order Approved";
        $halaman = "./view/approved.php";
      }elseif (strcmp($page, "rejected")==0) {
        function showNotif() {
          if (isset($_GET['st'])) {

            if ($_GET['st']==1) {
                echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil ditolak.
                            </div><br />';
            }
        }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Order Rejected";
        $halaman = "./view/rejected.php";
      }elseif (strcmp($page, "returned")==0) {
        function showNotif() {
          if (isset($_GET['st'])) {

            if ($_GET['st']==1) {
                echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil diajukan kembali.
                            </div><br />';
            }
        }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Order Returned";
        $halaman = "./view/returned.php";
      }elseif (strcmp($page, "list_order")==0) {
        function showNotif() {
          if (isset($_GET['st'])) {

            if ($_GET['st']==1) {
                echo '<div class="callout callout-success" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Change Order tersebut berhasil disetujui.
                            </div><br />';
            } elseif ($_GET['st']==2) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyetujui, Stakeholder sebelumnya belum menyetujui.
                            </div><br />';
            } elseif ($_GET['st']==3) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Change Order telah ditolak.
                            </div><br />';
            } elseif ($_GET['st']==4) {
                echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Change Order dikembalikan.
                            </div><br />';
            } elseif ($_GET['st']==5) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan data.
                            </div><br />';
            }
        }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "List Order";
        $halaman = "./view/order.php";
      }else {
        $notif = 'false';
        $pantau = 0;
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
<?php

  if ($pantau == 0) {
    $x = 12;
    $y = 0;
  } else {
    $x = 10;
    $y = 2;
  }
            echo "<div class='col-md-$x'>";
            
              if ($notif == "true") {
                showNotif();
              }
             ?> 
              <div class="nav-tabs-custom">
                <?php include $halaman; ?>
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
            
              <!-- About Me Box -->
              
                  
                  <?php 
                  echo "<div class='col-md-$y'>";
                      if ($pantau!=0) {
                        echo '<div class="box box-primary">
                              <div class="box-header with-border">
                                <h3 class="box-title">Jumlah Order</h3>
                              </div><!-- /.box-header -->
                              <div class="box-body">';
                              $q= "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval'";
                              $r = $conn->query($q);
                              $hitung=0;
                              while ($q=$r->fetch_assoc()) {                          
                                  $hitung++;
                              }
                              echo "<p>Belum Disetujui : $hitung</p>";
                              $q= "SELECT * FROM update_boq WHERE status3 = 'OK'";
                              $r = $conn->query($q);
                              $hitung=0;
                              while ($q=$r->fetch_assoc()) {                          
                                  $hitung++;
                              }
                              echo "<p>Disetujui : $hitung</p>";
                              echo '

                                  </div><!-- /.box-body -->
                                </div><!-- /.box -->';
                      }
                    if ($user!=0) {
                        echo '<div class="box box-primary">
                              <div class="box-header with-border">
                                <h3 class="box-title">User Aktif</h3>
                              </div><!-- /.box-header -->
                              <div class="box-body">';
                              $q= "SELECT * FROM user";
                              $r = $conn->query($q);
                              $hitung=0;
                              while ($user=$r->fetch_assoc()) {                          
                                  $hitung++;
                              }
                              echo "<p>Jumlah User : $hitung</p>";
                              echo '
                                  </div><!-- /.box-body -->
                                </div><!-- /.box -->';
                      }
                  ?> 
                  
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>