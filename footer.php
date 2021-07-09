<?php?>
	</div><!--close .container-->
</div><!-- close #main .wrapper -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/jquery.colorbox-min.js"></script>

<script>
$(document).ready(function(){
	//Mobile accordion
    jQuery('.menu-link').click(function(e) {
    	console.log('click it');
        e.preventDefault();
        jQuery('.wrapper .navbar-inverse').stop(true,true).toggleClass('active', 800, 'easeOutBack');
       	jQuery('.menu-link').stop(true,true).toggleClass('active', 800, 'easeOutBack');
        jQuery('#menu').stop(true,true).toggleClass('active', 800, 'easeOutBack');
        
    });
	//portfolio examples lightbox
	$('.effectHover a.lightboxFire').click(function() {
		//display data in lightbox
		var left = $(this).parent().children('.lightboxData').children('.text').html();
		var right = $(this).parent().children('.lightboxData').children('.img').html();
		$(left).prependTo('#inline_content');
		$(right).appendTo('#inline_content');
		
		//fire lightbox
		showExample();
	});
	//forms
	$("#form .input-bg").hover(function() {
		$(this).addClass("active");
	}, function() {
		$(this).removeClass("active");
	});
	$("#form input").focus(function() {
		$(this).parent().addClass("active");
	});
	$("#form input").blur(function() {
		$("#form .input-bg").removeClass("active");
	});
	$("#form .message-bg").hover(function() {
		$(this).addClass("active");
	}, function() {
		$(this).removeClass("active");
	});
	$("#form textarea").focus(function() {
		$(this).parent().addClass("active");
	});
	$("#form textarea").blur(function() {
		$("#form .message-bg").removeClass("active");
	});
});

function showExample(){	
	$(".results").colorbox({
		inline:true,
		open:true,
		scrolling:true,
		fixed: true,
		top: "20px",
		innerWidth: "90%",
		onOpen:function(){
			var closeBox = "<i class='fa fa-times'></i>";
			$('#cboxClose').empty().append(closeBox);
			$('.container').scrollTop('0');
		},
		onClosed:function(){
			// add unique class
			$('#inline_content').empty();
		}
	});
}
</script>
</body>
</html>
