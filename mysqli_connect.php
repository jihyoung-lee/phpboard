<?php

$mysqli = @mysqli_connect("localhost","root","0000","sign");
if (! $mysqli){
    echo "연결에 실패하였습니다..";
    exit();
}
?>