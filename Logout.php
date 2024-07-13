<?php
    session_start();
    session_destroy();
    ?>
    <script>
        alert('logged out');
        location.replace('Buyer/buyer signin.php');
    </script>
    <?php
?>