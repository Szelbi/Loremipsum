<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Akcje jQuery</title>
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <script src="/loremipsum/js/jquery-3.5.1.min.js"></script>
    <script src="/loremipsum/js/bootstrap.min.js"></script>
    <script src="/loremipsum/js/customScripts.js"></script>



    <style>
        .container {
            border: 1px solid;
            background: rgba(255, 160, 200, 0.5);
        }

        .card {
            border: 1px solid;
            background: rgba(200, 190, 250, 0.5);
        }

    </style>
</head>


<header>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/loremipsum/navbar.php') ?>
</header>

<body>
<main class="main">

    <div class="container col-md-8">
        <button id="show">Pokaż</button>
        <button id="hide">Ukryj!</button>

        <h1>Akcje jQuery</h1>
        <div class="card" style="display: none">
            <div>
                <h2>Tekst</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam aliquid beatae deleniti deserunt
                    distinctio eius enim exercitationem explicabo facere id quam, quas quis quisquam, repellendus. A
                    adipisci, asperiores aut dicta dolore ducimus eum iure iusto nesciunt odio optio, pariatur qui
                    quisquam
                    rem repellat sint soluta tempore, velit vero voluptates?</p>
            </div>
        </div>
        <p><a href="index.php">Powrót do strony głównej</a></p>
    </div>
</main>

</body>

<script>
    $(function () {
        $("#nav-placeholder").load("/loremipsum/navbar.php");
    });
</script>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/loremipsum/footer.html') ?>
</footer>

</html>