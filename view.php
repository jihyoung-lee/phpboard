<?php
include 'mysqli_connect.php';
$num = $_GET['num'];
$select_query = "select * from list where list_no = $num";
$result_set = mysqli_query($mysqli,$select_query);
$query="update list set  viewcnt=viewcnt+1 WHERE list_no=".$num;
$result_set2 = mysqli_query($mysqli,$query);
while($row = mysqli_fetch_row($result_set)) {
    echo "<p>글 내용</p>";
    echo "<table border='1' style='text-align: center'>";
    echo "<tr>";
    echo "<td style='width: 500px>".$row[1]."</td>";
    echo "<td style='width: 500px ;hight: 500px'>".$row[5]."</td>";
    echo "</tr>";
    echo "</table>";
}
?>

