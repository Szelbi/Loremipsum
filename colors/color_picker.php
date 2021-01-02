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
        <div class="row" style="height: 500px">
            <div class="col-md-4 border-orange" id="outer">
                <h4>Result</h4>
                <div class="result-box center"></div>
            </div>
            <div class="col-md-8 border-orange">
                <h4>Column 2</h4>
            </div>
        </div>
    </div>
</main>
</body>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/footer.html') ?>
</footer>
</html>