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
            // "null",array("type"=>"get","controller"=>"Users","action"=>"functionList"
            echo $this->Form->create();
            ?>
            <table>
            <tr>
            <td>
            <span class="fontWhite">ID</span></td>
            <!-- <?php
            echo $this->Form->input('user',['label'=>false]);
            ?> -->
            <td>
            <input Type="text" name="user_id"></td>
            </tr>
            <tr><td>
            <span class="fontWhite">Password</span></td>
            <td>
            <?php
            echo $this->Form->input('password',['label'=>false]);?></td>
            </tr>
</table>
            <div class="button" >
            <!-- style="position:absolute;right:10px;" -->
            <?php
            echo $this->Form->button('ログイン',['type'=>'submit']);
            ?></div>
            <?php
            echo $this->Form->end();

            ?>
        </div>

    </div>

</body>

</html>