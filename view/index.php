
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<a href="add.php">Добавить статью</a>
<?php foreach($items as $item):?>
        <table border="1">
            <tr><td><?php echo $item['title'];?></td>
            <td><?php echo $item['date'];?></td></tr>
        <tr>  <td>  <?php echo $item['content'];?></td></tr>
        <table>
<?php endforeach;?>

</body>
</html>
