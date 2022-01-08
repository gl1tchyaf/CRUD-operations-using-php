<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `cse102fall2021` WHERE id = $id ";

mysqli_query($con, $q);

header('location:admin.php');

?>