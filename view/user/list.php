<?php
include '../../lib/db/dbconfig.php';
$q = "SELECT * FROM user ORDER BY type asc";
$r = $conn->query($q);
$cek_page = $conn->query($q);
if ($cek_page->num_rows != 0) {
    if ($r = $conn->query($q)) {

    //Outputnya disini
   
    if ($r->num_rows!==0) {
            echo "
            <div class='panel-body'>
                    <div class='table-responsive'>
                        <table class='table table-bordered table-striped' id='myTable' width='100%'' cellspacing='0'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>";
            $no=0;
            
            while ($user=$r->fetch_assoc()) {
                extract($user);
                $no++;
                $nama_type="";
                if ($type == 1){
                    $nama_type="Admin";
                } elseif ($type == 2){
                    $nama_type="Manager";
                } elseif ($type == 3){
                    $nama_type="GM";
                } elseif ($type == 4){
                    $nama_type="SM";
                } elseif ($type == 5){
                    $nama_type="Commerce";
                }
                echo "<tr>
                <td>$no</td>
                <td>$email_user</td>
                <td>$name_user</td>
                <td>$nama_type</td>
                <td>
                    <button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modalEdit$id_user'>
                        <i class='glyphicon glyphicon-pencil'></i>
                    </button>
                    <button class='btn btn-danger btn-sm' data-toggle='modal' data-target='#modalDel$id_user'>
                        <i class='glyphicon glyphicon-trash'></i>
                    </button>
                </td>
                </tr>";

            }
            echo "</tbody></table></div></div>";
           
        } else {
            echo "<div class='alert alert-warning'><strong>Tidak ada Data untuk ditampilkan!</strong></div>";
            
        }

    } else {
        echo "Terjadi kesalahan";
    }
} else {
    include '../not_data.php';
}
?> 