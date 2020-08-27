
    <img src="./lib/img/LoaderIcon.gif" id="loaderIcon" style="display:none" />
    <div id="history"></div>


<script type="text/javascript" src="lib/js/jquery-1.11.3.min.js"></script>

<script>
$(document).ready(function() {
    $("#loaderIcon").show();
        $.ajax({
             url: 'view/history/list_rejected.php',
             success: function(data) {
                $("#loaderIcon").hide();
                $('#history').html(data);
                $("#myTable").DataTable();
             }
        });
});
</script>




