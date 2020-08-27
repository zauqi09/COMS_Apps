<?php 
$query = $conn->query("SELECT*FROM update_boq");
while ($ambil = $query->fetch_assoc()) {
    extract($ambil);
    $q = $conn->query("SELECT*FROM user WHERE id_user='$_SESSION[id]'");
    $type = $q->fetch_assoc();
    $userlogin = $type['type'];
    $date=date("d-m-Y");
    $time=date("h:ia");
    // Modal Approve
    echo '<div class="modal modal-success fade" id="modalapprove'.$id.'">
              <div class="modal-dialog">
                <div class="modal-content">
                <form method="post" action="./asset/proses.php">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Anda akan menyetujui Order dengan PID <strong>'.$pid.'</strong></h4>
                  </div>
                  <div class="modal-body">
                    <p><h4>Anda yakin ingin menyetujui Change Order pada '.$date.' pukul '.$time.'?</h4>
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="type" value="'.$userlogin.'">
                    <input type="hidden" name="date" value="'.$date.'">
                    <input type="hidden" name="time" value="'.$time.'">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-outline" name="setujui">Setujui</button>
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
                  </div>
                </div></form><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>';
    // Modal Reject
    echo '<div class="modal modal-danger fade" id="modalreject'.$id.'">
              <div class="modal-dialog">
                <div class="modal-content">
                <form method="post" action="./asset/proses.php">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Anda akan menolak Order dengan PID <strong>'.$pid.'</strong></h4>
                  </div>
                  <div class="modal-body">
                    <p><h4>Anda yakin ingin menolak Change Order pada '.$date.' pukul '.$time.'?</h4>
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="type" value="'.$userlogin.'">
                    <input type="hidden" name="date" value="'.$date.'">
                    <input type="hidden" name="time" value="'.$time.'">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-outline" name="reject">Tolak</button>
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
                  </div>
                </div></form><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>';
    // Modal Reject
    echo '<div class="modal modal-warning fade" id="modalreturn'.$id.'">
              <div class="modal-dialog">
                <div class="modal-content">
                <form method="post" action="./asset/proses.php">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Anda akan mengembalikan Order dengan PID <strong>'.$pid.'</strong></h4>
                  </div>
                  <div class="modal-body">
                    <p><h4>Anda yakin ingin mengembalikan Change Order pada '.$date.' pukul '.$time.'?</h4>
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="type" value="'.$userlogin.'">
                    <input type="hidden" name="date" value="'.$date.'">
                    <input type="hidden" name="time" value="'.$time.'">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-outline" name="return">Kembalikan</button>
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
                  </div>
                </div></form><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>';
    
}

?>