
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Homepage</title>
</head>
<body>
<center>
    <h1>게시판</h1>
    <form action="search.php" method="post">
        <tr class="search" height="10">
            <td width="5%" align="center">*</td>
            <td width="15%">search</td>
            <td><input type="text" name="search" size=""/> </td>
        </tr>
        <tr height="10">
            <td><input type="submit" value="search"></td>
        </tr>
    </form>
    <table border="1" style="text-align: center">
        <tr>

            <? include 'i_check.php'; ?>
            <td width="150">글번호</td>
            <td width="500">제목</td>
            <td width="150">작성자</td>
            <td width="150">조회수</td>
            <td width="200">작성일</td>
            <? include 'list.php';?>
        </tr>


    </table>
</center>
</body>
</html>