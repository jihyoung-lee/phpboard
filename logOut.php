<?php
include "session.php";

echo "<script>alert('로그아웃 성공')</script>";
unset($_SESSION['userid']);
echo "<script>location.href = 'index.php'</script>";
?>
