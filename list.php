<?php
include "mysqli_connect.php";
/*한 페이지에 보여줄 리스트 수
$record_per_page = 10;
// 한 블럭에 보여줄 페이지 수
$page_per_block = 10;
// 현재 페이지
$now_page = ($_GET['page']) ? $_GET['page']: 1;
//현재 블럭
$now_block = ceil($now_page / $page_per_block);

$sql = "select count(*) as cnt from tb_board where 1";
$total_count = sql_total($sql);
나중에! */

$select_query = "SELECT * FROM list";
$result_set = mysqli_query($mysqli,$select_query);
while ($row = mysqli_fetch_row($result_set)){
//    if($row[0] <= 0) {
    echo "<center>";

    echo "<table border='1' style='text-align: center'>";
        echo "<tr>";
        echo "<td style='width: 150px'>".$row[0]."</td>";
        echo "<td style='width: 500px'><a href='view.php?num=$row[0]'>".$row[1]."</td>";
        echo "<td style='width: 150px'>".$row[2]."</td>";
        echo "<td style='width: 150px'>".$row[3]."</td>";
        echo "<td style='width: 200px'>".$row[4]."</td>";
        echo "</tr>";
}
?>