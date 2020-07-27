<?php

include "session.php";
include "mysqli_connect.php";
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM userinfo WHERE userid = '{$id}' AND userpw = '{$pw}'";
$res = $mysqli->query($sql);

$row = $res->fetch_array(MYSQLI_ASSOC);

if($row != null){
    $_SESSION['userid'] = $row['userid'];


    echo "<script>alert('반갑습니다.')</script>";
    echo "<script>location.href='index.php';</script>";
}
else{
    echo
    "<script>
      window.alert('아이디와 비밀번호가 잘못되었습니다.');
      history.back(-1);
    </script>";
}












/*
$check = "SELECT * FROM userinfo WHERE userid='$id' and userpw='$pw'";
$result = mysqli_query($mysqli,$check);
if(!$_POST['id'])
{
    echo
    "<script>
      window.alert('아이디를 입력하세요.');
      history.back(-1);
    </script>";
}
else if(!$_POST['pw'])
{
    echo
    "<script>
      window.alert('비밀번호를 입력하세요.');
      history.back(-1);
    </script>";
}
else
{
    if(!$result)
    {
        echo
        "<script>
        window.alert('아이디 또는 비밀번호가 일치하지 않습니다.');
        history.back(-1);
      </script>";
    }
    else
    {
        $_SESSION['id']=$_POST['id'];
        $_SESSION['pw']=$_POST['pw'];

echo "<script>location.href='index.php';</script>";
    }
}


/*if($row ! = null){
    $_SESSION['ses_userid'] = $row['id'];
    echo $_SESSION['ses_userid'].'님 안녕하세요';
    echo '<a href="./sign'
}
*/

/*[1]
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
