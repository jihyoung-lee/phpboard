<?php


include "mysqli_connect.php";
include "session.php";
/*
$select_query = "SELECT * FROM list";
$result_set = mysqli_query($mysqli,$select_query);
while ($row = mysqli_fetch_row($result_set)){
echo $row[2];
    echo "<td style='width: 150px'>".$row[2]."</td>";
//print_r($row);
echo '<br>';
}

*/
$test = isset($_SESSION['userid']);
$num = $_GET['num'];
$select_query = "select * from list where list_no = $num";
$result_set = mysqli_query($mysqli,$select_query);
while ($row = mysqli_fetch_row($result_set)){
    echo '$row 값 : '.$row[2];
    echo '<br />';
    echo '세션 값 : '.$_SESSION['userid'];
    echo '<br />';
    echo 'isset : '. $test;
    echo '<br />';
    echo '<br />';
    print_r($row);
    }

?>
