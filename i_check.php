<?php
##세션 비교
session_start();
if (!isset($_SESSION['userid'])) {
    echo "<a href=login.php>로그인</a>";
    echo "<br>";
    echo "<a href=signUp.html>회원가입</a>";

    #로그인 전
} elseif (isset($_SESSION['userid'])) {
    $id = $_SESSION['userid'];
    echo $id;
    echo "님";
    echo "<br>";
    echo "<a href=logout.php>로그아웃</a>";
    echo "<br>";
    echo "<a href=userout.php>회원탈퇴</a>";
}
#로그인 후
?>