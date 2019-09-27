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
            </table>

            <div style="text-align:left">
                <h3>レビュー作成</h3>
                <fieldset>
                <?= $this->Form->create(null,['url'=>["controller"=>"Reviews","action"=>"index"]]);?>

                <div>書名：<?= h($info['title'])?></div>
                <input type="hidden" name='book_id' value='<?= h($info['id'])?>'/>
                <br>

                <div>本文</div>
                <div>
                    <?= $this->Form->input('text',[
                        'type'=>'textarea',
                        'cols'=>60,
                        'rows'=>5,
                        'label'=>false,
                        'maxlength'=>500
                    ]);?>
                </div>
                    <?= $this->Form->submit('送信',['class'=>'button2'])?>
                <?= $this->Form->end();?>
                </fieldset>

                <h3>この本のレビュー</h3>
                <?php if(!empty($messege)){
                    echo $messege;
                }?>
                <?php if(!empty($reviews)):
                foreach($reviews as $review):?>
                <fieldset>
                <div>
                <?= $review['user_id'];?>さんのレビュー
                </div>
                <br>
                <div>
                <?= $review['text'];?>
                <br>
                    <div style='text-align:right;'>
                    <?= $review['created'];?>
                    </div>
                </div>

                </fieldset>
                    <?php endforeach;
                    endif;?>
            </div>





<br>

            <a href="<?=$this->Url->build(['controller'=>'BooksInfo','action'=>'search_all_books']);?>" class="underLeft">書籍一覧に戻る</a>
    </div>




</body>

</html>