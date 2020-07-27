<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style type="text/css">
        #700 {
            border-collapse: font-size: 9pt;
        }
    </style>
</head>
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
                <td><input type="submit" value="로그인"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>