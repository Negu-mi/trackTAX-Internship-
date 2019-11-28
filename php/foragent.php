<?php include("connectdb.php"); ?>

<?php
    session_start();
    $nickname = $_POST['nickname'];
    $tel = $_POST['tel'];
    $timeok = $_POST['timeok'];
    $ID = $_SESSION['ID'];

    $sql = "INSERT INTO foragent
            VALUE ('$ID','$nickname','$tel','$timeok')";
    $insert = mysqli_query($mysqli,$sql);

?>