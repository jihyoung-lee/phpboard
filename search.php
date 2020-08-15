
<?php
include 'navbar.php';
$search = $_POST['search'];
echo"<center>";

echo '<br />';
?>

    <form action="search.php" method="post">
    <div class="container">
        <div class="row">
            <div id="custom-search-input">

                <div class="input-group col-md-3">
                    <input class="form-control input-lg" type="text" name = "search" placeholder="Search"  style="height:25px;">
                    <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                </div>
            </div>
        </div>
    </div>
    </form>
<?php
echo '     <div class="row">';
echo '        <div class="col-lg-6 col-md-offset-3">';
echo '    <div class="panel panel-success">';

echo '        <div class="panel-heading"><span class="glyphicon glyphicon-search">  "'.$search.'" 검색결과 </span></div>';
 echo '   <table class="table"   >';




  echo '      <tr  >';


    echo '        <td width="50">#</td>';
   echo '         <td width="500">TITLE</td>';
    echo '        <td width="150">USER ID</td>';
   echo '         <td width="50">VIEW</td>';
  echo '          <td width="200">DATE</td>';






echo '</center>';
   echo "  </table>";
include 'mysqli_connect.php';
$query = "select * from list where title like'%$search%' or contents like '%$search%'";
$result = mysqli_query($mysqli, $query);

echo "<center>";
echo "<table class=\"table table-dark table-hover table-condensed\"style='text-align: center'>";
while ($row = mysqli_fetch_row($result)){




    echo "<tr>";
    echo "<td style='width: 50px'>".$row[0]."</td>";
    if(strlen($row[1])>20)
    {
        //title이 20을 넘어서면 ...표시
        $row[1]=str_replace($row[1],mb_substr($row[1],0,20,"utf-8").".......",$row[1]);
    }
    if($row[6]>0){ //댓글이 있으면 댓글 수 표시
        echo "<td style='width: 500px '><a href='view.php?num=$row[0]'>".$row[1]."(".$row[6].")";"</td>";
    }
    else{ // 없으면 표시 안함
        echo "<td style='width: 500px'><a href='view.php?num=$row[0]'>".$row[1]."</td>";
    }

    echo "<td style='width: 150px'>".$row[2]."</td>";
    echo "<td style='width: 50px'>".$row[3]."</td>";
    echo "<td style='width: 200px'>".$row[4]."</td>";
}
echo "</tr>";

echo "</table>";
echo "</center>";
echo '    </div>';
echo '    </div>';
echo '       </tr>';


echo ' </table>';

?>
