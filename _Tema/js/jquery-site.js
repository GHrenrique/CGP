function sitedinamico() {

	jQuery(function () {
		jQuery('[data-toggle="tooltip"]').tooltip()
	})

	jQuery(function () {
		jQuery('[data-toggle="popover"]').popover()
	})

}


jQuery( document ).ready(function() {
	sitedinamico();
});

jQuery( window ).resize(function() {
	sitedinamico();
});
