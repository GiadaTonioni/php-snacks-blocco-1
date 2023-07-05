<?php

    $array_matches = [
    [
        'match' => 'Lakers - Nuggets',
        'results'=> '102 - 99'
    ],
    [
        'match' => 'Magic - Celtics',
        'results'=> '100 - 125' 
    ],
    [
        'match' => 'Trail Blazers - Warriors',
        'results'=> '105 - 104'
    ],
    [
        'match' => 'Cavaliers - Knicks',
        'results'=> '113 - 115'
    ],
    [
        'match' => 'Suns - Spurs',
        'results'=> '130 - 110'
    ],
    [
        'match' => 'Bucks - Bulls',
        'results'=> '125 - 90'
    ]      
];

$posts = [
    '01/08/2015' => [
        [
            'title' => 'Post Sea',
            'author' => 'Francesco Sabbia',
            'text'  => 'The sea' 
        ],
        [
            'title' => 'Post Mountain',
            'author' => 'Giuseppe Alpen',
            'text'  => 'The big Mountain' 
        ],
        [
            'title' => 'Post Rome',
            'author' => 'Laura dalla Chiesa',
            'text'  => 'Rome to night' 
        ]
    ],
    '05/10/2020' => [
        [
            'title' => 'Post Random',
            'author' => 'Matteo Messina',
            'text'  => 'The random' 
        ]
    ],
    "10/10/2010" => [
        [
            'title' => 'Post Food',
            'author' => 'Lorenzo Rovagnati',
            'text'  => 'The cheescake' 
        ],
        [
            'title' => 'Post in Air',
            'author' => 'Vanesssa Pes',
            'text'  => 'The Hot Air Balloon' 
        ]
    ],    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>SNACK-1</h3>
    <ul>
        <?php foreach($array_matches as $match){ ?>
            <li><?php echo $match['match'].' | '.$match['results']; ?></li>
        <?php } ?>
    </ul>
    <hr>
    <h3>SNACK-2</h3>
    <form action="index.php" method="GET">
        <input type="text" placeholder="Nome" name="nome">
        <input type="email" placeholder="email" name="email">
        <input type="number" placeholder="eta" name="eta">
        <button type="submit">Invia</button>
    </form>
    <hr>
    <h3>SNACK-3</h3>
    <ul>
        <?php foreach($posts as key=>$post){ ?>
        <li>
            <?php echo $key; ?>
            <ul>
                <?php foreach($post as $item){ ?>
                    <li><?php echo $item['title']."-".$item['author']."-".$item['text']; ?> </li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
    </ul>


</body>
</html>


