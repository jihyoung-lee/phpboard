<?php
include "mysqli_connect.php";
include "session.php";
$num = $_POST['num'];
$userid = $_SESSION['userid'];
$com = $_POST['com'];
$query = "INSERT INTO comment (list_no, userid, comment, date) VALUES ('$num','$userid','$com',now())";
$write_up = mysqli_query($mysqli,$query);
if($write_up) {
    echo "<script>alert('성공')</script>";
    echo "<script>history.back(-1)</script>";
} elseif (! $write_up) {
    echo "실패 원인 :";
    echo mysqli_error($mysqli);


}
include "mysqli_close.php";
?>