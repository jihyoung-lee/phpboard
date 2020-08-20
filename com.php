<?php
include "mysqli_connect.php";
include "session.php";
$num = $_POST['num'];
$userid = $_SESSION['userid'];
$com = $_POST['com'];
$query = "INSERT INTO comment (list_no, userid, comment, date) VALUES ('$num','$userid','$com',now())";
$write_up = mysqli_query($mysqli,$query);

if($write_up) {

    echo "<script>history.back(-2)</script>";
    $query2="update list set com_cnt=com_cnt+1 WHERE list_no=".$num;
    $result_set2 = mysqli_query($mysqli,$query2);
} elseif (! $write_up) {
    echo "실패 원인 :";
    echo mysqli_error($mysqli);


}
include "mysqli_close.php";
?>