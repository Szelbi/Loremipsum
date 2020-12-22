<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kolorki</title>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <script src="/loremipsum/js/jquery-3.5.1.min.js"></script>
    <script src="/loremipsum/js/bootstrap.min.js"></script>

    <style>
        color-div {
            height: 30px;
        }

        color-row {
            float: left;
        }

        .link {
            text-align: center;
            font-size: 28px;
            padding-bottom: 20px;
        }
    </style>
</head>


<header>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/loremipsum/navbar.html') ?>
</header>


<body>
<main class="main">
    <div class="container col-md-8">
        <div class="link">
            <a href="https://www.w3schools.com/cssref/func_hsl.asp">Kolorki HSL</a>
        </div>
		<?php

		$lights = array(20, 40, 60, 80);
		foreach ($lights as $light) {
			echo '<div class="col-md-3 color-row" style="float:left">
                  <h4>' . $light . '% jasności</h4>';

			$colors = range(0, 360, 10);
			foreach ($colors as $color) {
				echo '<div class="color-div" style="background: hsl(' . $color . ',100%, ' . $light . '%)">' . $color . '</div>';

			}
			echo '</div>';
		}
		?>
    </div>
</main>

</body>

<script>
    $(function () {
        $("#nav-placeholder").load("navbar.html");
    });
</script>
</html>