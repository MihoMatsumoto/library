<!DOCTYPE html>
<html lang="ja">
<head>

</head>
<body>
<table>
<tr>
    <th>番号</th>
    <th>名前</th>
    <th>ID</th>
    <th>pass</th>
</tr>
<?php foreach($users as $value):?>
<tr>
    <td><?= $value->id ?></td>
    <td><?= $value->name ?></td>
    <td><?= $value->user_id ?></td>
    <td><?= $value->password ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>