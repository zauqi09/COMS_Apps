<?php 
$sql = "SELECT * FROM update_boq WHERE status3 = 'Butuh Approval'";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();
       $count = $result->num_rows;
       echo $count;
       $conn->close();
 ?>