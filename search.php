
<?php
$search = $_POST['search'];
echo"<center>";
echo '<input type="button" value="글 목록" onclick="history.back(-1);">';
echo '<br />';
echo "<h1>'".$search."' 검색결과</h1>";
 echo "<table border='1' style='text-align: center'>";
       echo " <tr>";
           echo "<td width='150'>글번호</td>";
           echo "<td width='500'>제목</td>";
         echo "<td width='150'>작성자</td>";
         echo "<td width='150'>조회수</td>";
           echo "<td width='200'>작성일</td>";
        echo " </tr>";
echo "</center>";

   echo "  </table>";
include 'mysqli_connect.php';

$query = "select * from list where title like'%$search%' or contents like '%$search%'";
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_row($result)){
    echo "<center>";

    echo "<table border='1' style='text-align: center'>";
    echo "<tr>";
    echo "<td style='width: 150px'>".$row[0]."</td>";
    echo "<td style='width: 500px'><a href='view.php?num=$row[0]'>".$row[1]."</td>";
    echo "<td style='width: 150px'>".$row[2]."</td>";
    echo "<td style='width: 150px'>".$row[3]."</td>";
    echo "<td style='width: 200px'>".$row[4]."</td>";
    echo "</tr>";
    echo "</table>";
    echo "</center>";
}

?>
