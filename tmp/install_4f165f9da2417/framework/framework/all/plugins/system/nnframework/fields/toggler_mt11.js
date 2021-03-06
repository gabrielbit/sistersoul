/**
 * JavaScript file for Element: Toggler
 * Adds slide in and out functionality to framework based on an framework value
 *
 * @package			NoNumber! Framework
 * @version			11.11.2
 *
 * @author			Peter van Westen <peter@nonumber.nl>
 * @link			http://www.nonumber.nl
 * @copyright		Copyright © 2011 NoNumber! All Rights Reserved
 * @license			http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

if (typeof( window['nnToggler'] ) == "undefined") {
	window.addEvent('domready', function() {
		// Only do stuff if tabber_nav is found
		if (document.getElements('.nntoggler').length) {
			nnToggler = new nnToggler();
		} else {
			// Try again 2 seconds later, because IE sometimes can't see object immediatly
			(function() {
				if (document.getElements('.nntoggler').length) {
					nnToggler = new nnToggler();
				}
			}).delay(2000);
		}
	});

	var nnToggler = new Class({
		togglers: {}, // holds all the toggle areas
		framework: {}, // holds all the framework with the toggle areas they effect
		overlay: null, // holds all the overlay object
		form_framework: null, // holds the admin form framework
		div_framework: null, // holds the div framework

		initialize: function() {
			var self = this;

			this.togglers = document.getElements('.nntoggler');
			if (!this.togglers.length) {
				return;
			}

			nnScripts.overlay.open(0.2);

			( function() {
				self.form_framework = document.getElementsBySelector('input, select');
				self.initTogglers();
			} ).delay(500);
		},

		initTogglers: function() {
			var self = this;

			var new_togglers = {};
			var i = 0;

			// make parent tds have no padding
			this.togglers.each(function(toggler) {
				if (toggler.getParent().getTag() == 'td') {
					toggler.getParent().setStyle('padding', '0');
				}
				if (toggler.id) {
					i++;
					toggler.framework = {};
					toggler.fx = {};
					toggler.nofx = toggler.hasClass('nntoggler_nofx');
					toggler.overlay = ( toggler.hasClass('nntoggler_overlay') );
					toggler.mode = ( toggler.hasClass('nntoggler_horizontal') ) ? 'horizontal' : 'vertical';
					toggler.method = ( toggler.hasClass('nntoggler_and') ) ? 'and' : 'or';
					toggler.casesensitive = ( toggler.hasClass('nntoggler_casesensitive') );
					toggler.ids = toggler.id.split('___');
					new_togglers[toggler.id] = toggler;
				}
			});

			this.togglers = new_togglers;

			// add effects
			$each(this.togglers, function(toggler) {
				if (toggler.nofx) {
					toggler.fx.slide = new Fx.Slide(toggler, { 'duration': 1, 'mode': toggler.mode, onComplete: function() { self.completeSlide(toggler); } });
				} else {
					toggler.fx.slide = new Fx.Slide(toggler, { 'duration': 500, 'mode': toggler.mode, onStart: function() { self.startSlide(); }, onComplete: function() { self.completeSlide(toggler); } });
					toggler.fx.fade = new Fx.Styles(toggler, { 'duration': 500 });
				}
			});

			// set framework
			$each(this.togglers, function(toggler) {
				for (var i = 1; i < toggler.ids.length; i++) {
					keyval = toggler.ids[i].split('.');

					if (keyval.length < 2) {
						keyval[1] = 1;
					}
					if (typeof( self.framework[keyval[0]] ) == "undefined") {
						self.framework[keyval[0]] = {};
						self.framework[keyval[0]].togglers = [];
						self.framework[keyval[0]].overlay = 0;
					}
					if (toggler.overlay) {
						self.framework[keyval[0]].overlay = 1;
					}

					self.framework[keyval[0]].togglers.include(toggler.id);

					if (typeof( toggler.framework[keyval[0]] ) == "undefined") {
						toggler.framework[keyval[0]] = [];
					}
					toggler.framework[keyval[0]].include(keyval[1]);
				}
			});

			this.setFrameworkAction();

			// open togglers by value
			$each(this.togglers, function(toggler) {
				var show = self.isShow(toggler.id);
				if (!show) {
					toggler.fx.slide.hide();
					if (!toggler.nofx) {
						toggler.setStyle('opacity', 0);
					}
				}
				toggler.setStyle('visibility', 'visible');
			});

			this.div_framework = document.getElements('div.col div');
			// set all divs in the form to auto height
			this.autoHeightDivs();
			( function() {
				self.autoHeightDivs();
				( function() { self.hideOverlay(); } ).delay(250);
			} ).delay(500);
		},

		showOverlay: function() {
			if (nnScripts.overlay.fxing != 1) {
				nnScripts.overlay.fxing = 1;
				nnScripts.overlay.open(0.2);
			}
		},

		hideOverlay: function() {
			if (nnScripts.overlay.fxing != 2) {
				nnScripts.overlay.fxing = 2;
				nnScripts.overlay.close(0);
			}
		},

		startSlide: function() {
			this.autoHeightDivs();
		},

		completeSlide: function(toggler) {
			var self = this;

			this.autoHeightDivs();
			if (toggler.overlay) {
				( function() {
					self.hideOverlay();
					document.body.setStyle('cursor', '');
				} ).delay(250);
			}
		},

		autoHeightDivs: function() {
			// set all divs in the form to auto height
			this.div_framework.each(function(el) {
				if (el.getStyle('height') != '0px'
					&& !el.hasClass('input')
					&& !el.hasClass('nn_hr')
					&& !el.hasClass('textarea_handle')
					// GK framework
					&& el.id.indexOf('gk_') === -1
					&& el.className.indexOf('gk_') === -1
					&& el.className.indexOf('switcher-') === -1
					) {
					el.setStyle('height', 'auto');
				}
			});
		},

		toggle: function(el_name) {
			var self = this;
			if (typeof( this.framework[el_name] ) != "undefined") {
				var el = this.framework[el_name];
				var del = 0;
				if (el.overlay) {
					this.showOverlay();
					del = 250;
				}
				( function() {
					for (var i = 0; i < self.framework[el_name].togglers.length; i++) {
						self.togglebyid(self.framework[el_name].togglers[i]);
					}
				} ).delay(del);
				if (el.overlay) {
					//this.hideOverlay();
				}
			}

		},

		togglebyid: function(id) {
			if (typeof( this.togglers[id] ) == "undefined") {
				return;
			}

			var toggler = this.togglers[id];

			var show = this.isShow(id);

			toggler.fx.slide.stop();
			if (toggler.nofx) {
				if (show) {
					toggler.fx.slide.show();
				} else {
					toggler.fx.slide.hide();
				}
				this.autoHeightDivs();
			} else {
				toggler.fx.fade.stop();
				if (show) {
					toggler.fx.slide.slideIn();
					( function() { toggler.fx.fade.start({ 'opacity': 1 }) } ).delay(250);
				} else {
					toggler.fx.slide.slideOut();
					toggler.fx.fade.start({ 'opacity': 0 });
				}
			}
		},

		isShow: function(id) {
			var toggler = this.togglers[id];

			var show = ( toggler.method == 'and' );

			for (id in toggler.framework) {
				var vals = toggler.framework[id];
				var values = this.get_values(id);
				if (values != null && values.length && ( ( vals == '*' && values != '' ) || nnScripts.in_array(vals, values, toggler.casesensitive) )) {
					if (toggler.method == 'or') {
						show = 1;
						break;
					}
				} else {
					if (toggler.method == 'and') {
						show = 0;
						break;
					}
				}
			}

			return show;
		},

		get_values: function(element_name) {
			if (typeof( this.framework[element_name] ) == undefined) {
				return null;
			}

			var element = this.framework[element_name];

			var values = new Array();
			// get value
			if (element.framework) {
				switch (element.type) {
					case 'radio':
					case 'checkbox':
						for (var i = 0; i < element.framework.length; i++) {
							if (element.framework[i].checked) {
								values.push(element.framework[i].value);
							}
						}
						break;
					default:
						if (element.framework.length > 1) {
							for (var i = 0; i < element.framework.length; i++) {
								if (element.framework[i].checked) {
									values.push(element.framework[i].value);
								}
							}
						} else {
							values.push(element.framework[0].value);
						}
						break;
				}
			}
			return values;
		},

		setFrameworkAction: function() {
			var self = this;
			this.form_framework.each(function(el) {
				el.el_name = el.name.replace('[]', '').replace(/(?:params|advancedparams)\[(.*?)\]/g, '\$1');

				if (typeof( self.framework[el.el_name] ) != "undefined") {
					if (typeof( self.framework[el.el_name].framework ) == "undefined") {
						self.framework[el.el_name].framework = [];
					}

					if (typeof( self.framework[el.el_name].type ) == "undefined") {
						if (el.getTag() == 'select') {
							self.framework[el.el_name].type = 'select';
						} else {
							self.framework[el.el_name].type = el.type;
						}
					}
					var func = function(event) { self.toggle(el.el_name); };

					switch (self.framework[el.el_name].type) {
						case 'radio':
						case 'checkbox':
							el.addEvent('click', func);
							el.addEvent('keyup', func);
							break;
						case 'select':
						case 'select-one':
						case 'text':
							el.addEvent('change', func);
							el.addEvent('keyup', func);
							break;
						default:
							el.addEvent('change', func);
							break;
					}

					self.framework[el.el_name].framework.include(el);
				}
			});
		}
	});
}