<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>Sign Up</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    body{
        background-color:#dddddd;
        text-align: center;
    }


</style>



<body>
<br \>
<h2>login page</h2>
<br \>
<form  action="LoginCheck.php" method="post"class="form-horizontal">

    <div class="form-group">

        <label for="inputEmail3" class="col-sm-5 control-label">Userid</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="id" placeholder="Userid">
        </div>
    </div>

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-5 control-label">Password</label>
        <div class="col-sm-2">
            <input type="password" class="form-control" name="pw" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">로그인</button>
            <button type="button" class="btn btn-success">회원가입</button>
        </div>
    </div>
</form>


<!--
<body>
<center>
     <form action="LoginCheck.php" method="post">
        <table width="800">
            <tr height="40">

                <td align="center"><b>[ 로그인 ]</b></td>
            </tr>
        </table>
        <table width="700" height="100" cellpadding="0" style="border-collapse: font-size:9pt;">
            <tr class="register" height="10">
                <td width="5%" align="center">*</td>
                <td width="15%">ID</td>
                <td><input type="text" name="id" size=""/> </td>
            </tr>
            <tr height="7">
                <td colspan="3"><hr /></td>
            </tr>
            <tr class="register" height="10">
                <td width="5%" align="center">*</td>
                <td width="15%">비밀번호</td>
                <td><input type="password" name="pw" id="pw" /></td>
            </tr>
        </table>
        <br />
        <table>
            <tr height="10">
                <td> <input type="button" value="뒤로가기" onclick="history.back(-1);"></td>

                <td><input type="submit"  class="btn btn-success" value="로그인"></td>
                <td> <input type="button" value="회원가입" onclick="location='signUp.html'"></td>
            </tr>
        </table>
    </form>
</center>
-->

