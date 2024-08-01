<?php
    include ('../../../../DBconnection.php');
    $Getid = $_GET['id'];

    $deletequery = "DELETE FROM `personal computers table` WHERE Id = $Getid";

    $query = mysqli_query($conn,$deletequery);
    if($query){
        ?>
        <script>
        alert('Product has been deleted successfully!');
        location.replace('../Personal Computers.php');
        </script>
        <?php
    }
?>