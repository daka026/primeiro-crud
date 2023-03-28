<?php

$conn = mysqli_connect("localhost", "root", "", "trabalho_crud");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>