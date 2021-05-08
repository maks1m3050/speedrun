<?php
    include("config.php");
    $_Q = mysqli_query($connections, "SELECT * FROM `ban` WHERE `id`=".$_POST['ID']);
    echo(mysqli_fetch_assoc($_Q)['Gmail']);
?>