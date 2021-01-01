<link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
<link rel="stylesheet" href="/loremipsum/navbar/navbar.css">
<script src="/loremipsum/navbar/navbar.js"></script>
<script src="/loremipsum/js/jquery-3.5.1.min.js"></script>
<!--<script src="/loremipsum/js/bootstrap.min.js"></script>-->
<!--<script src="/loremipsum/js/customScripts.js"></script>-->

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
                <a class="nav-link" href="/loremipsum/a4pages/wydruk.php">A4 Pages</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/colors.php">Kolorki</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/basics/boxes.php">Boxes</a>
            </li>
            <li>
                <a class="nav-link" href="/loremipsum/basics/boxes.php">Boxes</a>
            </li>
            <li>
                <div class="nav-link dropdown">
                    <button id="1" onClick="dropdownFunction(this.id)" class="dropbtn">Dropdown</button>
                    <div id="myDropdown1" class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
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
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    Simples subpages
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown02">
                    <a class="dropdown-item" href="/loremipsum/about.php">About</a>
                    <a class="dropdown-item" href="/loremipsum/actions.php">Actions</a>
                    <a class="dropdown-item" href="/loremipsum/test2.php">Test</a>
                    <a class="dropdown-item" href="/loremipsum/php_globals.php">PHP $GLOBALS</a>
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


<div class="navbar">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <div class="dropdown">
        <button class="dropbtn" onClick="dropdownFunction(this.id)">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown2">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
</div>



<button id="1" onclick="reply_click(this.id)">B1</button>
<button id="2" onClick="reply_click(this.id)">B2</button>
<button id="3" onClick="reply_click(this.id)">B3</button>
<button id="4" onClick="reply_click2()">B4</button>

<script type="text/javascript">
    function reply_click(clicked_id)
    {
        alert(clicked_id);
    }


    function reply_click2()
    {
        var idClicked = this.id;
        alert(idClicked);
    }

    function dropdownFunction(elemtID) {
        alert(elemtID);
        alert(this.id);
        document.getElementById(elemtID).classList.toggle("show");
    }

</script>