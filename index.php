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

$flag_name = false;
$flag_email = false;
$flag_eta = false;

if(isset($_GET['nome']) && isset($_GET['eta'])&& isset($_GET['email'])){
    
}


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
    <form action="index.php" method"GET">
        <input type="text" placeholder="Nome" name="nome">
        <input type="email" placeholder="email" name="email">
        <input type="number" placeholder="eta" name="eta">
        <button type="submit">Invia</button>
    </form>
    <?php if(isset($_GET['nome'])) && isset($_GET['eta'] && isset ($_GET['email'])){?>
	<?php if($flag_email && $flag_name && $flag_eta){
		echo 'Accesso riuscito';
	}
	else{
		echo 'Accesso negato';
	}
	<?php }?>

</body>
</html>


