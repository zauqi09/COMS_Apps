
    <img src="./lib/img/LoaderIcon.gif" id="loaderIcon" style="display:none" />
    <div id="listorder"></div>

    <?php
    include 'order/modal_order.php';
    ?>
<script type="text/javascript" src="lib/js/jquery-1.11.3.min.js"></script>

<script>
$(document).ready(function() {
    $("#loaderIcon").show();
        $.ajax({
             url: 'view/order/list_order.php',
             success: function(data) {
                $("#loaderIcon").hide();
                $('#listorder').html(data);
                $("#myTable").DataTable();
             }
        });
});
</script>




