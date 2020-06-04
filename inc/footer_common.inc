<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script>
	function toggleMobileMenu() 
	{
		var $mobileMenu = $('#mobile-main-menu');	
		$mobileMenu.slideToggle('fast');
	}

	$(document).ready(function() {
		$('#mobile-menu-button').on('click', toggleMobileMenu);
	});
</script>

<script src="js/principal.js"></script>

<script src="js/jquery-ui.js"></script>
<script src="js/jquery.ui.draggable.js"></script>
<script src="js/jquery.ui.effect-explode.js"></script>