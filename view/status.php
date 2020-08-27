
    <img src="./lib/img/LoaderIcon.gif" id="loaderIcon" style="display:none" />
    <div id="status"></div>


<script type="text/javascript" src="lib/js/jquery-1.11.3.min.js"></script>

<script>
$(document).ready(function() {
    $("#loaderIcon").show();
        $.ajax({
             url: 'view/update/list_update.php',
             success: function(data) {
                $("#loaderIcon").hide();
                $('#status').html(data);
                $("#myTable").DataTable();
             }
        });
});
</script>




