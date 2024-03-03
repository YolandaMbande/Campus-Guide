<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `campus_guide` where id=$id";
        $conn->query($sql);
    }
    header('location:/campus_guide/index.php');
    exit;
?>