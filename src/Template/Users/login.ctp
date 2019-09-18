<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= $this->Html->css('myBookShelfCSS.css') ?>

</head>

<body>
    <div class="center">

        <?php
        echo $this->Html->image("logoWM.png");
        ?>
       
        <div>
            <br>
            
            <?php
            echo $this->Form->create();
            ?>
            <table>
                <tr><div style='color:white;'>
                <?=$this->Flash->render('err');?>
                </div>
                    <td>
                        <span class="fontWhite">ID</span>
                    </td>
                    <td>
                        <input Type="text" name="user_id">
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fontWhite">Password</span>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->input('password',['label'=>false]);?>
                    </td>
                </tr>
            </table>
            <?php
            echo $this->Form->submit('ログイン',['class'=>'button']);
            ?>
            <?php
            echo $this->Form->end();

            ?>
        </div>

    </div>

</body>

</html>