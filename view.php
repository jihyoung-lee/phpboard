<?php
include 'mysqli_connect.php';


include 'navbar.php';
$num = $_GET['num'];
$select_query = "select * from list where list_no = $num";
$result_set = mysqli_query($mysqli,$select_query);
$query="update list set  viewcnt=viewcnt+1 WHERE list_no=".$num;
$result_set2 = mysqli_query($mysqli,$query);
    echo "<center>";
    echo "<table border='1' style='text-align: center'>";
    echo "<td width=\"50\">글번호 </td>";
    echo "<td width=\"100\"> 작성자 </td>";
    echo "<td width=\"250\">작성일</td>";
    echo "<td width=\"50\"> 댓글 </td>";
    echo "<td width=\"50\">조회수</td>";



$row = mysqli_fetch_row($result_set);
    echo "<h1>게시글</h1>";
    echo "<table border='1' style='text-align: center'>";
    echo "<tr>";
    echo "<td width=\"50\">$row[0]</td>";
    echo "<td width=\"100\">$row[2]</td>";


    echo "<td width=\"250\">$row[4]</td>";
echo "<td width=\"50\">".$row[6]."</td>";
echo "<td width=\"50\">".$row[3]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan='6' width=\"500\"> 제목 </td>";
    echo "</tr>";
    echo "<th colspan='6' width= '500px' >".$row[1]."</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan='6' width=\"500\"> 내용 </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th colspan='6' style='width: 500px ;hight: 500px; text-align: left'>".$row[5]."</th>";
    echo "</tr>";
    echo "</table>";

echo"<table>";
echo '<td></td><input type="button" value="글 목록" onclick="history.back(-1);"></td>';




if(isset($_SESSION['userid'])){
    if($_SESSION['userid'] == 'test') {//세션은 잘 넘어오는데 글 작성자 아이디 값이 안넘어옴 ㅠㅠ

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
//댓글부분!!
echo "<br />";

$select_query2 = "select * from comment where list_no = $num";
$result_set3 = mysqli_query($mysqli,$select_query2);
echo "<table border='1' style='text-align: center'>";
echo "<td width=\"100\"> 작성자 </td>";
echo "<td width=\"450\"> 댓글내용 </td>";
echo "<td width=\"150\"> 작성시간 </td>";
if(isset($_SESSION['userid'])){ //로그인 했을때만 댓글창이 보임
echo "<form action=\"com.php\" method=\"post\">";
echo "<input type='hidden' name='num' value='$num'>";
echo "<textarea style='width: 670px; height: 50px' name='com''></textarea>";
echo '   <input type="submit" value="댓글">';
}
while ($row2 = mysqli_fetch_row($result_set3)){
    echo "<tr>";
    echo "<td style='width: 100px'>".$row2[2]."</td>";
    echo "<td style='width: 450px; text-align: left'>".$row2[3]."</td>";
    echo "<td style='width: 150px'>".$row2[4]."</td>";
    echo "</tr>";
}
echo "</center>";
?>

