<?php
require_once "action.php";

$id = $_GET['id'];

$connection = new Connection();

mysqli_query($connection->getConnection(), "DELETE FROM user WHERE UserID=$id");

exit(header('location:index.php?page=user'));