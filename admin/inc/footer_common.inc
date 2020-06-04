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