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
/*
* Counting views on Enterprise post types
*/
	var pvc 	= $('.post-view-count'),
		post_id = pvc.data('id');

	$.get( AH_JS.ajax_url + '?action=post_view_count&post_id=' + post_id, function( data )
	{
		pvc.hide().text( data ).fadeIn('slow');
	});

	$('a[href=#imageModal]').on('click', function( e ) {
		$this = $(this);
		e.preventDefault();
		$('#imageModal')
			.modal()
			.on('shown.bs.modal', function () {
				$(this).find('.modal-body').html( '<img src="' + $this.find('img').attr('src') + '">' );
    			$(this).find('.modal-dialog')
    				.css({
    					width: parseInt( $this.find('img').attr('width') ) + 30,
                        height: parseInt( $this.find('img').attr('height') ) + 30,
                        'max-height': '100%',
                        'max-width': '100%',
                        margin: '5em auto'
                     });
			});
	});

/*
* Contact Form
*/
	var form = $('form#jqueryForm'),
		results = $('#results'),
		notice = '',
		$sucFail,
		$envoyer = '<span class="glyphicon glyphicon-send"></span>';

	$( document ).on('submit', 'form#jqueryForm', function(e) {

		e.preventDefault();

		var $this = $(this),
			$name = $this.find('#name'),
			$email = $this.find('#email'),
			$subject = $this.find('#subject'),
			$message = $this.find('textarea#message');
			console.log( $name.next() );

		if ( $.trim( $name.val() ) === '' ) {
			notice = 1;
			$name.next().show();
		} else {
			$name.next().hide();
		}

		if ( $.trim( $email.val() ) === '' ) {
			notice = 1;
			$email.next().show();
		} else {
			$email.next().hide();
		}

		if ( $.trim( $subject.val() ) === '' ) {
			notice = 1;
			$subject.next().show();
		} else {
			$subject.next().hide();
		}

		if ( $.trim( $message.val() ) === '' ) {
			notice = 1;
			$message.next().show();
		} else {
			$message.next().hide();
		}

		if ( notice === 0 ) {

			$('span.error').hide();

			results.html('');

			$this.find('button[type=submit]').text(' En train d\'envoyer...').prepend( $envoyer );

			var data = $this.serialize();

			$.post( AH_JS.ajax_url + '?action=ah_contact_form', data, function( data ) {

				$this.slideUp('slow');

				var anchor = $('<button></button>',
				{
					'class': 'btn btn-success',
					'id'	 : 'resetForm',
					'text' : 'Envoyer un autre message'
				});

				anchor.prepend( $envoyer + ' ');

				if ( 1 === parseInt( data ) ) {
					$data = '<h4>E-mail envoyé avec succès!</h4>';
					$sucFail = '<div class="bg-success left-content col-sm-12 text-center"></div>'
				}
				else if ( 0 === parseInt( data ) ) {
					$data = '<h4>Echec d\'envoi de l\'e-mail</h4>';
					$sucFail = '<div class="bg-danger left-content col-sm-12 text-center"></div>'
				}

				$pSuc = $( $sucFail ).html( $data ).append( anchor );
				results.html( $pSuc ).show();

				$this.find('button[type=submit]').text(' Envoyer').prepend( $envoyer );

			});
		} else {
			// results.html( '<p class="text-danger">' + notice + '</p>' );
			// $('span.error').show();
			notice = 0;
		}

	});

	$( document ).on('click', '#resetForm', function(e) {

		form[0].reset();
		form.slideDown('slow', function() {
			results.fadeOut();
			$(this).find('input')[0].focus();
		});

		e.preventDefault();
	});

})( jQuery );