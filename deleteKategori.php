<?php

include_once("connection.php");

$id2 = $_GET['id'];

echo $id2;

$result2 = mysqli_query($con, "DELETE FROM kategoribarang WHERE id=$id2");

header("Location:index.php");
?>