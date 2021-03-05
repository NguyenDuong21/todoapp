<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>To list</th>
        </tr>
        <?php foreach ($data as $do):?>
            <tr>
                <td><?php echo $do['id'] ?></td>
                <td><?php echo $do['do'] ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>