<!--
	function tran(b){
		
		var all = document.getElementsByClassName("main");
		for (var i=0; i<all.length; i++) {
			all[i].style.transform = "rotateY(90deg)";
		}
		var v = setInterval(function(){reset(b, v)}, 1000);
	}
	
	function reset(b, v){
		document.getElementById(b).style.transform = "rotateY(0deg)";
		clearInterval(v);
	}
-->