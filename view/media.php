<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>COMS | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="asset/plugins/select2/select2.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">
    <link href="asset/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  </head>
  <body class="sidebar-mini skin-yellow" >

    <div class="wrapper">
        <!-- header -->
        <header class="main-header">
            <?php include './view/layout/header.php'; ?>
        </header>
        <!--/ header -->
        <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <?php include './view/layout/sidebar.php'; ?>          
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <?php include './view/layout/content.php'; ?>
      </div>
        <!-- /#page-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>COMS</b>
        </div>
        <strong>Copyright © <?php echo date("Y"); ?> <a>COMS</a>.</strong>
      </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="asset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="asset/dist/js/app.min.js"></script>
     <!-- Select2 -->
    <script src="asset/plugins/select2/select2.full.min.js"></script>
    <script src="table/vendor/bootstrap/js/popper.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="asset/dist/js/demo.js"></script>
    <script src="asset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
     <!-- InputMask -->
    <script src="asset/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="asset/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <script>
      $(function () {
      $("#myTable").DataTable();
    });
    $(".master-noreg").change(function () {
      var boolIsChecked = false;
      if ($(this).is(":checked"))
      {
          boolIsChecked = true;
      }
      $(".noreg").prop("checked", boolIsChecked);
  });
  $(".noreg").change(function () {
      if ($(this).is(":checked"))
      {
          if ($(".noreg").length == $(".noreg:checked").length)
          {
              $(".master-noreg").prop("checked", true);
          }
      } 
      else
      {
          $(".master-noreg").prop("checked", false);
      }
  });
      $(function () {
        $(".select2").select2();
        $("[data-mask]").inputmask();
      });
    </script>
    
    <script type="text/javascript">
      setInterval(function() {
      var currentTime = new Date ( );    
      var currentHours = currentTime.getHours ( );   
      var currentMinutes = currentTime.getMinutes ( );   
      var currentSeconds = currentTime.getSeconds ( );    
      var timeOfDay = "WIB";     
      var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
      document.getElementById("timer").innerHTML = currentTimeString;
  }, 1000);
    </script>
  </body>
</html>
