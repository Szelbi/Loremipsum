<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">

    <style>
        pre {
            white-space: pre-wrap;       /* Since CSS 2.1 */
            white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
            white-space: -o-pre-wrap;    /* Opera 7 */
            word-wrap: break-word;       /* Internet Explorer 5.5+ */
        }
    </style>
</head>

<header>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/navbar.php') ?>
</header>

<body>

<main class="main ">

    <div class="container border-orange">

		<?php
		echo "<pre>";
		print_r($GLOBALS);
		echo "</pre>";
		?>

    </div>

    <div class="container border-orange">

		<?php
		function alert($a){
			echo "<script>alert('".$a."');</script>";

		}

		function console_log($output, $with_script_tags = true) {
			$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
				');';
			if ($with_script_tags) {
				$js_code = '<script>' . $js_code . '</script>';
			}
			echo $js_code;
		}

//		echo "<pre>";
//		//var_dump($GLOBALS);
//		foreach (array_keys($GLOBALS) as $global){
//		    echo '<div class="container border-orange">
//                    '.print_r(array($global => $GLOBALS[$global])).'
//
//            </div>';
//        }
//
//		echo "</pre>";
		?>

    </div>


</main>

</body>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/footer.html') ?>
</footer>
</html>