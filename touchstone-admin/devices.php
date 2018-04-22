<?php include("top.php"); ?>
<table class="table table-striped table-hover" id="device-table">
    <?php include("devices-body.php"); ?>
</table>
<script type="text/javascript">
    function reloadTable(){
        $("#device-table").load("devices-body.php");
    }
    window.setInterval(reloadTable, 2000);
</script>
<?php include("bottom.php"); ?>