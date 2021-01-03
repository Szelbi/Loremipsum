<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color picker</title>
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <link rel="stylesheet" href="/loremipsum/colors/color_picker.css">
</head>

<header>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/navbar/navbar.php') ?>
</header>

<body>
<main class="main">


    <div class="container">
        <div class="row" style="height: 500px; background-color: #ddd">
            <div class="col-md-4 border-orange" id="outer">
                <h4>Result</h4>
                <div class="result-box center"></div>
            </div>
            <div class="col-md-8 border-orange">
                <h4>Sliders</h4>
                <div class="picker">
                    <p class="label" title="Hue">H</p>
                    <input type="range" class="slider" id="hsl-h" min="1" max="360" value="180" aria-label="hue">
                    <input type="text" class="result" id="hsl-h-result" aria-label="hue">
                </div>
                <p class="label" title="Saturation">S</p>
                <div class="picker">
                    <input type="range" class="slider" id="hsl-h" min="1" max="360" value="180" aria-label="hue">
                    <input type="text" class="result" id="hsl-h-result" aria-label="hue">
                </div>
                <div class="picker">
                    <p class="label" title="Lightness">L</p>
                    <input type="range" class="slider" id="hsl-h" min="1" max="360" value="180" aria-label="hue">
                    <input type="text" class="result" id="hsl-h-result" aria-label="hue">
                </div>
            </div>
        </div>
    </div>
</main>
</body>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/footer.html') ?>
</footer>
</html>

<script src="/loremipsum/colors/color_picker.js"></script>
