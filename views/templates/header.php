<?php
$_COOKIE['cookieChoices'];
$userChoices = $_COOKIE['cookieChoices'];

foreach (str_split($userChoices,length:3) as $key => $value) {
    // var_dump(str_split($userChoices,length:3));
    // echo $value;
}
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

    <!------------------------- Navbar------------------------------ -->

    <div class="containernav">

        <nav class="navbar">
            <ul>
                <li><a href="">Foot</a></li>
                <li><a href="">Rugby</a></li>
                <li><a href="">Basket</a></li>
                <li><a href="">Tennis</a></li>
                <li><a href="">Formule 1</a></li>
            </ul>
        </nav>
    </div>