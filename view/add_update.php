<div class="tab-content ">
<div class="active tab-pane">
<!-- Post -->
<div class="post">
<div class="box-body">
	<form class="form-horizontal" method="post" action="./asset/proses.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-calendar"></i>
                      </div>
                      <input type="date" name="dt" class="form-control" id="today" placeholder="Tanggal" required>
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
                      <input type="text" name="pid" class="form-control" placeholder="PID">
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
                      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
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
                      <input type="number" name="nilaiawal" class="form-control" placeholder="Nilai Awal PID">
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
                      <input type="number" name="nilaitambah" class="form-control" placeholder="Nilai Tambahan Budget">
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
                      <input type="text" name="alasan" class="form-control" placeholder="Alasan Penambahan Budget">
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      
                      <select name="kategori" class="form-control select2" placeholder="Kategori" style="width: 100%">
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
                      <input type="text" name="pengaju" class="form-control" placeholder="Nama">
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
                      <input type="text" name="jabatan1" class="form-control" placeholder="Jabatan">
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
                      <input type="text" name="setuju" class="form-control" placeholder="Nama">
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
                      <input type="text" name="jabatan2" class="form-control" placeholder="Jabatan">
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
                  <button type="submit" class="btn btn-warning" name="add_update">Ajukan</button>
                  <button type="reset" class="btn btn-danger" name="add_update">Reset</button>
                </div>
              </div>
            </form>

</div>
</div>
</div>
</div>
