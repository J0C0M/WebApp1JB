<?php 
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    include("conn.php");

    $sql = "DELETE FROM restaurant WHERE id=$id";
    $connection->query($sql);
} 

header("Location: admin.php");
exit;
?>