  <div class="login-box">
      <div class="login-logo">
        <a href=""><b>COMS</b> Register User</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      <?php 
                        if (isset($_GET['log']) == 2) {
                            echo "<div class='alert alert-danger'><strong>Register Gagal, Silahkan coba kembali.</strong></div>";
                        }
                         ?>
        <form action="./asset/proses.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="email_user" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="name_user" placeholder="Nama Lengkap">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback"> 
                        <select name="type" class="form-control select2" placeholder="Tipe Akun" style="width: 100%">
                          <option value="2">Manager</option>
                          <option value="4">SM</option>
                          <option value="3">GM</option>
                          <option value="5">Commerce</option>
                        </select>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pwd_user" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pwd_user1" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


