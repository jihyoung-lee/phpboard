<?
session_start();
$id = $_POST['id'];
$pw = ($_POST['pw']);
$pwc = ($_POST['pwc']);
$name = $_POST['name'];
$email = $_POST['email'];

if ($pw!=$pwc)
{
    echo "비밀번호와 비밀번호 확인이 서로 다릅니다.";
    echo "<br>";
    echo "<a href=signUp.html>back page</a>";
    exit();
}

include "mysqli_connect.php";

$cid = "select count(*) from userinfo where userid='$id'";
$cidresult = mysqli_query($mysqli, $cid);
$cidrows = mysqli_fetch_array($cidresult);

if ($cidrows[0]==1)
{
    echo "중복된 아이디 입니다.";
    echo "<br>";
    echo "<a href=signUp.html>back page</a>";
    exit();
}
//이부분이 자꾸 에러남 실패 원인 :You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near
$query = "INSERT INTO userinfo (userid, userpw, name, email, permit) VALUES ('$id','$pw','$name','$email',0)";

//$query = "INSERT INTO userinfo(userid,userpw,name,email,permit) VALUES ('aa','aa','aa','aa',0)";
$signup = mysqli_query($mysqli,$query);

if($signup) {
    echo "<script>alert('회원가입이 완료되었습니다.')</script>";
    echo "<script>location.href='index.php';</script>";
} elseif (! $signup){
    echo "실패 원인 :";
    echo mysqli_error($mysqli);
/*    echo $id;
    echo $pw;
    echo $pwc;
    echo $name;
    echo $email;
    echo "<br>";*/
}

include "mysqli_close.php";
?>