			window.addEvent('domready', function() {
				document.id('chronoform_icpn').addClass('hasValidation');
				formCheck_icpn = new FormCheckMax('chronoform_icpn', {
					onValidateSuccess: function(){},
					display : {
						showErrors : 0,
						errorsLocation: 1					}
				});										
			});
			