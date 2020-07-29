<?php
include "mysqli_connect.php";
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