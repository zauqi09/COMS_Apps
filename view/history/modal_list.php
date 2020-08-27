<?php 
$query = $conn->query("SELECT*FROM update_boq");
while ($ambil = $query->fetch_assoc()) {
    extract($ambil);
    $q = $conn->query("SELECT*FROM user WHERE id_user='$_SESSION[id]'");
    $type = $q->fetch_assoc();
    $userlogin = $type['type'];
    $date=date("d-m-Y");
    $time=date("h:ia");

    echo '<div class="modal modal-success fade" id="modalreorder'.$id.'">
              <div class="modal-dialog">
                <div class="modal-content">
                <form method="post" action="./asset/proses.php">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Anda akan Re-Order PID <strong>'.$pid.'</strong></h4>
                  </div>
                  <div class="modal-body">
                    <p><h4>Anda yakin ingin mengajukan Change Order kembali?</h4>
                    <input type="hidden" name="id" value="'.$id.'">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-outline" name="reorder_return">Setujui</button>
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
                  </div>
                </div></form><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>';
    // Modal Reject


    // Modal edit return
        echo '<div class="modal fade" id="modalEditorder'.$id.'">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Edit "'.$pid.'"</h4>
                  </div>
                  <div class="modal-body">
                    <!-- Start form -->
                   <form class="form-horizontal" method="post" action="./asset/proses.php" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="'.$id.'">
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-calendar"></i>
                      </div>
                      <input type="date" name="dt" class="form-control" id="today" placeholder="Tanggal" value="'.$dt.'" required>
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">PID</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="text" name="pid" class="form-control" placeholder="PID" value="'.$pid.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-home"></i>
                      </div>
                      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="'.$pekerjaan.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Nilai Awal PID</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-user"></i>
                      </div>
                      <input type="number" name="nilaiawal" class="form-control" placeholder="Nilai Awal PID" value="'.$nilaiawal.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Nilai Tambahan Budget</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="number" name="nilaitambah" class="form-control" placeholder="Nilai Tambahan Budget" value="'.$nilaitambah.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Alasan Penambahan Budget</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="text" name="alasan" class="form-control" placeholder="Alasan Penambahan Budget" value="'.$alasan.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-10">
                  <div class="input-group" >
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      
                      <select name="kategori" class="form-control select2" placeholder="Kategori" style="width: 100%" >
                          <option value="'.$kategori.'">'.$kategori.'</option>
                          <option value="Project Integration">Project Integration</option>
                          <option value="Project Scope">Project Scope</option>
                          <option value="Project Time">Project Time</option>
                          <option value="Project Cost">Project Cost</option>
                          <option value="Project Quality">Project Quality</option>
                          <option value="Project Human Resource">Project Human Resource</option>
                          <option value="Project Communication">Project Communication</option>
                          <option value="Project Risk">Project Risk</option>
                          <option value="Project Procurement">Project Procurement</option>
                          <option value="Project Stakeholder">Project Stakeholder</option>
                        </select>
                    </div><!-- /.input group -->
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Yang Mengajukan</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="text" name="pengaju" class="form-control" placeholder="Nama" value="'.$pengaju.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Jabatan yang Mengajukan</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="text" name="jabatan1" class="form-control" placeholder="Jabatan" value="'.$jabatan1.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Yang Mengetahui/Menyetujui</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="text" name="setuju" class="form-control" placeholder="Nama" value="'.$setuju.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Jabatan yang Menyetujui</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="text" name="jabatan2" class="form-control" placeholder="Jabatan" value="'.$jabatan2.'">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">File Lampiran</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-file"></i>
                      </div>
                      <input type="file" name="lampiran" class="form-control" placeholder="File" required>
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-warning" name="edit_return">Submit</button>

                </div>
              </div>
            </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div></div>';

}

?>