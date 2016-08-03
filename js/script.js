var down = false;
$( document ).ready(function(){
	var i=0;
    $(".header").click(
        function(){
            i++;
			if(i == 33){
				$(".header").css("background", "url(../images/logo2.png) no-repeat");
				$(".header").css("background-color", "#fff");
				$("body").css("background", "url(../images/back2.png)");
				i=0;
			} else {
				$(".header").removeAttr("style");
				$("body").removeAttr("style");
			}
        }
    );
});

$(document).ready(function(){
	$(".logo").click(function(){
		window.location = "index.php";
	});

	$(".menu-link").off("click").on("click", function(){
		if(down){
			var char = String.fromCharCode(9660);
			$(".menu-link").text("Menu" + char);
			down = false;
		}else{
			var char = String.fromCharCode(9650);
			$(".menu-link").text("Menu" + char);
			down = true;
		}
		$(".menu-mobile").slideToggle("swing");
	});
});
