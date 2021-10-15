<?php

include_once("connection.php");

$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM masterbarang WHERE id=$id");

header("Location:index.php");
?>