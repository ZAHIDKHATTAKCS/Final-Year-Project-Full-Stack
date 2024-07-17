<?php
include ('DBconnection.php');
$GetId = $_GET['id'];
$Remove_Query = "DELETE FROM `add to cart` WHERE Id = '$GetId'";

$Query_Run = mysqli_query($conn,$Remove_Query);

if($Query_Run){
    ?>
    <script>
    alert('Product is removed from cart');
    location.replace('Add to cart.php');
    </script>
    <?php
}else{
    ?>
    <script>
    alert('Error in remove query in add to cart page');
    location.replace('Add to cart.php');
    </script>
    <?php
}
?>