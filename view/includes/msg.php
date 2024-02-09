<?php
session_start();
if (isset($_SESSION['msg']))
?>
<script type="text/javascript">
    window.onload = function() {
        M.toast({html: '<?php echo $_SESSION['msg'] ?>'})
    }
</script>
<?php
session_unset();
?>