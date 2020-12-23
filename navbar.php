<style>
	.btn-outline-success {
		<?php
		$color = rand(0,360);
		echo "color: hsl($color, 100%, 50%);
		border-color: hsl($color, 100%, 50%)";
		?>
	}
</style>

<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="navbar">
	<a class="navbar-brand" href="/loremipsum/index.php">Home</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
			aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="/loremipsum/about.php">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/loremipsum/basics/basic.php">Basics</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/loremipsum/actions.php">Actions</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/loremipsum/a4pages/wydruk.php">A4 Pages</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/loremipsum/colors.php">Kolorki</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/loremipsum/basics/boxes.php">Boxes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/loremipsum/test2.php">Test</a>
			</li>
			<li class="nav-item dropdown" >
				<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Example templates
				</a>
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


