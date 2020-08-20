
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Homepage</title>
</head>

<body>
<? include 'test.php'; ?>

<center>


    <form action="search.php" method="post">
    <div class="My_container">
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


                <?php


                $select_query = "SELECT * FROM list";
                $data = mysqli_query($mysqli,$select_query);
                $num = mysqli_num_rows($data);

                $page = '';
                $page = isset($_GET['page']) ? $_GET['page'] :1; // isset 함수를 이용해 get에 값이 있는지 확인 하고 없다면 1을 넣어줌

                $list = 10;
                $block = 3;

                $pageNum = ceil($num/$list); // 총 페이지
                $blockNum = ceil($pageNum/$block); // 총 블록
                $nowBlock = ceil($page/$block);

                $s_page = ($nowBlock * $block) - 2;
                if ($s_page <= 1) {
                    $s_page = 1;
                }
                $e_page = $nowBlock*$block;
                if ($pageNum <= $e_page) {
                    $e_page = $pageNum;
                }

                /*

                echo "현재 블록은".$nowBlock."<br/>";

                echo "현재 블록의 시작 페이지는".$s_page."<br/>";
                echo "현재 블록의 끝 페이지는".$e_page."<br/>";

                echo "총 페이지는".$pageNum."<br/>";
                echo "총 블록은".$blockNum."<br/>";



                */
                ?>
<nav>
  <ul class="pagination">


                <?
                for ($p=$s_page; $p<=$e_page; $p++) {
                    ?>
                    <?
                    if ($pageNum > 1) {
                    for ($i=$s_page;$p<=$e_page;$p++) {
                    // 현재 페이지가 아니면 링크 걸기
                    if ($page != $p){?>
                    <li>  <a href="<?php  $PHP_SELP ?>?page=<?=$p?>"><?echo $p;?></a></li>

                   <? }else{?>
                    <li class="active"> <a href="<?php  $PHP_SELP ?>?page=<?=$p?>"><?echo $p;?></a></li>
                  <?  }
                    }
                    }?>



                    <?php
                }

                ?>
  </ul>
</nav>
            </div>
        </div>
    </div>
    </form>
    <div class="row">
        <div class="col-lg-6 col-md-offset-3">

    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading"><span class="
glyphicon glyphicon-comment">  PHP BOARD </span></div>
        <table class="table table-striped"style='text-align: center'   >




        <tr >


            <td width="50">#</td>
            <td width="500">TITLE</td>
            <td width="150">USER ID</td>
            <td width="50">VIEW</td>
            <td width="200">DATE</td>

            <? include 'list.php';?>
        </tr>
        </div>

    </table>

        </div>
    </div>

</center>

</body>
</html>