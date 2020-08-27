<?php
include '../../lib/db/dbconfig.php';
$q = "SELECT * FROM update_boq WHERE status3  = 'Rejected'  ORDER BY dt DESC";
$r = $conn->query($q);
$cek_page = $conn->query($q);
    if ($cek_page->num_rows != 0) {
        if ($r = $conn->query($q)) {
            if ($r->num_rows!==0) {
                echo "<div class='box-body'>
                <div class='panel-body'>
                        <div class='table-responsive'>
                            <table class='table table-bordered table-striped' id='myTable' width='100%' cellspacing='0'>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>PID</th>
                                        <th>Pekerjaan</th>
                                        <th>Kategori</th>
                                        <th>File Lampiran</th>
                                        <th>Approval Manager</th>
                                        <th>Approval GM</th>
                                        <th>Approval Commerce</th>
                                    </tr>
                                </thead>
                                <tbody>";
                $no=0;
                
                while ($update_boq=$r->fetch_assoc()) {
                    extract($update_boq);
                        $no++;    
                    echo "<tr>
                    <td>$no</td>
                    <td>$dt</td>
                    <td>$pid</td>
                    <td>$pekerjaan</td>
                    <td>$kategori</td>
                    <td><a href='./asset/upload/$lampiran' class='btn btn-success btn-sm'>Lampiran</a></td>
                    <td>$print1</td>
                    <td>$print2</td>
                    <td>$print3</td>
                    </tr>";
                    
                }

                echo "</tbody></table></div></div></div>";
               
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