<?php
include "session.php";
$userid = $_SESSION['userid'];
$title = $_POST['title'];
$contents = $_POST['content'];
include 'mysqli_connect.php';

$query = "INSERT INTO list (userid_li, title, contents, listdate, viewcnt) VALUES ('$userid','$title','$contents',now(),0)";
$write_up = mysqli_query($mysqli,$query);
if($write_up) {
    echo "<script>alert('성공')</script>";
    echo "<script>location.href='index.php'</script>";
} elseif (! $write_up) {
    echo "실패 원인 :";
    echo mysqli_error($mysqli);


}
include "mysqli_close.php";
?>