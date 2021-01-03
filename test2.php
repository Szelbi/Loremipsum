<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">

    <style>

    </style>


</head>

<header>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/navbar/navbar.php') ?>
</header>

<body>
<main class="main border-orange">

    <h1>Custom Range Slider</h1>

    <div class="slidecontainer">
        <div>
            <input type="range" class="slider" id="hsl-h" min="1" max="360" value="180"  aria-label="hue" >
            <input type="text" class="result" id="hsl-h-result" aria-label="hue">
        </div>
    </div>
</main>
</body>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/footer.html') ?>
</footer>
</html>