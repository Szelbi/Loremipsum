<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>

    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">

    <script>
        function myFunction() {
            document.getElementById("output").innerHTML += document.getElementById("output").innerHTML;
        }
    </script>


    <style>

    </style>
</head>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/navbar.php') ?>
</footer>

<body>
<main class="main ">
<div class="content border-orange">

    <button type="button" id="button" onclick="myFunction()">Duplicate</button>


    <p id="output">Lore ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis deserunt dignissimos dolore dolorum ea fuga itaque iusto libero magni nam, nostrum obcaecati, quaerat quidem quis soluta unde?</p>
</div>
</main>

</body>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/footer.html') ?>
</footer>
</html>