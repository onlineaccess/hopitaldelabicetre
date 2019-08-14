			window.addEvent('domready', function(){
				//create the tooltips
				var tipz = new Tips($$('div.tooltipimg'),{
					className: 'tooltipbox tool-tip',
					fixed: true,
					hideDelay: 0,
					showDelay: 0
				});
			});
		