<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	

<!-- search-bar -->
<script src="js/main.js"></script>
<!-- //search-bar -->

<?php /*if ( $_global['page_name'] == 'home' ) : ?>
	<!-- Countdown-Timer-JavaScript -->
	<script src="js/simplyCountdown.js"></script>
	<!-- easy to customize -->
	<script>
		$('#simply-countdown-losange').simplyCountdown({
			year: 2020,
			month: 1,
			day: 06
		});
	</script>*/
 /*endif*/ ?>
<!-- //Countdown-Timer-JavaScript -->

<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function () {
		/*
		 var defaults = {
		 containerID: 'toTop', // fading element id
		 containerHoverID: 'toTopHover', // fading element hover id
		 scrollSpeed: 1200,
		 easingType: 'linear' 
		 };
		 */

		$().UItoTop({easingType: 'easeOutQuart'});

	});
</script>
<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->