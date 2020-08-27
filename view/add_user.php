<div class="tab-content ">
<div class="active tab-pane">
<!-- Post -->
<div class="post">
<div class="box-body">
	<form class="form-horizontal" method="post" action="./asset/proses.php">
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="text" name="email_user" class="form-control" placeholder="Username" required>
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                      <input type="text" name="name_user" class="form-control" placeholder="Nama Lengkap" required>
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Tipe Akun</label>
                <div class="col-sm-10">
                  <div class="input-group"> 
                      <div class="input-group-addon">
                        <i class="fa  fa-sort-alpha-asc"></i>
                      </div>
                        <select name="type" class="form-control select2" placeholder="Tipe Akun" style="width: 100%">
                          <option value="1">Admin</option>
                          <option value="2">Manager</option>
                          <option value="4">SM</option>
                          <option value="3">GM</option>
                          <option value="5">Commerce</option>
                        </select>
                        
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputTelp" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-sort-alpha-asc"></i>
                      </div>
                      <input type="password" placeholder="Masukan Password" name="pwd_user" class="form-control" data-inputmask="" data-mask="" required>
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputTelp" class="col-sm-2 control-label">Confirm Password</label>
                <div class="col-sm-10">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-sort-alpha-asc"></i>
                      </div>
                      <input type="password" placeholder="Masukan Password" name="pwd_user1" class="form-control" data-inputmask="" data-mask="" required>
                    </div><!-- /.input group -->
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-warning" name="register">Simpan</button>
                </div>
              </div>
            </form>

</div>
</div>
</div>
</div>