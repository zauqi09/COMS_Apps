<ul class="nav nav-tabs">
  <li class="active"><a href="#tab-user" data-toggle="tab" aria-expanded="false">User</a></li>
  <li class=""><a href="#tab-adduser" data-toggle="tab" aria-expanded="true">Tambah Akun</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="tab-user">
    <img src="./lib/img/LoaderIcon.gif" id="loaderIcon" style="display:none" />
    <div id="inventori"></div>

  </div><!-- /.tab-pane -->
  <div class="tab-pane" id="tab-adduser">
    <?php
    include 'add_user.php';
    ?>
  </div>

</div><!-- /.tab-content -->
<?php
include 'user/modaluser.php';
?>

<script type="text/javascript" src="lib/js/jquery-1.11.3.min.js"></script>

 <script>
$(document).ready(function() {
    $("#loaderIcon").show();
        $.ajax({
             url: 'view/user/list.php',
             success: function(data) {
                $("#loaderIcon").hide();
                $('#inventori').html(data);
                $('#myTable').DataTable();
             }
        });
});
</script>

