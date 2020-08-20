<?php
include 'mysqli_connect.php';
$num = $_GET['num'];
$sql = "delete from list where list_no = $num";
$sql2 = "delete from comment where list_no = $num";
$result_set = mysqli_query($mysqli,$sql);
$result_set2 = mysqli_query($mysqli,$sql2);
echo "<script>alert('삭제.')</script>";
echo "<script>location.href='index.php';</script>";