<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>

    

</head>

<body>
    
    <div class="bg-rgba">
        <h2>機能一覧</h2>
        <br>
        <a href="<?php echo $this->Url->build(['controller'=>'Users','action'=>'lists']);?>">一覧表示</a>
        <br><br>
        <a href="<?php echo $this->Url->build(['controller'=>'BooksInfo','action'=>'insert']);?>">書籍登録</a>
        <br><br>
        <a href="<?php echo $this->Url->build(['controller'=>'Users', 'action'=>'functionList']); ?>">書籍検索</a>

    </div>




</body>

</html>