<?php
function iteratesNumbers($nbDebut, $nbFin){
    for($i = $nbDebut; $i <= $nbFin; $i++){
        if($i % 3 === 0 && $i % 5 !== 0) echo "Fizz<br />";
        elseif($i % 5 === 0 && $i % 3 !== 0) echo "Buzz<br />";
        elseif ($i % 5 === 0 && $i % 3 === 0) echo "FizzBuzz<br />";
        else echo "$i<br />";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php iteratesNumbers(1,50); ?>
</body>
</html>