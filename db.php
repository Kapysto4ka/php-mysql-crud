<?php
session_start();

$conn = mysqli_connect(
  getenv('DB_HOST'),
  getenv('MYSQL_USER'),
  getenv('MYSQL_PASSWORD'),
  getenv('MYSQL_DATABASE')
) or die(mysqli_error($conn));

?>
