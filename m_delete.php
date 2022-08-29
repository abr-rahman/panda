<?php
    require_once "database.php";
    $id = $_GET['id'];
    $delete_query = "DELETE FROM contacts WHERE id=$id"; 
    mysqli_query($db_connect, $delete_query);
    header('location: message.php');
?>