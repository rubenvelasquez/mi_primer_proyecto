<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Login tercera parte</p>
    <ul>
    <?php foreach ($menu as $item ): ?>
       <li><a href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>