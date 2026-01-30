<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobs</title>
</head>
<body>
    <h1><?php echo $title ?></h1>
    <?php foreach ($jobs as $job) :?>
        <li><?php echo $job; ?></li>
    <?php endforeach; ?>
</body>
</html>