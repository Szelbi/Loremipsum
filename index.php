<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lorem Ipsum</title>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <script src="/loremipsum/js/jquery-3.5.1.min.js"></script>
    <script src="/loremipsum/js/bootstrap.min.js"></script>
    <script src="/loremipsum/js/customScripts.js"></script>
</head>
<body>

<header>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/loremipsum/navbar/navbar.php') ?>
</header>


<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <p><a href="index.php">Powrót do strony głównej</a></p>
            <h1 class="display-3">Strona główna</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae blanditiis nisi optio pariatur tempore voluptatum! Accusamus at dolorem dolorum ex explicabo fuga necessitatibus quibusdam quo saepe voluptates. Assumenda culpa cumque, dicta ducimus ea eos est et ex hic impedit, incidunt, laborum laudantium minus nemo perferendis quae quaerat quam quas quidem reiciendis repellat sed tempora tempore voluptates voluptatum. Aliquid commodi eius eos et illum inventore, necessitatibus odit, placeat provident quas repellat sequi, temporibus. Accusamus ex hic illum molestias odio reiciendis. Accusantium, aut corporis delectus dignissimos earum enim est id, iure magni molestiae natus nobis non nostrum quaerat quam rem reprehenderit voluptates.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Podstawy</h2>
                <p>Formatowanie tekstu, listowanie, wklejanie obrazów, tabele, formularze i inne</p>
                <p><a class="btn btn-primary" href="basics/basic.php" role="button">Przejdź »</a></p>
            </div>
            <div class="col-md-4">
                <h2>PDF</h2>
                <p>Odołwnie do strony z możliwością budowania wydruku PDF na kartce A4 </p>
                <p><a class="btn btn-primary" href="a4pages/wydruk.php" role="button">Przejdź »</a></p>
            </div>
            <div class="col-md-4">
                <h2>About</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                    ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-primary" href="about.php" role="button">View details »</a></p>
            </div>
            <div class="col-md-4">
                <h2>Ajcke Jquery</h2>
                <p>jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery jQuery </p>
                <p><a class="btn btn-secondary" href="actions.php" role="button">Przejdź »</a></p>
            </div>
            <div class="col-md-4">
                <h2>PDF</h2>
                <p>Odołwnie do strony z możliwością budowania wydruku PDF na kartce A4 </p>
                <p><a class="btn btn-secondary" href="a4pages/wydruk.php" role="button">Przejdź »</a></p>
            </div>

        </div>

        <hr>

    </div>

</main>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/loremipsum/footer.html') ?>
</footer>


</body>
</html>