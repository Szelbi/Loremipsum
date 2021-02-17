<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">

    <style>
        .gallery{
            width: 70%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-row-gap: 10px;
            grid-column-gap: 10px;
        }
        .gallery img{
            width: 100%;
        }.gallery img:hover{
            box-shadow: 0 0 10px 5px #5555;
        }
    </style>


</head>

<header>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/navbar/navbar.php') ?>
</header>

<body>
<main class="main">

    <h1>Custom Range Slider</h1>

    <div class="gallery border-orange">

        <?php

        for($i=0; $i < 40; $i++) {
            echo '<img src = "https://picsum.photos/400/300?random='.$i .'" >';
        }
        ?>
    </div>
</main>
</body>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/footer.html') ?>
</footer>
</html>