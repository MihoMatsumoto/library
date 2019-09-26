<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>



</head>

<body>

    <div class="bg-rgba">
    <h2>書籍詳細</h2>

            <table>

                <?php foreach($infos as $info):?>

                <tr>
                    <td>題名：</td>
                    <td>
                    <?= h($info['title'])?>
                    </td>
                </tr>
                <tr>
                    <td>著者：</td>
                    <td>
                    <?= h($info['author'])?>
                    </td>
                </tr>
                <tr>
                    <td>出版者：</td>
                    <td>
                    <?= h($info['publisher'])?>
                    </td>
                </tr>
                <tr>
                    <td>出版年月：</td>
                    <td>
                    <?= h($info['year_month']) ?>
                    </td>
                </tr>
                <tr>
                    <td>所有者</td>
                    <td><?=h($info['user_id'])?></td>
                </tr>

        <?php endforeach;?>

<div>レビューまだ！！！</div>
            </table>
<br>

            <a href="<?=$this->Url->build(['controller'=>'BooksInfo','action'=>'search_all_books']);?>" class="underLeft">書籍一覧に戻る</a>
    </div>




</body>

</html>