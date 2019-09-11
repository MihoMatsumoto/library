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
                <?= $this->Form->create(null,array("controller"=>"BooksInfo","action"=>"submit"));
                 ?>
                <tr>
                    <td>題名：</td>
                    <td>
                        <?= $this->Form->control('title',array('label'=>false,'maxlength'=>'50','class'=>'inp')); ?>
                        <!-- <input type="text" name="title" class="inp" maxlength="50" required> -->
                    </td>
                </tr>
                <tr>
                    <td>著者：</td>
                    <td>
                        <?= $this->Form->control('author',array('label'=>false,'maxlength'=>'30','class'=>'inp'))?>
                        <!-- <input type="text" name="author"class="inp"maxlength="30"> -->
                    </td>
                </tr>
                <tr>
                    <td>出版者：</td>
                    <td>
                    <?= $this->Form->control('publisher',array('label'=>false,'maxlength'=>'30','class'=>'inp'))?>
                        <!-- <input type="text" name="publisher"class="inp" maxlength="30"> -->
                    </td>
                </tr>
                <tr>
                    <td>出版年月：</td>
                    <td>
                    <?= $this->Form->control('yearMonth',array('label'=>false,'maxlength'=>'30','class'=>'inp',
                    'type'=>'datetime','dateformat'=>'YMD','monthNames'=>false,'templates'=>['dateWidget'=>'{{year}}年{{month}}月']))?>
                        <!-- <input type="month" name="yearMonth"class="inp" > -->
                    </td>
                </tr>
            </table>
                <?= $this->Form->submit('登録',['class'=>'button'])?>
                <!-- <input type="submit" value="登録" class="button"> -->
                <?=$this->Form->end();?>
                
                <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'index']);?>" class="underLeft">機能一覧に戻る</a>
                
    </div>




</body>

</html>