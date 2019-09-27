<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>



</head>

<body>

    <div class="bg-rgba">
        <h2>書籍登録</h2>
        <table >
                <?= $this->Form->create($ValidationError,array('url'=>["controller"=>"BooksInfo","action"=>"compInsert"]));
                 ?>
                 <tr>
                 <!-- <div style="color:red;"> -->
                 <?= $this->Form->error('title')?>
                 <!-- <?= $this->Form->error('yearMonth')?> -->
                 <!-- </div> -->
                 </tr>
                <tr>
                    <td>題名：</td>
                    <td>
                        <?= $this->Form->conttrol('title',array('label'=>false,'maxlength'=>'50','class'=>'inp','required'=>true)); ?>
                    </td>
                </tr>
                <tr>
                    <td>著者：</td>
                    <td>
                        <?= $this->Form->control('author',array('label'=>false,'maxlength'=>'30','class'=>'inp'))?>
                    </td>
                </tr>
                <tr>
                    <td>出版者：</td>
                    <td>
                    <?= $this->Form->control('publisher',array('label'=>false,'maxlength'=>'30','class'=>'inp'))?>
                    </td>
                </tr>
                <tr>
                    <td>出版年月：</td>
                    <td>
                    <?= $this->Form->control('yearMonth',array('label'=>false,'class'=>'inp',
                    'type'=>'datetime','dateformat'=>'YMD','monthNames'=>false,'templates'=>['dateWidget'=>'{{year}}年{{month}}月'],'minYear'=>1950,'maxYear'=>date('Y'),'empty'=>true))?>
                    </td>
                </tr>

            </table>
                <?= $this->Form->submit('登録',['class'=>'button'])?>
                <?=$this->Form->end();?>

                <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'index']);?>" class="underLeft">機能一覧に戻る</a>

    </div>




</body>

</html>