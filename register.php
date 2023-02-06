<?php
$censured = strtolower($_GET["censura"]) ;
$paragraph = $_GET["paragrafo"];

$contatore = strlen($paragraph);
$asterischi = "***";
$sottrazione_censura = (strlen($censured) - strlen($asterischi));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>Paragrafo originale </h2>
        <p><?php echo $paragraph ?></p>
        <p>Il paragrafo originale era lungo <?php echo $contatore ?> caratteri</p>
    </div>

    <div>
        <h2>Paragrafo censurato</h2>
        <p><?php echo str_replace($censured, $asterischi, strtolower($paragraph)) ?></p>
        <p>Il paragrafo censurato è lungo <?php echo ($contatore - $sottrazione_censura)?> caratteri</p>
    </div>
</body>

</html>