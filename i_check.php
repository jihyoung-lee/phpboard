<?php
##세션 비교
session_start();
if (!isset($_SESSION['userid'])) {
    echo "<a href=login.php><input type='button' value='로그인'></a>";
    echo "<br>";
    echo "<a href=signUp.html><input type='button' value='회원가입' ></a>";

    #로그인 전
} elseif (isset($_SESSION['userid'])) {
    $id = $_SESSION['userid'];
    echo $id;
    echo "님 반갑습니다!";
    echo "<br>";
    echo "<a href=logout.php><input type='button' value='로그 아웃'></a>";
    echo " <a href=write.html><input type='button' value='글쓰기'></a>";
    echo "<br>";
   //구현 전 echo "<a href=userout.php>회원탈퇴</a>";
}
#로그인 후
?>