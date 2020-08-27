<?php 
include '../lib/db/dbconfig.php';
$sql = "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval' or status2 ='Butuh Approval' or status1 ='Butuh Approval'";
       	$r = $conn->query($q);
       	$hitung=0;
            while ($q=$r->fetch_assoc()) {                          
            $hitung++;
        }
        echo $hitung;
 ?>