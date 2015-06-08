(function( $ ) {
	var $ahSearchModalForm 	= $('#ahSearchModalForm'),
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

		var $div = '',
			$icon;

		// $.get( AH_JS.api_url + '/posts?type[]=page&type[]=post&type[]=entreprise&filter[s]=' + $(this).val(), function( data ) {
		$.getJSON( AH_JS.ajax_url + '?action=ah_search&s=' + $(this).val(), {},  function( data ) {

			if ( data.length > 0 ) {
				$.each( data, function(i, el)
				{
					switch( el.type ) {
						case 'entreprise':
							$icon = 'briefcase';
							break;
						case 'post':
							$icon = 'pushpin';
							break;
						case 'page':
							$icon = 'align-justify';
							break;
					}

					$div +=  '<h4><a href="' + el.url + '"><span class="glyphicon glyphicon-' + $icon + '"></span> ' + el.title + '</a></h4>';
				});

				$ahSearchResults.html( $div ).show();

				$div = '';

			} else {

				$ahSearchResults.html( '<h4>Pas de résultats! Désolé.</h4>' );
			}

		});

	});

	var pvc 	= $('.post-view-count'),
		post_id = pvc.data('id');

	$.get( AH_JS.ajax_url + '?action=post_view_count&post_id=' + post_id, function( data )
	{
		pvc.hide().text( data ).fadeIn('slow');
	});

})( jQuery );