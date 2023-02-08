<?php   
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

    $localhot = "localhost";
    $user = "root";
    $password = "";
    $database = "agence";

    // create connection 
    $connection = new mysqli($localhot , $user  , $password , $database);

    $sql = "DELETE FROM annonce  WHERE id=$id";
    $connection->query($sql);

    header("location: /agence/agence.php");
    exit;
    }

?>