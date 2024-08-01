<?php
    include ('../../../../DBconnection.php');
    $Getid = $_GET['id'];

    $deletequery = "DELETE FROM `laptops table` WHERE Id = $Getid";

    $query = mysqli_query($conn,$deletequery);
    if($query){
        ?>
        <script>
        alert('Product has been deleted successfully!');
        location.replace('../Laptops.php');
        </script>
        <?php
    }
?>