<script src="/loremipsum/navbar/navbar.js"></script>
<link rel="stylesheet" href="/loremipsum/navbar/navbar.css">

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
                <a class="nav-link" href="/loremipsum/basics/basic.php">Basics</a>
            </li>
            <li>
                <a class="nav-elem" href="/loremipsum/a4pages/wydruk.php">A4 Pages</a>
            </li>
            <li>
                <a class="nav-elem" href="/loremipsum/boxes.php">Boxes</a>
            </li>
            <li>
                <div class="nav-elem">
                    <button class="dropbtn collapsible">Colors</button>
                    <div class="dropdown-content">
                        <a href="/loremipsum/colors/colors_scale.php">Color scale</a>
                        <a href="/loremipsum/colors/color_picker.php">Color picker</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="nav-elem">
                    <button class="dropbtn collapsible">Example templates</button>
                    <div class="dropdown-content">
                        <a href="/loremipsum/bootstrap_test.html">Bootstrap simple template</a>
                        <a href="#">Empty_1</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="nav-elem">
                    <button class="dropbtn collapsible">PHP samples</button>
                    <div class="dropdown-content">
                        <a href="/loremipsum/about.php">About</a>
                        <a href="/loremipsum/actions.php">Actions</a>
                        <a href="/loremipsum/test2.php">Test</a>
                        <a href="/loremipsum/php_globals.php">PHP $GLOBALS</a>
                        <a href="#">Empty_1</a>
                    </div>
                </div>
            </li>

        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-rand-color" type="submit">Search</button>
        </form>
    </div>
</nav>


<script src="/loremipsum/navbar/navbar.js"></script>
