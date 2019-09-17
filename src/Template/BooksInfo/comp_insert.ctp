<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>

    

</head>

<body>
    
    <div class="bg-rgba">
        <h2>以下の内容で登録しました</h2>
        <table >
                <tr>

                    <td>題名：</td>
                    <td>
                       <?= h($entiey['title'])?>
                    </td>
                </tr>
                <tr>
                    <td>著者：</td>
                    <td>
                    <?= h($entiey['author'])?>
                    </td>
                </tr>
                <tr>
                    <td>出版者：</td>
                    <td>
                    <?= h($entiey['publisher'])?>
                    </td>
                </tr>
                <tr>
                    <td>出版年月：</td>
                    <td>
                    <?= h($entiey['year_month']) ?>
                    </td>
                </tr>
            </table>
                
                <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'index']);?>" class="underLeft">機能一覧に戻る</a>
                
    </div>




</body>

</html>