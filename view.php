<?php
include 'mysqli_connect.php';


include 'test.php';
$num = $_GET['num'];
$select_query = "select * from list where list_no = $num";
$result_set = mysqli_query($mysqli,$select_query);
$query="update list set  viewcnt=viewcnt+1 WHERE list_no=".$num;
$result_set2 = mysqli_query($mysqli,$query);?>
    <center>
        <div class="container ">



            <div class="row">
        <div class="col-lg-5 col-md-offset-3">

    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading"><span class="
glyphicon glyphicon-comment">  PHP BOARD </span></div>

<?
$row = mysqli_fetch_row($result_set);
    echo "<table class= \"table table-dark table table-bordered  table-condensed\" style='text-align: center'>";
    echo "<tr>";
    echo "<td >$row[0]</td>";
    echo "<td >$row[2]</td>";


    echo "<td>".$row[4]."</td>";

    echo "</tr>";
    echo "<tr>";
    echo "<td class=\"active\" colspan='6' width=\"500\"> TITLE </td>";
    echo "</tr>";
    echo "<th style='text-align: center' colspan='6' width= '500px' >".$row[1]."</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td  class=\"active\" colspan='6' width=\"500\"> CONTENT </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th colspan='6' style='width: 500px ;hight: 500px; text-align: center'>".$row[5]."</th>";
    echo "</tr>";
    echo "</table>";

echo"<table>";





if(isset($_SESSION['userid'])){
    if($_SESSION['userid'] == $row[2]) {//세션값과 작성자 아이디가 같은지 비교

        echo "<td><form action='delete.php' method='get'>";
        echo "<input type='hidden' name='num' value='$num'>";
        echo "<input type='submit' class=\"btn btn-danger\" style=\"background-color:transparent;  border:0px transparent solid;\"  value='✖️'>";
        echo "</form></td>";

        echo "<td><form action='modifiy2.php' method='POST'>";
        echo "<input type='hidden' name='num' value='$num'>";
        echo "<input type='submit'class=\"btn btn-primary\" style=\"background-color:transparent;  border:0px transparent solid;\"  value='✒️'>";
        echo "</form><td>";
        echo "</table>";


    }
}
//댓글부분!!
echo "<br />";

$select_query2 = "select * from comment where list_no = $num";
$result_set3 = mysqli_query($mysqli,$select_query2);
if ($row[6]>0){
echo "<table class= \"table table-striped\">";
echo "<td width=\"100\"> 작성자 </td>";
echo "<td width=\"450\"> 댓글내용 </td>";
echo "<td width=\"150\"> 작성시간 </td>";
}
if(isset($_SESSION['userid'])){ //로그인 했을때만 댓글창이 보임
echo "<form action=\"com.php\" method=\"post\">";
echo "<input type='hidden' name='num' value='$num'>";
echo " <textarea class=\"form-control\" rows=\"1\" name ='com'></textarea>";
echo '   <input type="submit" class="btn btn-success"style="background-color:transparent;  border:0px transparent solid;" value="✔️">';
    echo '</form>';
}echo '</table>';

while ($row2 = mysqli_fetch_row($result_set3)){
    echo "<table class='table'>";
    echo "<tr>";
    echo "<td style='width: 100px'>".$row2[2]."</td>";
    echo "<td style='width: 450px; text-align: left'>".$row2[3]."</td>";
    echo "<td style='width: 150px'>".$row2[4]."</td>";
    if(isset($_SESSION['userid'])){

        if($_SESSION['userid'] == $row2[2]){
            echo "<td style='width: 10px'><form action='com_del.php' method='POST'>
       <input type='hidden' name='comno' value='$row2[1]'> 
        <input type='hidden' name='comnum' value='$num'> 
    <input type='submit'  style=\"background-color:transparent;  border:0px transparent solid; \" value='❌'>
  
       </form></td>";}}
if(isset($_SESSION['userid'])){
        if($_SESSION['userid'] != $row2[2]){
            echo "<td style='width: 80px'>  </td>";
        }}
    echo "</tr>";
    echo "</table>";
}
echo "</center>";
?>

