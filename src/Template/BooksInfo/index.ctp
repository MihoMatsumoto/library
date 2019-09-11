<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <style type="text/css">
        .hed {
            width: 100%;
            height: 100px;
            background-color: chocolate;
        }

        .right {
            position: absolute;
            right: 10px;
            top: 10px
        }

        .underRight {
            position: absolute;
            right: 10px;
            top: 80px
        }

        body {
            background-image: url('../img/backGroundBookshelf.jpg');
            background-size: cover;
        }

        .bg-rgba {
            background-color: rgba(255, 255, 255, 0.7);
            width: 40%;
            margin: 30px 30%;
            text-align: center;
            position: relative;
            padding: 30px;
        }
    </style>


</head>

<body>
    <header class="hed">
        <a href="itiran.html"><image src="../img/logoWM.png"></image></a>

        <div class="right">
        <?php
        foreach($users as $user):
        ?>
        <?= $pserson->name?>
        <?php endforeach;?>
        </div>
        <a href="" class="underRight">ログアウト</a>
    </header>
    <div class="bg-rgba">
        <h2>機能一覧</h2>
        <br>
        <a href="insert.html">書籍登録</a>
        <br><br>
        <a href="selectItiran.html">書籍検索</a>

    </div>




</body>

</html>