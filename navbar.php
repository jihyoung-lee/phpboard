<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>부트스트랩 101 템플릿</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>



</style>
<body>

<!------ Include the above in your HEAD tag ---------->
<? include 'session.php'; ?>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand">PHP board</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="index.php">Home</a></li>
                </ul>

                <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <ul class="nav">

                    <?
                    include "mysqli_connect.php";

                   /* if (isset($_SESSION['userid'])) {
                        $id = $_SESSION['userid'];


                            echo   '<li ><a href="#"><span class="glyphicon glyphicon-off" ></span>  Welcome    '.$id.'!</a></li>';
                        }
                        else{
                            echo '<li ><a href="#"><span class="glyphicon glyphicon-off" ></span> 로그인 해주세요</a></li>';
                        }*/?>

                    </ul>
                    <li class="dropdown">


                            <? if(isset($_SESSION['userid'])){
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
                            echo'  <li><a href="signUp.html">Join</a></li>';

                            echo'       </ul>';
                            echo'   </li>';}?>

                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div>
<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>