<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "contactUS";

    $con = mysqli_connect($server,$user,$password,$db);

    if($con){
        ?>
            <script>
                alert("connection successful");
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("NO connection");
            </script>
        <?php
    }
?>