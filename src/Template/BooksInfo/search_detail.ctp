<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>

    

</head>

<body>
    
    <div class="bg-rgba">
    <h2>詳細検索</h2><br>
<div style='color:red;'>
<?php
$session = $this->getRequest()->getSession();
$msg = $session->read('msg');


if($session->check('msg')){
echo $msg;
$session->consume('msg');
}
?>
</div>
<table >
    <?=$this->Form->create(null,["controller"=>"BooksInfo","action"=>"detailResult"]);?>   
    <tr>
        <td>題名：</td>
        <td>
            <?=$this->Form->control('title',['label'=>false,'maxlength'=>'50','class'=>'inp']);?>
        </td>
    </tr>
    <tr>
        <td>著者：</td>
        <td>
            <?=$this->Form->control('author',['label'=>false,'maxlength'=>'30','class'=>'inp']);?>
        </td>
    </tr>
    <tr>
        <td>出版者：</td>
        <td>
            <?=$this->Form->control('publisher',['label'=>false,'maxlength'=>'30','class'=>'inp']);?>
        </td>
    </tr>
    <tr>
        <td>出版年月：</td>
        <td>
        <?=$this->Form->control('yearMonth',['label'=>false,'class'=>'inp',
                    'type'=>'datetime','dateformat'=>'YMD','monthNames'=>false,'templates'=>['dateWidget'=>'{{year}}年{{month}}月'],'minYear'=>1950,'maxYear'=>date('Y'),'empty'=>true]);?>
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