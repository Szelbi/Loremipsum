<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Pudełka elementów</title>

    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <script src="/loremipsum/js/jquery-3.5.1.min.js"></script>
    <script src="/loremipsum/js/bootstrap.min.js"></script>
    <!--    <script src="/loremipsum/js/customScripts.js"></script>-->

    <script>
        $(function () {
            $("#nav-placeholder").load("/loremipsum/navbar.html");
        });
    </script>

    <style>

        /*.mr-auto3 {*/
        /*    margin-right: auto !important;*/
        /*}*/

        /*.nav-link {*/
        /*    display: block;*/
        /*    padding: 0.5rem 0.5rem;*/
        /*}*/

        /*.navbar-dark .navbar-nav .nav-link {*/
        /*    color: rgba(255, 255, 255, 0.5);*/
        /*}*/

        /*.navbar-dark .navbar-nav .nav-link:hover,*/
        /*.navbar-dark .navbar-nav .nav-link:focus {*/
        /*    text-decoration: none;*/
        /*    color: rgba(255, 255, 255, 0.75);*/
        /*}*/


        /*.navbar-collapse {*/
        /*    flex-basis: 100%;*/
        /*    flex-grow: 1;*/
        /*    align-items: center;*/
        /*    display: flex !important;*/
        /*}*/

        /*@media (min-width: 768px) {*/
        /*    .navbar {*/
        /*        position: relative;*/
        /*        display: -ms-flexbox;*/
        /*        display: flex;*/
        /*        -ms-flex-wrap: wrap;*/
        /*        flex-wrap: wrap;*/
        /*        -ms-flex-align: center;*/
        /*        align-items: center;*/
        /*        -ms-flex-pack: justify;*/
        /*        justify-content: space-between;*/
        /*        padding: .5rem 1rem;*/
        /*    }*/

        /*    .navbar-expand-md {*/
        /*        -ms-flex-flow: row nowrap;*/
        /*        flex-flow: row nowrap;*/
        /*        -ms-flex-pack: start;*/
        /*        justify-content: flex-start;*/
        /*    }*/

        /*    .navbar-expand-md .navbar-nav {*/
        /*        -ms-flex-direction: row;*/
        /*        flex-direction: row;*/
        /*    }*/
        /*}*/

        .btn-outline-success {
        <?php
		$color = rand(0,360);
		echo "color: hsl($color, 100%, 50%);
			  border-color: hsl($color, 100%, 50%)";
		?>
        }

        .center-box {
            width: 70%;
            margin: 0 auto;
        }

        .box {
            margin: 10px auto;
            padding: 20px;
            min-width: 400px;
            max-width: 1200px;
            min-height: 200px;
            max-height: 300px;
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
    <!--    <div id="nav-placeholder">-->
    <!--    </div>-->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="navbar">
        <a class="navbar-brand" href="/loremipsum/index.html">Home</a>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li>
                    <a class="nav-link" href="/loremipsum/about.html">About</a>
                </li>
                <li>
                    <a class="nav-link" href="/loremipsum/basics/basic.php">Basics</a>
                </li>
                <li>
                    <a class="nav-link" href="/loremipsum/actions.html">Actions</a>
                </li>
                <li>
                    <a class="nav-link" href="/loremipsum/a4pages/wydruk.php">A4 Pages</a>
                </li>
                <li>
                    <a class="nav-link" href="/loremipsum/colors.php">Kolorki</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Example templates</a>
                    <div class="nav-item dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/loremipsum/bootstrap_test.html">Bootstrap simple template</a>
                        <a class="dropdown-item" href="#">Empty_1</a>
                        <a class="dropdown-item" href="#">Empty_2</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
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
        <div class="box">
            <div class="box3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur blanditiis, dolore ducimus est
                minima non possimus quam quidem quisquam ullam.
            </div>
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
    <?php include($_SERVER['DOCUMENT_ROOT'].'/loremipsum/footer.html') ?>
</footer>

</html>