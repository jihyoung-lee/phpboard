<?php

session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];
include "mysqli_connect.php";


$sql = "SELECT * FROM userinfo WHERE userid = '{$id}' AND userpw = '{$pw}'";
$res = $ //여기서부터 수정 7/27

/* [1]
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
*/



//if($array = mysqli_query($db_con,$query)){
/*[2]
if ($cidresult = mysqli_query($mysqli, $cid)){
    if($array[3] == $userPassword){

        @session_start(); //세션초기화
        $_SESSION['login'] = true;
        $_SESSION['username'] = $array[2];
        $_SESSION['userid'] = $array[1];
        echo "<script>alect('로그인성공')</script>";
        echo "<script>location.href = 'main.php'</script>";

    }
    else{
        echo "<script>alect('비밀번호가 틀렸습니다')</script>";
        echo "<script>location.href = 'main.php'</script>";
    }
}
else{
    echo "<script>alect('아이디가 틀렸습니다')</script>";
    echo "<script>location.href = 'main.php'</script>";
}
*/
?>
