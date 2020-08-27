<ul class="nav nav-tabs">
  <li class="active"><a href="#tab-monitoring" data-toggle="tab" aria-expanded="false">Home</a></li>
  <li class=""><a href="#stasiun-info" data-toggle="tab" aria-expanded="true">About</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="tab-monitoring">
    <img src="./lib/img/LoaderIcon.gif" id="loaderIcon" style="display:none" />
    <div id="berita"></div>
  </div><!-- /.tab-pane -->
  <div class="tab-pane" id="stasiun-info">
    <h3>About</h3>
    <p>UFORST adalah sebuah Sistem Informasi Berguna yang digunakan untuk mempermudah pekerjaan, 
    dalam hal ini UFORST dikembangkan untuk mempermudah pekerjaan pada PT. Telkom Indonesia Witel Cirebon khususnya divisi IS OS</p>
    <h3>Contact :</h3>
    <ul>
    <li>Line : bingle09</li>
    <li>Facebook : facebook.com/bingle09</li>
    <li>Whatsapp : 088214931227</li>
    </ul>
  </div><!-- /.tab-pane -->
</div><!-- /.tab-content -->
<script type="text/javascript" src="lib/js/jquery-1.11.3.min.js"></script>

<script>
$(document).ready(function() {
    $("#loaderIcon").show();
        $.ajax({
             url: 'view/berita/berita_home.php',
             success: function(data) {
                $("#loaderIcon").hide();
                $('#berita').html(data);
             }
        });
});
</script>