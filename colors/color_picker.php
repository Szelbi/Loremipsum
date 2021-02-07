<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color picker</title>
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <link rel="stylesheet" href="/loremipsum/colors/color_picker.css">
    <style id="extra-css" type="text/css"></style>
</head>

<header>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/navbar/navbar.php') ?>
</header>

<body>
<main class="main">


    <div class="container border-orange">
        <div class="row" style="height: 360px;">
            <div class="col-md-4 " id="outer">
                <div class="main-box center" id="main-box"></div>
            </div>
            <div class="col-md-8 ">
                <h4>Sliders</h4>
                <div class="picker">
                    <p class="label" title="Hue">H</p>
                    <input type="range" class="slider" id="hsl-h" min="0" max="360" value="180" aria-label="hue">
                    <input type="text" class="result gray" id="hsl-h-result" aria-label="hue">
                </div>
                <div class="picker">
                    <p class="label" title="Saturation">S</p>
                    <input type="range" class="slider" id="hsl-s" min="0" max="100" value="100" aria-label="hue">
                    <input type="text" class="result gray" id="hsl-s-result" aria-label="saturation">
                </div>
                <div class="picker">
                    <p class="label" title="Lightness">L</p>
                    <input type="range" class="slider" id="hsl-l" min="0" max="100" value="50" aria-label="hue">
                    <input type="text" class="result gray" id="hsl-l-result" aria-label="lightness">
                </div>
                <div class="picker">
                    <p class="label" title="Alpha">A</p>
                    <input type="range" class="slider" id="hsl-a" min="0" max="1" value="1" step="0.01" aria-label="hue">
                    <input type="text" class="result gray" id="hsl-a-result" aria-label="alpha">
                </div>
                <div class="output-panel">
                    <input type="text" id="output-hsla" class="output gray"  aria-label="output-hsla" disabled>
                    <input type="text" id="output-rgba" class="output gray"  aria-label="output-rgba" disabled>
                    <input type="text" id="output-hex" class="output gray" aria-label="output-hex" disabled>
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

<script type="module" src="/loremipsum/colors/color_picker.js"></script>
