<?php

session_start();
$id = $_POST['id'];
$pw = md5($_POST['pw']);
include "mysqli_connect.php";

$check = "SELECT * FROM user_info WHERE userid='$id'";
$result = mysqli_query($mysqli, $check);
if ($result->num_rows==1) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($row['userpw'] == $pw) {
        $_SESSION['userid'] = $id;
        if (isset($_SESSION['userid'])) {
            header('Location:./index.php');
        } else {
            echo "세선 저장 실패";
        }
    } else {
        echo "가입하지 않은 아이디이거나, 잘못된 비밀번호입니다.";
    }

    include "mysqli_close.php";
}
?>
