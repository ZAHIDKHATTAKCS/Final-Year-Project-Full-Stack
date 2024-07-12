<?php 
    session_start();
    session_destroy();
?>
<script>
    alert("You are logged out now! ");
    location.replace('../seller signin.php');
</script>