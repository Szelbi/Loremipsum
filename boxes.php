<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Pudełka elementów</title>

    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <script src="/loremipsum/js/jquery-3.5.1.min.js"></script>
    <script src="/loremipsum/js/bootstrap.min.js"></script>
    <script src="/loremipsum/js/customScripts.js"></script>

    <style>

        .center-box {
            width: 70%;
            margin: 0 auto;
        }

        .box {
            margin: 10px auto;
            padding: 20px;
            min-width: 400px;
            max-width: 1200px;
            min-height: 80px;
            max-height: 150px;
            background-color: hsla(190, 80%, 50%, 0.05);
            border: 1px solid hsla(190, 80%, 50%, 1);
        }

        .box1 {
            overflow-y: scroll;
        }

        .box2 {
            overflow: hidden;
        }

        .box3 {
            margin: 30px;
            overflow: hidden;
        }

    </style>

</head>

<header>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/navbar/navbar.php') ?>
</header>


<body>

<main class="main" id="main">
    <div class="center-box border-orange">

        <div class="box box1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur cupiditate
            deserunt nihil nisi optio porro quasi vel vero voluptate. A aut doloribus error fuga illum ipsa, ipsum iusto
            libero, optio possimus quos sunt. <strong>Aliquam aspernatur</strong>, beatae dignissimos dolore dolores
            enim eos fugiat
            inventore laborum rerum! Assumenda cum delectus ea eos esse eum impedit nam numquam quidem, recusandae
            repellat soluta sunt, ut. Consequatur in modi sapiente? Animi asperiores assumenda consectetur consequuntur
            debitis dignissimos dolorum eaque eius error et exercitationem, facere illum ipsa, laboriosam maiores
            molestiae molestias mollitia nemo nisi perspiciatis quam quas quisquam quod rerum saepe sunt tempore unde
            velit vero voluptatum. Alias, aliquam animi architecto asperiores consectetur delectus distinctio dolor
            dolores ea error esse excepturi expedita explicabo facere id illum in incidunt iusto laborum molestiae neque
            numquam obcaecati provident quam ratione repellat sapiente sed similique unde veniam vero vitae voluptatibus
            voluptatum. Animi cum deleniti doloribus incidunt laudantium nihil nulla, quas? Dolore, inventore, unde?
            Architecto aut error harum labore odit pariatur quibusdam sint, ullam veritatis voluptatum? Ad aut dicta,
            esse eum id impedit iste maxime mollitia nihil placeat qui quidem recusandae saepe sapiente similique,
            temporibus ut veritatis.
        </div>
        <div class="box box2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur cupiditate
            deserunt nihil nisi optio porro quasi vel vero voluptate. A aut doloribus error fuga illum ipsa, ipsum iusto
            libero, optio possimus quos sunt. <strong>Aliquam aspernatur</strong>, beatae dignissimos dolore dolores
            enim eos fugiat
            inventore laborum rerum! Assumenda cum delectus ea eos esse eum impedit nam numquam quidem, recusandae
            repellat soluta sunt, ut. Consequatur in modi sapiente? Animi asperiores assumenda consectetur consequuntur
            debitis dignissimos dolorum eaque eius error et exercitationem, facere illum ipsa, laboriosam maiores
            molestiae molestias mollitia nemo nisi perspiciatis quam quas quisquam quod rerum saepe sunt tempore unde
            velit vero voluptatum. Alias, aliquam animi architecto asperiores consectetur delectus distinctio dolor
            dolores ea error esse excepturi expedita explicabo facere id illum in incidunt iusto laborum molestiae neque
            numquam obcaecati provident quam ratione repellat sapiente sed similique unde veniam vero vitae voluptatibus
            voluptatum. Animi cum deleniti doloribus incidunt laudantium nihil nulla, quas? Dolore, inventore, unde?
            Architecto aut error harum labore odit pariatur quibusdam sint, ullam veritatis voluptatum? Ad aut dicta,
            esse eum id impedit iste maxime mollitia nihil placeat qui quidem recusandae saepe sapiente similique,
            temporibus ut veritatis.
        </div>
        <div class="border-orange box " style="display:flex;">
            <!--            <strong>Dawid Gos</strong> 2020. All right reserved.-->
            <p style="border: 1px solid black; margin: auto">
                <strong>Dawid Gos</strong> 2020. All right reserved.
            </p>

        </div>
    </div>

</main>

</body>


<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/footer.html') ?>
</footer>

</html>