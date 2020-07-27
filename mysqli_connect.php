<?php
//[1]
/*$mysqli = @mysqli_connect("localhost","root","0000","sign");
if (! $mysqli){
    echo "연결에 실패하였습니다..";
    exit();
}
*/
$host = 'localhost';
$user = 'root';
$passWord = '0000';
$dbName = 'sign';

$mysqli = new mysqli($host,$user,$passWord,$dbName);
if (! $mysqli) {
    echo "연결에 실패하였습니다..";
    exit();
}
?>