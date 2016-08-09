<?php

function printHead($additional= ""){
	$html=<<<HTML
		<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<meta name="description" content="Triangle Fraternity Wisconsin Chapter">
					<meta name="author" content="Xiao He">

					<title>Triangle Fraternity - UW Madison</title>
					<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

					<!-- Bootstrap Core CSS -->
					<link href="res/bootstrap/css/bootstrap.min.css" rel="stylesheet">

					<!-- Custom Fonts -->
					<link href="res/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

					<!-- Theme CSS -->
					<link href="css/main.css" rel="stylesheet">
HTML;
		$html.=$additional;
		$html.=<<<HTML
					<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
					<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
					<!--[if lt IE 9]>
							<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
							<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
					<![endif]-->

			</head>
HTML;

	  print $html;
}

function printFooter(){
	print '<footer>
        <div class="container text-center">
            <p>Copyright &copy; 2016 Triangle Fraternity - Univeristy of Wisconsin, Madison</p>
        </div>
    </footer>'
		;
}

?>
