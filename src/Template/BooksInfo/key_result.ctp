<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>

    

</head>

<body>
    
    <div class="bg-rgba">
    <h2>キーワード検索結果</h2>

            <table border="1" cellspacing="0">
                <tr>
                    <td>題名</td>
                    <td>著者</td>
                    <td>出版者</td>
                    <td>出版年月</td>
                </tr>
                <div style="color:red;">
                <?php 
                if(!empty($err)){
                    echo $err;
                }
                ?>
                </div>
                <?php foreach($datas as $data):?>
                <tr>
                    <td><?=h($data['title']);?></td>
                    <td><?=h($data['author']);?></td>
                    <td><?=h($data['publisher']);?></td>
                    <td><?=h($data['year_month']);?>
                    </td>
                </tr>
<?php endforeach;?>

            </table>
<br>
       
            <a href="<?=$this->Url->build(['controller'=>'BooksInfo','action'=>'search_keyword']);?>" class="underLeft">キーワード検索に戻る</a>
    </div>




</body>

</html>