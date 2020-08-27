<ul class="sidebar-menu">
<?php 
    $query_us = $conn->query("SELECT*FROM user WHERE id_user='$_SESSION[id]'");
    $admin = $query_us->fetch_assoc();
    $tipe = $admin['type'];
    if ($tipe == 1 ){
    $link = array("home", "change","status" ,"approved","returned", "rejected","manage_user", "./asset/proses.php?logout");
    $nama = array("Home", "Change Order","Status Order" ,"Order Approved","Order Returned","Order Rejected", "Manage User", "Logout");
    $icon = array("fa fa-home", "fa fa-send","fa fa-comment","fa fa-book","fa fa-send","fa fa-book","fa fa-user", "fa fa-wrench");
    for ($i=0; $i <= count($link)-1 ; $i++) { 
      // Logika di bawah berfungsi menentukan link yg aktif

      if (strcmp($page, "$link[$i]")==0) { // Menentukan link aktif
            $status_l = " class='active'";
          } else {
            $status_l = "";
          }

      // Logikan menampilkan item khusus pada menu drop down versi simple ada di file sidebar-backup.php
      
      $right_icon = ""; // Item kosong jika bukan menu dropdown
      $menu_d = "";
      
      // Disini output utama nya
      echo "<li $status_l>
              <a href='$link[$i]' >

              <i class='$icon[$i]'></i> <span>$nama[$i]</span> $right_icon
              ";
      if ($link[$i] == "status"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval' or status2 ='Butuh Approval' or status1 ='Butuh Approval'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }else if ($link[$i] == "returned"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Returned' or status2 ='Returned' or status1 ='Returned'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }
      echo "
              </a> $menu_d

              </li>";

    }
      }
      elseif($tipe == 2) {
    $link = array("home", "change","status" ,"approved","returned","rejected","list_order", "./asset/proses.php?logout");
    $nama = array("Home", "Change Order","Status Order","Order Approved" ,"Order Returned","Order Rejected", "List Order", "Logout");
    $icon = array("fa fa-home", "fa fa-send","fa fa-comment","fa fa-book","fa fa-send","fa fa-book","fa fa-send","fa fa-wrench");
    for ($i=0; $i <= count($link)-1 ; $i++) { 
      // Logika di bawah berfungsi menentukan link yg aktif
      if (strcmp($page, "$link[$i]")==0) { // Menentukan link aktif
            $status_l = " class='active'";
          } else {
            $status_l = "";
          }

      // Logikan menampilkan item khusus pada menu drop down versi simple ada di file sidebar-backup.php
      
      $right_icon = ""; // Item kosong jika bukan menu dropdown
      $menu_d = "";
      
      // Disini output utama nya
      echo "<li $status_l>
              <a href='$link[$i]' >

              <i class='$icon[$i]'></i> <span>$nama[$i]</span> $right_icon
              ";
      if ($link[$i] == "status"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval' or status2 ='Butuh Approval' or status1 ='Butuh Approval'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }else if ($link[$i] == "returned"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Returned' or status2 ='Returned' or status1 ='Returned'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }else if ($link[$i] == "list_order"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval' or status2 ='Butuh Approval' or status1 ='Butuh Approval'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }
      echo "
              </a> $menu_d

              </li>";

    }
      }elseif($tipe == 3) {
    $link = array("home", "status" ,"approved","returned","rejected", "list_order", "./asset/proses.php?logout");
    $nama = array("Home", "Status Order" ,"Order Approved","Order Returned","Order Rejected", "List Order", "Logout");
    $icon = array("fa fa-home", "fa fa-send","fa fa-book","fa fa-send","fa fa-book","fa fa-send", "fa fa-wrench");
    for ($i=0; $i <= count($link)-1 ; $i++) { 
      // Logika di bawah berfungsi menentukan link yg aktif
      if (strcmp($page, "$link[$i]")==0) { // Menentukan link aktif
            $status_l = " class='active'";
          } else {
            $status_l = "";
          }

      // Logikan menampilkan item khusus pada menu drop down versi simple ada di file sidebar-backup.php
      
      $right_icon = ""; // Item kosong jika bukan menu dropdown
      $menu_d = "";
      
      // Disini output utama nya
      echo "<li $status_l>
              <a href='$link[$i]' >

              <i class='$icon[$i]'></i> <span>$nama[$i]</span> $right_icon
              ";
      if ($link[$i] == "status"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval' or status2 ='Butuh Approval' or status1 ='Butuh Approval'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }else if ($link[$i] == "returned"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Returned' or status2 ='Returned' or status1 ='Returned'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }else if ($link[$i] == "list_order"){
        $sql = "SELECT * FROM update_boq WHERE status1='OK' and status2='Butuh Approval' and status3='Butuh Approval'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }
      echo "
              </a> $menu_d

              </li>";
    }
    }elseif($tipe==4){
    $link = array("home", "change","status" ,"approved","returned", "rejected" ,"./asset/proses.php?logout");
    $nama = array("Home", "Change Order","Status Order", "Order Approved","Order Returned","Order Rejected", "Logout");
    $icon = array("fa fa-home", "fa fa-send","fa fa-comment","fa fa-book","fa fa-send","fa fa-book","fa fa-user", "fa fa-wrench");
    for ($i=0; $i <= count($link)-1 ; $i++) { 
      // Logika di bawah berfungsi menentukan link yg aktif
      if (strcmp($page, "$link[$i]")==0) { // Menentukan link aktif
            $status_l = " class='active'";
          } else {
            $status_l = "";
          }

      // Logikan menampilkan item khusus pada menu drop down versi simple ada di file sidebar-backup.php
      
      $right_icon = ""; // Item kosong jika bukan menu dropdown
      $menu_d = "";
      
      // Disini output utama nya
      echo "<li $status_l>
              <a href='$link[$i]' >

              <i class='$icon[$i]'></i> <span>$nama[$i]</span> $right_icon
              ";
      if ($link[$i] == "status"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval' or status2 ='Butuh Approval' or status1 ='Butuh Approval'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      } else if ($link[$i] == "returned"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Returned' or status2 ='Returned' or status1 ='Returned'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }
      echo "
              </a> $menu_d

              </li>";

      }
    }elseif($tipe==5){
    $link = array("home", "status" ,"approved","returned","rejected","list_order", "./asset/proses.php?logout");
    $nama = array("Home","Status Order" ,"Order Approved","Order Returned", "Order Rejected","List Order", "Logout");
    $icon = array("fa fa-home", "fa fa-comment","fa fa-book","fa fa-send","fa fa-book","fa fa-user", "fa fa-wrench");
    for ($i=0; $i <= count($link)-1 ; $i++) { 
      // Logika di bawah berfungsi menentukan link yg aktif
      if (strcmp($page, "$link[$i]")==0) { // Menentukan link aktif
            $status_l = " class='active'";
          } else {
            $status_l = "";
          }

      // Logikan menampilkan item khusus pada menu drop down versi simple ada di file sidebar-backup.php
      
      $right_icon = ""; // Item kosong jika bukan menu dropdown
      $menu_d = "";
      
      // Disini output utama nya
      echo "<li $status_l>
              <a href='$link[$i]' >

              <i class='$icon[$i]'></i> <span>$nama[$i]</span> $right_icon
              ";
      if ($link[$i] == "status"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval' or status2 ='Butuh Approval' or status1 ='Butuh Approval'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }else if ($link[$i] == "returned"){
        $sql = "SELECT * FROM update_boq WHERE status3 = 'Returned' or status2 ='Returned' or status1 ='Returned'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }else if ($link[$i] == "list_order"){
        $sql = "SELECT * FROM update_boq WHERE status1='OK' and status2='OK' and status3='Butuh Approval'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $count = $result->num_rows;
         
        echo "<span class='badge badge-light' >$count</span>";
      }
      echo "
              </a> $menu_d

              </li>";

    }
    }
 ?>
 </ul>
