<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>



</head>

<body>

    <div class="bg-rgba">
    <h2>書籍一覧</h2><br>
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

                <?php
                if(!empty($err)){
                    echo $err;
                }
                ?>

                <?php foreach($datas as $data):?>

                <div style='text-align:left;'>
                <? $id = $data['id']?>
                    <a href="<?=$this->Url->build([
                        'controller'=>'BooksInfo',
                        'action'=>'detailBooksInfo',
                        $data['id']
                    ],true)?>">

                    <?=h($data['id']);?>/

                    <?=h($data['title']);?>/
                    <?=h($data['author']);?>/
                    <?=h($data['publisher']);?>
                    </a>
                   </div>
<?php endforeach;?>

            <!-- </table> -->
<br>

            <a href="<?=$this->Url->build([
                'controller'=>'Users',
                'action'=>'lists',

                ]);?>" class="underLeft">一覧表示に戻る</a>
    </div>



</body>

</html>