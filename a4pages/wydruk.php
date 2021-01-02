<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strony A4</title>
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <script src="/loremipsum/js/jquery-3.5.1.min.js"></script>
    <script src="/loremipsum/js/bootstrap.min.js"></script>
    <script src="/loremipsum/js/customScripts.js"></script>


    <style>
        body {
            background: #ccc;
        }

        page {
            background: #fff;
            display: block;
            margin: 30px auto 150px;

            /*margin-bottom: 3cm;*/
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;
        }

        page[size="A3"] {
            width: 29.7cm;
            height: 42cm;
        }

        page[size="A3"][layout="landscape"] {
            width: 42cm;
            height: 29.7cm;
        }

        page[size="A5"] {
            width: 14.8cm;
            height: 21cm;
        }

        page[size="A5"][layout="landscape"] {
            width: 21cm;
            height: 14.8cm;
        }

        @media print {
            body, page {
                margin: 0;
                box-shadow: 0;
            }
        }

        .content {
            padding: 50px
        }

        object {
            height: 100%;
            width: 100%;
        }

        h1, h2, h3, h4 {
            text-align: center;
        }
    </style>

</head>

<header>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/loremipsum/navbar/navbar.php') ?>
</header>

<body>

<main class="main">
<div>
	<?php

	$data = "/loremipsum/files/lorem.txt";
	for ($i = 5; $i >= 3; $i--) {
		echo '<h3>A' . $i . '</h3>';

		$layouts = [NULL, 'layout="landscape"'];

		foreach ($layouts as $layout) {
			echo '  <page size="A' . $i . '" ' . $layout . '>
                    <div class="content" style="height:100%;">
                        <object data="/loremipsum/files/lorem.txt"></object>
                    </div>
                </page>';
		}
	}

	?>


</div>
</main>

</body>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/loremipsum/footer.html') ?>
</footer>


</html>

