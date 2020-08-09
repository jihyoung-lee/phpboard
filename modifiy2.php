<?php
$num = $_POST['num'];
include "mysqli_connect.php";
$query = "select * from list where list_no = $num";
$result = mysqli_query($mysqli,$query);
$array = mysqli_fetch_array($result);
 echo" <form action='modifiy.php' method='post'>";
 echo"        <p>제목</p>";
echo"         <textarea style='width: 500px' name='title'>$array[1]</textarea>";
   echo"      <p>내용</p>";
echo"<textarea style='width: 500px ; height: 500px' name='content'>$array[5]</textarea>";
echo"<table>";
echo "<td><input type='hidden' name='num' value='$num'>";
echo"        <input type='submit' value='작성완료'></td>";
echo'<td><input type="button" value="취소" onclick="history.back(-1);"></td>';
echo"  </form>";
/*
echo "<form action ='modifiy.php' method='post'>";
echo "<textarea style='width: 500px' name='title'>$array[1]</textarea>";
echo "<textarea style='width: 500px' name='contents'>$array[5]</textarea>";
echo "<input type='hidden' name='num' value='$num'>";
echo "<a href='modifiy.php'><input type='title' value='수정완료'</a>";
echo "</form>";
*/
?>





