<?php
include 'mysqli_connect.php';
$num2 = $_POST['comno'];
$num = $_POST['comnum'];
//echo $num2;
//echo $num;

$sql2 = "delete from comment where com_no = $num2";
$result_set2 = mysqli_query($mysqli,$sql2);
$query2="update list set com_cnt=com_cnt-1 WHERE list_no=".$num;
$result_set3 = mysqli_query($mysqli,$query2);
echo "<script>alert('삭제.')</script>";
echo "<script>history.back(-2)</script>";