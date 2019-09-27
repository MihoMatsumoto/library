<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->script('jquery-3.4.1.min');?>
    <?= $this->Html->css('myBookShelfCSS.css');?>

    <script type="text/javascript">
    // 自分自身をフォローできないようにする
    window.onload = function(){
        $("#<?= $this->request->session()->read('Auth.User.user_id')?>").prop("disabled",true);
      }
    </script>



</head>

<body>

    <div class="bg-rgba">
    <h2>ユーザー一覧</h2>

    <br>

    <table border="1" cellspacing="0">
                <tr>
                    <td>名前</td>
                    <td>ユーザーID</td>
                    <td>フォローボタン</td>
                </tr>

                <div style="display:none;">
                <!-- <?= $this->Form->create(null,["controller"=>"Follows","action"=>"follow"]);?> -->
                </div>
                <?php foreach($infos as $info):?>
                <form action="http://localhost/follows/follow">

                <tr>
                    <td><?=h($info['name']);?></td>
                    <td><?=h($info['user_id']);?></td>
                        <input type="hidden" name="user_id" value="<?=h($info['user_id']);?>"/>
                    <td><?=$this->Form->submit('フォロー',['class'=>'button2']);?></td>
                    </td>
                </tr>
                </form>

            <?php endforeach;?>
            <div style="display:none;">
                <!-- <? $this->Form->end();?> -->
                </form>
                </div>

        </table>
<br>

            <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'lists']);?>" class="underLeft">一覧表示に戻る</a>
    </div>


</body>

</html>