<?php
include "mysqli_connect.php";
$select_query = "SELECT * FROM list";
$result_set = mysqli_query($mysqli,$select_query);
while ($row = mysqli_fetch_row($result_set)){
echo $row[0];
    echo "<td style='width: 150px'>".$row[0]."</td>";
//print_r($row);
echo '<br>';
}
?>
