		window.addEvent('load', function() {
		
			new Picker.Date($$('.cf_date_picker'), {
			pickerClass: 'datepicker_mpr', format: '%Y-%m-%d', allowEmpty: true, useFadeInOut: !Browser.ie, days: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'], months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],format:'%d-%m-%Y',inputOutputFormat: '%d-%m-%Y',startView: 'decades'
			});
			
			new Picker.Date($$('.cf_datetime_picker'), {
			pickerClass: 'datepicker_mpr', format: '%d-%m-%Y %H:%M:%S', timePicker: true, allowEmpty: true, useFadeInOut: !Browser.ie, days: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'], months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],format:'%d-%m-%Y',inputOutputFormat: '%d-%m-%Y',startView: 'decades'
			});
			
			new Picker.Date($$('.cf_time_picker'), {
			pickerClass: 'datepicker_mpr', format: '%H:%M:%S', pickOnly: 'time', allowEmpty: true, useFadeInOut: !Browser.ie, days: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'], months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],format:'%d-%m-%Y',inputOutputFormat: '%d-%m-%Y',startView: 'decades'
			});
			
		});
		