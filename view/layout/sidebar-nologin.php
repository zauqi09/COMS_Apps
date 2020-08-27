<ul class="sidebar-menu">
<?php
    $link = array('login');
    $nama = array("Login");
    $icon = array("fa fa-user");
    for ($i=0; $i <= count($link)-1 ; $i++) { 
      // Logika di bawah berfungsi menentukan link yg aktif
      if (strcmp($page, "$link[$i]")==0) { // Menentukan link aktif
            $status_l = " class='active'";
          } else {
            $status_l = "";
          }
        $right_icon = ""; // Item kosong jika bukan menu dropdown
        $menu_d = "";

      // Disini output utama nya
      
            echo "<li $status_l>
              <a href='$link[$i]'>
              <i class='$icon[$i]'></i> <span>$nama[$i]</span> $right_icon
              </a> $menu_d";

             
      echo "</li>";
    }
?>
</ul>