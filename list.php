<?php
include "mysqli_connect.php";?>




<?php
$s_point = ($page-1) * $list;

$select_query2 = "SELECT * FROM list LIMIT $s_point,$list";//변수값 만큼 글 개수 제한 두는 것!!
$real_data = mysqli_query( $mysqli,$select_query2);
/*$select_query = "SELECT * FROM list";

$result_set = mysqli_query($mysqli,$select_query);
echo "<center>";
while ($row = mysqli_fetch_row($result_set)){
//    if($row[0] <= 0) {




}
*/

for ($i=1; $i<=$num; $i++) {
    $row = mysqli_fetch_row($real_data);
    ?>

    <div>
        <?  echo "<table class=\"table  table-hover table-condensed\" style='text-align: center'>";

        echo "<td style='width: 50px '>".$row[0]."</td>";
        if(strlen($row[1])>20)
        {
            //title이 20을 넘어서면 ...표시
            $row[1]=str_replace($row[1],mb_substr($row[1],0,20,"utf-8")."...",$row[1]);
        }
        if($row[6]>0){ //댓글이 있으면 댓글 수 표시
            echo "<td style='width: 500px '><a href='view.php?num=$row[0]'>".$row[1]."(".$row[6].")";"</td>";
        }
        else{ // 없으면 표시 안함
            echo "<td style='width: 500px'><a href='view.php?num=$row[0]'>".$row[1]."</td>";
        }
        echo "<td style='width: 150px' >".$row[2]."</td>";
        echo "<td style='width: 50px'>".$row[3]."</td>";
        echo "<td style='width: 200px'>".$row[4]."</td>";

        ?>
    </div>

    <?php
    if ($row == false) {
        exit;
    }
}



?>
echo "</table>";
echo "</center>";
?>

