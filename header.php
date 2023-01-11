<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="спорт, новини, спорт новини, спортивні новини" >
    <meta name="description" content="Спортивні новини України">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel='stylesheet' href='css/style.css'>
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;700&display=swap" rel="stylesheet"> 
</head>
<body>
<header>
    <nav>
        <a href="."><h1>НОВИНИ СПОРТУ</h1></a>
        <div>
            <?php 
             if ($_SERVER['REQUEST_URI'] === "/") {
                echo '<a href="." style="color:red;">Головна</a>';
             } else {
                echo '<a href=".">Головна</a>';
             }
            ?>
            <?php 
             if ($_SERVER['REQUEST_URI'] === "/categories") {
                echo '<a href="categories" style="color:red;">Категорії</a>';
             } else {
                echo '<a href="categories">Категорії</a>';
             }
            ?>
            <?php 
             if ($_SERVER['REQUEST_URI'] === "/gallery") {
                echo '<a href="gallery" style="color:red;">Галерея</a>';
             } else {
                echo '<a href="gallery">Галерея</a>';
             }
            ?>
			<?php 
             if ($_SERVER['REQUEST_URI'] === "/ukraine") {
                echo '<a href="ukraine" style="color:red;">UA</a>';
             } else {
                echo '<a href="ukraine">UA</a>';
             }
            ?>
            <?php 
             if ($_SERVER['REQUEST_URI'] === "/contact") {
                echo '<a href="contact" style="color:red;">Звязок з нами</a>';
             } else {
                echo '<a href="contact">Звязок з нами</a>';
             }
            ?>
        </div>
        <h1 class="UA">UA</h1>
    </nav>
</header>