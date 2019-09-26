<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>

    

</head>

<body>

    <div class="bg-rgba">
        <h2>一覧表示</h2>
        <br>
        <a href="<?=$this->Url->build(['controller'=>'BooksInfo','action'=>'searchAllBooks']);?>">書籍一覧</a>

        <br><br>
        <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'searchUserlist'])?>">ユーザー一覧</a>
        <br><br>
       
            <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'index']);?>" class="underLeft">機能一覧に戻る</a>
    </div>
   




</body>

</html>