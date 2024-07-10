<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final_year_project_database";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn){
        ?>
            <script>
                alert('Database Connected Successfully!');
            </script>
        <?php
    }else{
        ?>
        <script>
        alert('Error in Database Connection');
    </script>
    <?php
    }
?>