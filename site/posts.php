<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site | Web 1.0</title>
</head>
<body>
    <?php
    require_once '../common/post.php';
    ?>
    <ul>
        <?php
            $array = get_posts();
            foreach ($array as $value){?>
            <li>
                <h3><?php echo $value['title']; ?> </h3>
                <p> <?= $value['body']; ?> </p>
            </li>
         <?php } ?>
    </ul>

</body>
</html>