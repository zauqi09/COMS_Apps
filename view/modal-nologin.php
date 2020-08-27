<div class="modal modal-success fade" id="loginsvr">
  <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Login</h4>
                  </div>
      <div class="modal-body">

                        
        <p class="login-box-msg">Sign in to start your session</p>

        <form class="form-horizontal" role="form" style="width:100%" action="./asset/proses.php" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pwd" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        

      </div>
      <div class="modal-footer">
                    <button type="submit" name="login" class="btn btn-outline">Sign In</button>
                    
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
                    </form>
    </div>
    </div>
    
  </div>
</div>