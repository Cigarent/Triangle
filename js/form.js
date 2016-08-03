$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });

});

$(document).ready(function(){
   var $form = $("#form");
   $form.submit(function(){
      $.post($(this).attr('action'), $(this).serialize(), function(response){},'json');
		document.getElementById("overlay").style.display="block";
		document.getElementById("form").style.display="none";
		return false;
   });
});

$(document).ready(function(){
	$("#back").click(function(){
		document.getElementById("overlay").style.display="none";
		document.getElementById("form").style.display="block";		
		document.getElementById("form").reset();
	});
});
