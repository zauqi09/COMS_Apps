<?php 
$query = $conn->query("SELECT * FROM user");
while ($ambil = $query->fetch_assoc()) {
    extract($ambil);
    echo '<div class="modal modal-success fade" id="modalDel'.$id_user.'">
              <div class="modal-dialog">
                <div class="modal-content">
                <form method="post" action="./asset/proses.php">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Anda yakin ingin menghapus <strong>'.$email_user.'</strong> ?</h4>
                  </div>
                  <div class="modal-body">
                    <p><h4>Akun <strong>'.$email_user.'</strong> tidak akan bisa digunakan kembali</h4>
                    <input type="hidden" name="id_user" value="'.$id_user.'">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-outline" name="del_user">Hapus</button>
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div> </div>';
    echo '<div class="modal fade" id="modalEdit'.$id_user.'">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Edit '.$name_user.'</h4>
                  </div>
                  <div class="modal-body">
                    <!-- Start form -->
                   <form class="form-horizontal" role="form" style="width:100%" name="add_client" method="post" action="./asset/proses.php">
                   <input type="hidden" name="id_user" value="'.$id_user.'" />
                      <div class="form-group">
                        <label class="control-label col-sm-2">Username :</label>
                        <div class="col-sm-10">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                          </div>
                          <input type="text" value="'.$email_user.'" placeholder="Masukan Email" name="email_user" class="form-control" required>
                        </div><!-- /.input group -->
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-sm-2">Nama Lengkap :</label>
                        <div class="col-sm-10">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa  fa-sort-alpha-asc"></i>
                          </div>
                          <input type="text" name="name_user"  value="'.$name_user.'" class="form-control" placeholder="Masukan Nama Lengkap" required>
                        </div><!-- /.input group --> 
                        </div>
                      </div>
                      
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="edit_user">Save changes</button>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div></div>';
}
?>