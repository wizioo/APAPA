jQuery(document).ready(function($) {
	// Event handler on hamburger-icon
	$('.mobile-menu').click(function() {
		// Toggle active class on nav and
		$(this).closest('nav').toggleClass('active');
		$(this).find('.fa').toggleClass('fa-bars').toggleClass('fa-times');
	});
});