<?php

function printNav($home){

$hrefList=array("index.php","about.php","rush.php","contact.php");
$hrefActive =array("","","","");

if($home==0){
	$hrefList=array("#page-top","#about","#rush","#contact");
}
elseif ($home<4){
	$hrefActive[$home]="class=active";
}

$html=<<<HTML
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container">
					<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
									Menu <i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand page-scroll" href="{$hrefList[0]}">
									<img src="images/triangle.jpg" height="50">
							</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
							<ul class="nav navbar-nav">
									<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
									<li class="hidden"><a href="#page-top"></a>
									</li>
									<li {$hrefActive[1]}>
											<a class="page-scroll" href="{$hrefList[1]}">About</a>
									</li>
									<li {$hrefActive[2]}>
											<a class="page-scroll" href="{$hrefList[2]}">Rush</a>
									</li>
									<li {$hrefActive[3]}>
											<a class="page-scroll" href="{$hrefList[3]}">Contact</a>
									</li>
							</ul>
					</div>
					<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
	</nav>
HTML;
print $html;
}
?>
