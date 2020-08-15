
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Homepage</title>
</head>

<body>
<? include 'navbar.php'; ?>

<center>


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
    <div class="row">
        <div class="col-lg-6 col-md-offset-3">

    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading"><span class="
glyphicon glyphicon-comment">  PHP BOARD </span></div>
        <table class="table table-striped"   >




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