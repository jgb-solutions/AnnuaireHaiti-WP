(function( $ ) {
	var $sectionSearch 		= $('section.search'),
		$ahSearchModalForm 	= $('#ahSearchModalForm'),
		$input 				= $ahSearchModalForm.find('input#s'),
		$ahSearchResults	= $('#ahSearchResults');
		$ahSearchModal 		= $('#ahSearchModal');

	$('li.searchAnchor a').on('click', function( e ) {
		e.preventDefault();
		$ahSearchModal
			.modal()
			.on('shown.bs.modal', function() {
				ahSearchS = $(this).find('input#s');
				ahSearchS.focus();
			});
	});

	$input.on('keyup', function() {

		var $div = '';

		$.get( AH_JS.api_url + '/posts?type[]=page&type[]=post&type[]=entreprise&filter[s]=' + $(this).val(), function( data ) {

			if ( data.length > 0 ) {
				$.each( data, function(i, el) {
					$div +=  '<h4><a href="' + el.link + '">' + ' ' + el.title + '</a></h4>';
				});

				$ahSearchResults.html( $div ).show();

				$div = '';

			} else {

				$ahSearchResults.html( '<h4>Pas de résultats! Désolé.</h4>' );

			}

		});

	});

})( jQuery );