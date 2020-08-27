<?php
session_start();
include '../../lib/db/dbconfig.php';
$query_us = $conn->query("SELECT*FROM user WHERE id_user='$_SESSION[id]'");
$admin = $query_us->fetch_assoc();
$userlogin = $admin['type'];
if ($userlogin==2) {
    $q = "SELECT * FROM update_boq WHERE status1='Butuh Approval' and status2='Butuh Approval' and status3='Butuh Approval' ORDER BY dt DESC";
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
                                        <th></th>
                                        <th>Aksi</th>
                                        <th></th>
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
                    <td>
                    <button  class='btn btn-success btn-sm' data-toggle='modal' data-target='#modalapprove$id'><i class='glyphicon glyphicon-check'> Setujui</i>
                    </button></td>
                    <td>
                    <button  class='btn btn-danger btn-sm' data-toggle='modal' data-target='#modalreject$id'><i class='glyphicon glyphicon-check'> Tolak</i>
                    </button></td>
                    <td>
                    <button  class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modalreturn$id'><i class='glyphicon glyphicon-check'> Kembalikan</i>
                    </button></td>
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
} elseif ($userlogin==3) {
$q = "SELECT * FROM update_boq WHERE status1='OK' and status2='Butuh Approval' and status3='Butuh Approval' ORDER BY dt DESC";
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
                                        <th></th>
                                        <th>Aksi</th>
                                        <th></th>
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
                    <td>
                    <button  class='btn btn-success btn-sm' data-toggle='modal' data-target='#modalapprove$id'><i class='glyphicon glyphicon-check'> Setujui</i>
                    </button></td>
                    <td>
                    <button  class='btn btn-danger btn-sm' data-toggle='modal' data-target='#modalreject$id'><i class='glyphicon glyphicon-check'> Tolak</i>
                    </button></td>
                    <td>
                    <button  class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modalreturn$id'><i class='glyphicon glyphicon-check'> Kembalikan</i>
                    </button></td>
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
} elseif ($userlogin==5) {
$q = "SELECT * FROM update_boq WHERE status1='OK' and status2='OK' and status3='Butuh Approval' ORDER BY dt DESC";
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
                                        <th></th>
                                        <th>Aksi</th>
                                        <th></th>
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
                    <td>
                    <button  class='btn btn-success btn-sm' data-toggle='modal' data-target='#modalapprove$id'><i class='glyphicon glyphicon-check'> Setujui</i>
                    </button></td>
                    <td>
                    <button  class='btn btn-danger btn-sm' data-toggle='modal' data-target='#modalreject$id'><i class='glyphicon glyphicon-check'> Tolak</i>
                    </button></td>
                    <td>
                    <button  class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modalreturn$id'><i class='glyphicon glyphicon-check'> Kembalikan</i>
                    </button></td>
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
}


?> 