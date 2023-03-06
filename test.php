<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1</title>
</head>
<body>
<?php
    $books = [
        [
            'title' => 'The first book',
            'Author' => 'The first Author',
            'publish_date' => '1395',
            'price' => '100000'
        ],
        [
            'title' => 'The second book',
            'Author' => 'The second Author',
            'publish_date' => '1399',
            'price' => '200000'
        ],
        [
            'title' => 'The third book',
            'Author' => 'The third Author',
            'publish_date' => '1395',
            'price' => '150000'
        ]
    ];
    ?>
    <h3>Books list</h3>
    <table>
        <?php foreach($books as $key=>$value){ ?>
            <tr>
                <td> <?= $key ?> </td> <td> <?php var_dump($value) ?> </td>    
            </tr>    
        <?php } ?>

</body>
</html>