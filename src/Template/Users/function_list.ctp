<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>

    

</head>

<body>
    
    <div class="bg-rgba">
        <h2>検索方法選択</h2>
        <br>
        <a href="kyewordSelect.html">キーワード検索</a>

        <br><br>
        <a href="detailSelect.html">詳細検索</a>
        <br><br>
       
            <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'index']);?>" class="underLeft">機能一覧に戻る</a>
    </div>




</body>

</html>