<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1</title>
</head>
<body>
    <?php
    $is_read = false;
    if($is_read)
    {
        $message = "first meeting with Mr Gharibi was done!!";
    }else{
        $message = "I must set a meeting with Mr Gharibi";
    }
    ?>
    <h1>This is the first session coding</h1>
    <h3><?= $message?></h3>
</body>
</html>