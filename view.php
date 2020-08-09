<?php
include 'mysqli_connect.php';
$num = $_GET['num'];
$select_query = "select * from list where list_no = $num";
$result_set = mysqli_query($mysqli,$select_query);
$query="update list set  viewcnt=viewcnt+1 WHERE list_no=".$num;
$result_set2 = mysqli_query($mysqli,$query);
echo "<center>";
echo "<table border='1' style='text-align: center'>";
echo "<td width=\"50\">글번호 </td>";
echo "<td width=\"100\"> 작성자 </td>";
echo "<td width=\"500\"> 제목 </td>";

while($row = mysqli_fetch_row($result_set)) {
    echo "<h1>게시글</h1>";
    echo "<table border='1' style='text-align: center'>";
    echo "<tr>";
    echo "<td width=\"50\">$row[0]</td>";
    echo "<td width=\"100\">$row[2]</td>";
    echo "<td width=\"500\">".$row[1]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan='3' width=\"500\"> 내용 </td>";
    echo "</tr>";
    echo "<th colspan='3' style='width: 500px ;hight: 500px text-align: left'>".$row[5]."</th>";
    echo "</tr>";
    echo "</table>";
}
echo"<table>";
echo '<td></td><input type="button" value="글 목록" onclick="history.back(-1);"></td>';
include 'session.php';



if(isset($_SESSION['userid'])){ //세션은 잘 넘어오는데 글 작성자 아이디 값이 안넘어옴 ㅠㅠ
    if($_SESSION['userid'] == 'test'){

    echo "<td><form action='delete.php' method='get'>";
    echo "<input type='hidden' name='num' value='$num'>";
    echo "<input type='submit' value='삭제하기'>";
    echo "</form></td>";
    echo "<td><form action='modifiy2.php' method='POST'>";
    echo "<input type='hidden' name='num' value='$num'>";
    echo "<input type='submit' value='수정하기'>";
    echo "</form><td>";
        echo "</table>";
    }
}
echo "<br />";
echo "<table border='1' style='text-align: center'>";
echo "<td width=\"50\"> 작성자 </td>";
echo "<td width=\"450\"> 내용 </td>";
echo "<td width=\"150\"> 작성시간 </td>";
echo "<textarea style='width: 670px; height: 50px' name='content''></textarea>";
echo "</center>";
?>

