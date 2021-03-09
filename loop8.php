<?php require_once('function.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop</title>
    <style>
    table, tr , td {
        border: black 1px solid;
    }
    table{
        height: 30px;
        width: 270px;
    }
    .squareBlack{
        background: black;
        height: 20px;
        width: 20px;
    }
    .squarewhite{
        background: white;
        height: 20px;
        width: 20px;
    }
    </style>
</head>
<body>
    <table cellpadding="3px" cellspacing="1px">
        <?php drawTab(8,8,"squareBlack","squareWhite"); ?>
    </table>




</body>
</html>
