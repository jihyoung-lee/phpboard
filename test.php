<?php include "session.php"?>
<?php include "mysqli_connect.php"?>
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
<style>


</style>
<body>
<nav class="navbar  navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" >PHP BOARD</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="hover  "><a href="index.php">home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">

                    <?php if(isset($_SESSION['userid'])){
                        $id = $_SESSION['userid'];
                        echo'         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-off">  Welcome  '.$id.'!</span> </a>';
                        echo'           <ul class="dropdown-menu">';
                        echo' <li><a href="write.html">Write</a></li>';
                        echo'  <li><a href="#">My profile</a></li>';

                        $query_1 = "select * from list where userid_li like'$id'";
                        $result= mysqli_query($mysqli,$query_1);
                        $count = mysqli_num_rows($result);
                        echo'<li><a href="#">My contents  <span class="badge">'.$count.'</span></a></li>';


                        echo'         <li class="divider"></li>';
                        echo'     <li><a href="logOut.php">Logout</a></li>';
                        echo'       </ul>';
                        echo'   </li>';
                    }
                    if(!isset($_SESSION['userid'])){
                        echo'         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-off"> Login</span> </a>';
                        echo'           <ul class="dropdown-menu">';
                        echo' <li><a href="login.php">Login</a></li>';

/*echo'
        <button >
                            모달 실행
                        </button>
        <div class="modal fade" id="intro" role="dialog" aria-labelledby="introHeader" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">공지 사항</h4>
                    </div>
                    <div class="modal-body">
                        <p>안녕하세요.</p>
                        <p>codeomni 입니다. 방문해주셔서 감사합니다. 궁금하신 사항이나 문의 사항은 방명록에 공개 또는 비공개로 남겨주세요.</p>
                        <p>블로그 주소는 http://codeomni.tistory.com/입니다.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                    </div>
                </div>
            </div>
        </div>
        \';
*/

                    
                        echo'  <li><a href="signUp.html">Join</a></li>';

                        echo'       </ul>';
                        echo'   </li>';}?>

            </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>