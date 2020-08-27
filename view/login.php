  <div class="login-box">
      <div class="login-logo">
        <a href=""><b>COMS</b> Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      <?php 
                        if (isset($_GET['log']) == 2) {
                            echo "<div class='alert alert-danger'><strong>Login gagal, Silahkan coba kembali.</strong></div>";
                        }
                         ?>
        <form action="./asset/proses.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="email" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pwd" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


