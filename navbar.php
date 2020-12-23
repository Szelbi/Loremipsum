<!--<link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">-->

<style>
    .btn-rand-color {
    <?php
	$array = range(0,360,30);
	$color = array_rand($array);
	echo "color: hsl($array[$color], 100%, 50%);
	border-color: hsl($array[$color], 100%, 50%)";
	?>
    }
</style>

<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="navbar">
    <a class="navbar-brand" href="/loremipsum/index.php">Home</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li>
                <a class="nav-link" href="/loremipsum/about.php">About</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/basics/basic.php">Basics</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/actions.php">Actions</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/a4pages/wydruk.php">A4 Pages</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/colors.php">Kolorki</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/basics/boxes.php">Boxes</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/test2.php">Test</a>
            </li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    Example templates
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="/loremipsum/bootstrap_test.html">Bootstrap simple template</a>
                    <a class="dropdown-item" href="#">Empty_1</a>
                    <a class="dropdown-item" href="#">Empty_2</a>
                </div>
            </li>

        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-rand-color" type="submit">Search</button>
        </form>
    </div>
</nav>


