
<?php /*
 echo" <form action='modifiy.php' method='post'>";
 echo"        <p>제목</p>";
echo"         <textarea style='width: 500px' name='title'>$array[1]</textarea>";
   echo"      <p>내용</p>";
echo"<textarea style='width: 500px ; height: 500px' name='content'>$array[5]</textarea>";
echo"<table>";
echo "<td><input type='hidden' name='num' value='$num'>";
echo"        <input type='submit' value='작성완료'></td>";
echo'<td><input type="button" value="취소" onclick="history.back(-1);"></td>';
echo"  </form>";*/?>
<!DOCTYPE html>
<html lang="ko">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>부트스트랩 101 템플릿</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>

    <![endif]-->

</head>
<body>
    <form action="modifiy.php" method="post">
        <div class="container ">

            <?php
            $num = $_POST['num'];
            include "mysqli_connect.php";
            $query = "select * from list where list_no = $num";
            $result = mysqli_query($mysqli,$query);
            $array = mysqli_fetch_array($result);?>

            <div class="row">
                <div class="col-lg-5 col-md-offset-3">

                    <div class="panel panel-success">
                        <!-- Default panel contents -->
                        <div class="panel-heading"><span class="
glyphicon glyphicon-comment">  PHP BOARD </span></div>

<table class= "table table-dark table table-bordered  table-condensed" style='text-align: center'>
<tr>


                     <td class=\"active\" colspan='6' width="500"> TITLE </td>
                      </tr>
            <?php echo    "<th style='text-align: center' colspan='6' width= '500px' ><textarea class=\"form-control\" rows=\"1\" name=\"title\">".$array[1]."</textarea></th>";?>
                       <tr>
                        <td  class=\"active\" colspan='6' width=\"500\">CONTENT  </td>
                        </tr>
                        <tr>
                            <?php echo    ' <th colspan="6" style="width: 500px ;hight: 500px; text-align: center"><textarea class="form-control" rows="3" name="content">'.$array[5].'</textarea></th>';?>

                      </tr>
  <?php echo" <td><input type='hidden' name='num' value='$num'>";?>
        <input type='submit' class="btn btn-success" value='등록'>
    </td>
</table>


</div>

                </div>
            </div>
        </div>

    </form>
                        <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
                        <script src="js/bootstrap.min.js"></script>
</body>
</html>






