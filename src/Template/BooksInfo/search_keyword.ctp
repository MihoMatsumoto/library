<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>



</head>

<body>

    <div class="bg-rgba">
    <h2>キーワード検索</h2>
    <div>※何も入力しない場合は全検索になります</div>

    <br>

<table >
    <?=$this->Form->create(null,['url'=>["controller"=>"BooksInfo","action"=>"keyResult"]]);?>
    <tr>
        <td>キーワード：</td>
        <td>
            <?= $this->Form->control('key',['label'=>false,'maxlength'=>'50','class'=>'inp']);?>
        </td>
    </tr>

</table>
<?=$this->Form->submit('検索',['class'=>'button']);?>
<?=$this->Form->end();?>
<br>

            <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'function-list']);?>" class="underLeft">検索方法一覧に戻る</a>
    </div>




</body>

</html>