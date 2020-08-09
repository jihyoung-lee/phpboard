<?php
include "mysqli_connect.php";
$title = $_POST['title'];
$contents = $_POST['content'];
$num = $_POST['num'];

$query = "update list set title = '$title',contents = '$contents', listdate = now() where list_no =$num";
$write_up = mysqli_query($mysqli,$query);
if($write_up) {
    echo "<script>alert('수정 완료 되었습니다.')</script>";
    echo "<script>location.href='index.php'</script>";
} elseif (! $write_up) {
    echo "실패 원인 :";
    echo mysqli_error($mysqli);
//이거 에러남 고쳐야함 ㅠㅠ

}
include "mysqli_close.php";
?>


?>