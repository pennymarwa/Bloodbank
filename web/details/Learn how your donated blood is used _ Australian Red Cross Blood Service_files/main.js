// Author: 	Angus Dowling
// Company: Precedent
// Version: 1.0
/* Usage: 	When modifying this file please follow the object literal notation that has been used below.
		  	e.g to write a function:

		  	app.functionName = function(){
				// your code here
		  	}

		  	To call that function:

		  	app.functionName();
*/

/*globals 
	requestAnimFrame,
	transitionEnd,
	currentIndex,
	alert,
	jQuery,
	get_centers,
	Drupal
*/

'use strict';

var app;

(function ( $ ) {

	// Australian Red Cross Blood Service Application
	app = {

		// Desc: 	Application Variables. If you need appwide scoped variables please add a variable here.
		/* Usage: 	To declare a variable use the syntax "variableName: variableValue" (without quotes).
				  	To use a variable you can access it through "app.vars.variableName" (without quotes).
		*/
		vars: {
			windowHeight: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
			windowWidth: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
			mobileWidth: 767,
			tabletWidth: 1024,
			lastScroll: 0,
			flag: 0,
			requestFlag: 0,
			slidePosition: 0,
			slickSlider: null,
			switched: false
		},

		// Desc: Initiate the application. Please put any functions in here required on document ready.
		init: function(){
			app.handlers();
			app.resizeComponent();
			app.carousel.full();
			app.carousel.three( $('.ui.three.carousel') );
			app.carousel.one( $('.ui.single.carousel') );
			app.overlay.classes();
			app.overlay.resultHeight();
			app.contentOrganisation.tabAccordionSwitch();
			app.contentOrganisation.acc();
			
			app.panelContainer.testParallax();
			app.animationFrame();
			app.tables();
			app.search.autocomplete();
			app.menu.activeItem();
			app.landingPage();

			
			//Responsive video embeds
			$('body').fitVids();

			// add visible class for phone area code
			if($('.std')[0]){
				if($('.std').is(":visible")){
					$('.std').addClass("isVisible");
				}
			}		
		},

		// Desc: 	Event Handlers. Please put any events in here and attach the related function.
		/* Usage: 	Ideally you seperate the function and the handler, eg:
		            $('element').on('event', app.yourFunction());
		*/
		handlers: function(){

			// back to top functionality
			$('.js-to-top').on('click', function(e){

				$('html, body').animate({
					scrollTop: 0
				}, 0);

				e.preventDefault();
			});

			$('.requestApp').on('click', function(e){
				$(this).toggleClass('active');

				e.preventDefault();
			});

			$(document).on('click', '#search .searchSubmit', function(){
        app.search.getResults();
	    });


	  	$('.ui.modal.menu .outerList > .item > .openList[href="#"]').on('click', function(e){
	  		app.menu.top($(this));

	  		e.preventDefault();
	  	});


	  	$('.ui.modal.menu .innerList > .item > .openList[href="#"]').on('click', function(e){
	  		app.menu.levelTwo($(this));

	  		e.preventDefault();
	  	});

			// Open Third Level of Menu overlay
			$('.ui.modal.menu .outerList  > .item > .openList + .innerList > .item > .openList + .innerList > .item > .openList[href="#"]')
			.off()
			.on('click', function(e){
				app.menu.levelTwo($(this), 'yes');
				app.menu.closeShow();

				e.preventDefault();
			});

			$('.ui.modal.menu .outerList  > .item > .openList + .innerList > .item > .link, .ui.modal.menu .outerList > .item > .openList + .innerList > .item > .innerList > .item > .link')
			.off()
			.on('click', function(){
				app.overlay.toggleShow( $('.ui.overlay') );
			});

			// Close Overlay
			$('.ui.overlay .ui.panel1 .close').on('click', function(e){
				app.overlay.toggleShow( $(this).closest('.ui.overlay') );

				e.preventDefault();
			});

			// Go backwards in Menu
			$('.ui.modal.menu .back').on('click', function(e){
				app.menu.close();

				e.preventDefault();
			});

			// Show Map Overlay
			$('.ui.utility.navigation .link.icon-nav-01, .mapOverlayOpen').on('click', function(e){
				app.overlay.toggleShow( $('#map.ui.overlay') );

				$('#map input:first').focus();

				e.preventDefault();
			});

			// Show Search Overlay
			$('.ui.utility.navigation .link.icon-nav-02, .searchOverlayOpen').on('click', function(e){
				app.overlay.toggleShow( $('#search.ui.overlay') );

				$('#search input:first').focus();

				e.preventDefault();
			});

			// Show Menu Overlay
			$('.ui.utility.navigation .link.icon-nav-03, .menuOverlayOpen').on('click', function(e){
				app.overlay.toggleShow( $('#menu.ui.overlay') );

				$('#menu.ui.overlay').attr('tabindex', '-1').focus().one('blur', function(){
					$(this).removeAttr('tabindex');
				});

				e.preventDefault();
			});

			// Close Case Study Overlay
			$('.overlayComponent .close').on('click', function(e){
				app.overlay.close($(this));

				e.preventDefault();
			});

			// Open/close SlideOut panel
			$('.ui.slideOut .tab a').on('click keypress', function(e){
				app.slideOut();

				e.preventDefault();
			});

			// Open Case Studies Overlay
			$('.ui.three.carousel .link').on('click', function(e){
				app.overlay.caseStudies( $(this) );

				e.preventDefault();
			});

			// Switch to Map or List in mobile view of map overlay.
			$('.mapTab').on('click', function(e){
				app.overlay.mapSwitch( $(this) );

				e.preventDefault();
			});

			// Window Scroll
			$(window).on('scroll', function(e){
				app.sideSticky.scroll(e);
				app.menu.activeItem();
			});

			// Window Mousewheel/DOMMouseScroll/Wheel/Keydown
			$(window).on('mousewheel DOMMouseScroll wheel keydown', function(e){
				app.footer.scroll(e);
			});

			// On Window Resize
			$(window).on('resize', function(){
			  // Variables
			  app.vars.windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
			  app.vars.windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

			  // Functions
			  app.resizeComponent();
			  app.contentOrganisation.tabAccordionSwitch();
			  app.panelContainer.testParallax();
			  app.overlay.resultHeight();
			  app.sideSticky.resize();
			  app.header.resize();
			  app.requestAppointment.updateTables();
			  // app.checkHeight();
			  
			});

			$(window).smartresize(function(){
				app.page();
			});

			

			$(window).on('load', function(){
				app.requestAppointment.updateTables();
			});

			// On Overlay Scroll
			$('.ui.overlay').on('scroll', function(){
				app.overlay.scroll();
			});

			$('.std').on('beforeShow', function(){
				$(this).addClass('isVisible');
			});

			$('.std').on('beforeHide', function(){
				$(this).removeClass('isVisible');
			});

			$('.openOverlay').on('click', function(e){
				var overlay = $(this).closest('.tab').find('.moreOverlay');

				app.overlay.toggleShow( overlay );

				e.preventDefault();
			});

			$('.moreOverlay .close').on('click', function(e){
				var overlay = $(this).closest('.moreOverlay');

				app.overlay.toggleShow( overlay );

				e.preventDefault();
			});

			$('#search .largeSearchContainer .largeSearch').on('keypress', function(event){
				app.search.handleKeyPress(event);
			});

			$('#map .largeSearchContainer .largeSearch').on('keypress', function(event){
				app.map.hitEnter(event);
			});

			$('#map .searchSubmit').on('click', function(){
			    app.map.getCenters();
			}); 


			$(document).on('click','.pager li', function(){
				if($(this).find('a')){
					$(this).not('.item').find('a').click();
				}
			});

			$(document).on('click','#locationoptions .link',function(){
				var address = $(this).attr('data');
				$('.largeSearchContainer .largeSearch').val(address);
				app.map.getCenters();
			});


		}
	};

	app.landingPage = function()
	{
		if($('.section.fp-section:not(".active")')[0])
		$('.section.fp-section:not(".active")').attr('tabindex', '-1');
	}

	// Panel Container and parallax functionality
	app.panelContainer = {

		// If Panel Container exists, initiate parallax, otherwise destroy any instances.
		// Destroy any instances of parallax for tablet and mobile.
		testParallax: function(){
			var panelContainer = $('.panelContainer');

			if(panelContainer[0])
			{
				if(app.vars.windowWidth <= app.vars.tabletWidth)
				{
					app.parallax( panelContainer ); // to make the data-anchor work on the div sections
					/*if( panelContainer.hasClass('hasParallax') )
					{
						$.fn.fullpage.destroy('all');
						panelContainer.removeClass('hasParallax');
					}*/
				}

				else
				{
					if(!panelContainer.hasClass('hasParallax'))
					{
						app.parallax( panelContainer );
					}
				}
			}
		}
	};

	// Animation Frame
	app.animationFrame = function(){
		window.requestAnimFrame = (function(){
			return  window.requestAnimationFrame       || 
			window.webkitRequestAnimationFrame || 
			window.mozRequestAnimationFrame    || 
			window.oRequestAnimationFrame      || 
			window.msRequestAnimationFrame     || 
			function( callback ){
				window.setTimeout(callback, 1000 / 60);
			};
		})();

		requestAnimFrame(app.animationFrame);

		if(app.vars.windowWidth >= app.vars.tabletWidth)
		{
			app.header.transform();
		}

		app.page();

		app.requestAppointment.dynamicTableUpdate();
	};

	// Overlay Menu functionality
	app.menu = {
		top: function(selector){
			var closestItem = selector.closest('.item');
			var allItem = $('.ui.modal.menu .item');
			var closestList = selector.closest('.list');
			var nextList = selector.next('.list');
			var innerList = $('.ui.modal.menu .innerList');
			var container = $('.ui.modal.menu .ui.wrapper');

			if(app.vars.flag <= 0)
			{
				app.vars.flag = 1;

				if(closestItem.hasClass('active'))
				{
					closestItem.removeClass('active');
					closestList.removeClass('open');
					innerList.removeClass('open');

					innerList.fadeOut(400);
					nextList.fadeOut(400, function(){
						app.vars.flag = 0;
					});

					if(app.vars.windowWidth > app.vars.tabletWidth)
					{
						container.width(328);
					}

					else
					{
						$('.ui.modal.menu .back').fadeIn(300);
					}
				}

				else
				{
					innerList.removeClass('open');
					allItem.removeClass('active');
					closestItem.addClass('active');
					closestList.addClass('open levelOne');

					innerList.fadeOut(400);
					nextList.fadeIn(400, function(){
						app.vars.flag = 0;
					});

					if(app.vars.windowWidth > app.vars.tabletWidth)
					{
						container.width(656);
					}

					else
					{
						$('.ui.modal.menu .back').fadeIn(300);
					}
				}
			}
		},

		levelTwo: function(selector, margin){
			var closestItem = selector.closest('.item');
			var siblingItem = closestItem.siblings('.item');
			var nextList = selector.next('.list');
			var closestList = selector.closest('.list');
			var container = $('.ui.modal.menu .ui.wrapper');

			if(app.vars.flag <= 0)
			{
				app.vars.flag = 1;

				if(!closestItem.hasClass('active'))
				{
					if(nextList[0])
					{
						nextList.fadeIn(400, function(){
							app.vars.flag = 0;
						});
					}

					if(siblingItem[0])
					{
						siblingItem.removeClass('active');
						siblingItem.find('.list').removeClass('open');

						if(siblingItem.find('.list').is(':visible'))
						{
							siblingItem.find('.list').fadeOut(400, function(){
								app.vars.flag = 0;
							});
						}

						else
						{
							app.vars.flag = 0;
						}

					}

					else if(!siblingItem[0] && !nextList[0])
					{
						app.vars.flag = 0;
					}

					closestItem.addClass('active');
					closestList.addClass('open levelTwo');
					container.width(984);
				}

				else
				{
					app.vars.flag = 0;
				}

				if(margin === 'yes')
				{
					if(app.vars.windowWidth > app.vars.tabletWidth)
					{
						$('.ui.modal.menu .outerList').css('margin-left', '-321px');
					}
				}
			}
		},

		closeShow: function(){
			var length = $('.list.open').closest('.list.open').length;

			if(length >= 3)
			{
				$('.ui.modal.menu .back').fadeIn(400);
			}
		},

		close: function(){
			var levelOne = $('.levelOne');
			var levelTwo = $('.levelTwo');

			if(app.vars.windowWidth > app.vars.tabletWidth)
			{
				$('.ui.modal.menu .outerList').css('margin-left', '0px');

				$('.ui.modal.menu .back').fadeOut(400);
			}

			else
			{
				if(levelOne[0])
				{
					if(levelTwo[0])
					{
						levelTwo.find('.list').fadeOut(300).promise().done(
							function(){
								levelTwo.find('.item').removeClass('active');
								levelTwo.removeClass('open');
								levelTwo.removeClass('levelTwo');
							});  
					}

					else
					{
						$('.ui.modal.menu .back').fadeOut(300);
						levelOne.find('.list').fadeOut(300).promise().done(
							function(){
								levelOne.find('.item').removeClass('active');
								levelOne.removeClass('open');
								levelOne.removeClass('levelOne');

								$('.ui.modal.menu .back').fadeOut(300);
							});
					}
				}
			}
		},

		activeItem: function(){
			var closest;
			var menuLink;
			var mainNavLink = $('.ui.main.navigation a');

			if(mainNavLink[0])
			{
				for(var i = 0; i < mainNavLink.length; i++){
					var link = mainNavLink.eq(i);
					var target = $(link.attr('href'));
					var scrollPosition = $(window).scrollTop();
					var con1 = (closest !== undefined) ? closest.position().top + (closest.next().outerHeight() - scrollPosition) : "";
					var con2 = (target[0]) ? target.position().top  + (target.next().outerHeight() - scrollPosition) : "";

					if(con1 !== "")
					{
						if(closest === undefined || 0 > con1 || con1 > con2 && con2 > 0)
						{
							closest = target;
						}
					}
				}

				if(closest !== undefined)
				{
					menuLink = $('.ui.main.navigation a[href="#' + closest.attr("id") + '"]');

					if('#' + closest.attr('id') === menuLink.attr('href'))
					{
						if(!menuLink.hasClass('active'))
						{
							mainNavLink.removeClass('active');
							menuLink.addClass('active');
						}
					}
				}
			}
		}
	};

	// Resize .component to be the height of the window
	app.resizeComponent = function(){
		var component = $('.component');

		component.css('height', $(window).height());
	};

	// Initiate Carousels (Full page, single item or three items)
	app.carousel = {
		full: function(){
			var carousel = $('.ui.carousel.full .list');

			if(carousel[0])
			{
				carousel.slick({
					infinite: true,
					draggable: false,
					autoplay: true,
					autoplaySpeed: 5000,
					fade: true,
					dots: true
				});
			}
		},

		one: function(selector){
			if(selector[0])
			{
				selector.slick({
					infinite: true,
					draggable: false,
					autoplay: true,
					autoplaySpeed: 5000,
					dots: true,
					useCSS: false
				});
			}
		},

		three: function( selector ){
			if(selector[0])
			{
				selector.slick({
					slidesToShow: 3,
					slideToScroll: 1,
					infinite: true,
					draggable: false,
					autoplay: true,
					autoplaySpeed: 5000,
					dots: true,
					useCSS: false,
					responsive: [
					{
						breakpoint: app.vars.tabletWidth,
						settings: {
							slidesToShow: 1
						}
					}
					]
				});
			}
		}
	};

	// Overlay functionality
	app.overlay = {
		moreOverlayOpen: function(selector){
			var closestOverlay = selector.closest('.tab').find('.moreOverlay');

			closestOverlay.addClass('open');
		},

		toggleShow: function(overlay){
			//$('#menu.ui.overlay')
			// overlay.addClass('open');

			if(app.vars.flag <= 1)
			{
				app.vars.flag = 1;

				if (overlay.hasClass('show'))
				{
					overlay.removeClass('open');

					transitionEnd(overlay).bind(function(){
					    overlay.removeClass('show');
						app.vars.flag = 0;

					    transitionEnd(overlay).unbind();
					});

					var transition = transitionEnd(overlay).whichTransitionEnd(); 

					if(transition === undefined){
						overlay.removeClass('show');
						app.vars.flag = 0;
					}

					$('html').removeClass('overlayShow');
				}

				else
				{
					overlay.addClass('show');

					setTimeout(function () {
						overlay.addClass('open');
						app.vars.flag = 0;
					}, 20);

					$('html').addClass('overlayShow');
				}
			}
		},

		// Close button functionality
		close: function( selector ){
			selector.closest('.overlayComponent').fadeOut(300);
		},

		// Add classes to case study overlays to be used as hooks
		classes: function(){
			for(var i = 0; i < $('.caseStudies.overlay .ui.caseOverlay.overlayComponent').length; i++){
				var overlay = $('.caseStudies.overlay .ui.caseOverlay.overlayComponent').eq(i);

				overlay.addClass('overlay-'+i);
			}
		},

		// Open/close Case Studies overlay
		caseStudies: function(selector){
			var length = $('.caseStudies.overlay .ui.caseOverlay.overlayComponent').length;
			var index = selector.closest('.item').attr('index');

			if(index >= 0 && index < length)
			{
				$('.overlay-'+index).fadeIn(300);
			}

			else if(index >= length)
			{
				index = index - length;

				$('.overlay-'+index).fadeIn(300);
			}
		},

		// If map has style attribute on desktop, remove it. 
		map: function(){
			var mapColumn = $('.ui.map.panel .column');

			if(app.vars.windowWidth >= app.vars.tabletWidth)
			{
				if(mapColumn.attr('style') !== undefined)
				{
					mapColumn.removeAttr('style');
				}
			}
		},

		// Map Overlay switch between list and map
		mapSwitch: function(selector){
			var id = selector.attr('id');
			var mapColumnOne = $('.ui.map.panel .column-1');
			var mapColumnTwo = $('.ui.map.panel .column-2');

			if(id === 'switchToList')
			{
				mapColumnTwo.hide();
				mapColumnOne.show();
			}

			else if(id == 'switchToMap')
			{
				mapColumnOne.hide();
				mapColumnTwo.show();
			}

			$('.mapTab').removeClass('active');
			selector.addClass('active');
		},

		resultHeight: function(){
			var resultsContainer = $('.resultsContainer');
			var height = $(window).height();

			if(app.vars.windowWidth <= app.vars.tabletWidth && app.vars.windowWidth >= app.vars.mobileWidth)
			{
				resultsContainer.height(height - 370);
			}

			else if(app.vars.windowWidth <= app.vars.mobileWidth)
			{
				resultsContainer.height(height - 250);
			}

			else
			{
				resultsContainer.removeAttr('style');
			}
		},

		scroll: function(){
			var scrollDown = $('.ui.overlay .scrollDown a');
			var scrolled = $('.ui.overlay').scrollTop();

			if(scrolled !== 0)
			{
				if(scrollDown.is(':visible'))
				{
					scrollDown.fadeOut(300);
				}
			}

			else
			{
				if(!scrollDown.is(':visible'))
				{
					scrollDown.fadeIn(300);
				}
			}
		}
	};

	app.slideOut = function(){
		var slideOut = $('.ui.slideOut');
		var button = slideOut.find('a.ui.button');

		slideOut.toggleClass('open');

		if(slideOut.hasClass('open'))
		{
			button.removeAttr('tabindex');
		}

		else
		{
			button.attr('tabindex', "-1");
		}
	}

	// sideSticky module functionality
	app.sideSticky = {

		// Fix sideSticky module to side of window
		scroll: function(){
			var scrolled = $(window).scrollTop();
			var sideSticky = $('.sideSticky');
			var sideStickyNotFixed = $('.sideSticky:not(.fixed)');

			if(sideStickyNotFixed[0])
			{
				app.vars.slidePosition = sideStickyNotFixed.offset().top;
			}

			if(app.vars.slidePosition - 85 < scrolled)
			{
				sideSticky.addClass('fixed');
			}

			else
			{
				sideSticky.removeClass('fixed');
			}
		},

		// Remove any superflous classes or styling on resize.
		resize: function(){
			var sideSticky = $('.sideSticky');

			if(app.vars.windowWidth <= app.vars.tabletWidth){
				if(sideSticky.hasClass('fixed'))
				{
					sideSticky.removeClass('fixed');
				}
			}
		}
	};

	// Footer Functionality
	app.footer = {

		//Landing footer show/hide on scroll
		scroll: function(e){
			var delta;
			var landingFooter = $('.ui.landingFooter');

			if(landingFooter[0])
			{
				if(typeof currentIndex !== 'undefined')
				{
					if(app.vars.windowWidth >= app.vars.tabletWidth)
					{
						delta = e.originalEvent.deltaY;

						if(currentIndex === $('.fp-section').length)
						{
							if(delta > 0 || e.keyCode == '40')
							{
								landingFooter.slideDown(400);
							}
						}

						if(delta < 0 || e.keyCode == '38')
						{
							landingFooter.slideUp(400);
						}
					}
				}
			}
		}
	};

	// Sticky header functionality
	app.header = {

	  // Switch between basic and transformed header for landing page
	  transform: function(){
	  	var masthead1 = $('.landing .section .panel1 .ui.masthead');
	  	var masthead2 = $('.landing .section .panel2 .ui.masthead');
	  	var windowHeight = $(window).height();
	  	var offset;

	  	if(app.vars.windowWidth >= app.vars.tabletWidth)
	  	{
	  		if(masthead1[0])
	  		{
	  			offset = masthead1.offset().top - masthead2.height();

	  			if(offset <= -windowHeight)
	  			{
	  				masthead2.addClass('transformed');
	  				masthead2.removeClass('basic');
	  			}

	  			else
	  			{
	  				masthead2.removeClass('transformed');
	  				masthead2.addClass('basic');
	  			}
	  		}
	  	}
	  },

	  // Switch to smaller header when scrolling down
	  switchMini: function(){
	  	var masthead = $('.ui.masthead');

	  	if(app.vars.flag <= 0)
	  	{
	  		app.vars.flag = 1;

	  		if(!masthead.hasClass('goingDown'))
	  		{
	  			masthead.addClass('goingDown').removeClass('goingUp');
	  		}

	  		$('.ui.site.navigation').slideUp(300, function(){
	  			app.vars.flag = 0;
	  		});
	  	}
	  },

	  // Switch to expanded header when scrolling up
	  switchExpand: function(){
	  	var masthead = $('.ui.masthead');

	  	if(app.vars.flag <= 0)
	  	{
	  		app.vars.flag = 1;

	  		if(!masthead.hasClass('goingUp'))
	  		{
	  			masthead.addClass('goingUp').removeClass('goingDown');
	  		}

	  		$('.ui.site.navigation').slideDown(300, function(){
	  			app.vars.flag = 0;
	  		});
	  	}
	  },

	  // On resize reset properties
	  resize: function(){
	  	var siteNavigation = $('.ui.site.navigation');

	  	if(app.vars.windowWidth <= app.vars.tabletWidth)
	  	{
	  		if(siteNavigation.attr('style') !== undefined)
	  		{
	  			siteNavigation.removeAttr('style');
	  		}
	  	}
	  }
	};

	app.page = function(){
		var page = $('.page');
		var masthead = $('.ui.masthead');
		var footer = $('.page + .ui.footer');

		if(page.height() <= app.vars.windowHeight - masthead.outerHeight() - footer.outerHeight())
		{
			page.css('min-height', app.vars.windowHeight - masthead.outerHeight() - footer.outerHeight() + 'px');
		}

		else
		{
			if(page.attr('style') !== undefined){
				page.removeAttr('style');
			}
		}
	};

	// loop through menus and generate array of URL friendly strings
	app.hashLink = {

		// Current landing page hash links
		currentHash: function(array){
			$('.ui.main.navigation .link').each(function() {
			    array.push(app.convertToSlug(this.innerHTML));
			});

			// apply URL friendly strings to list items
			for(var i = 0; i < $('.ui.main.navigation .item').length; i++)
			{
				var item = $('.ui.main.navigation .item').eq(i);
				item.attr('data-menuanchor', array[i])
			}
		}
	}

	// Feature landing page parallax functionality
	app.parallax = function( selector ){
		var hashLink = [];

		app.hashLink.currentHash(hashLink)

		selector.fullpage({
			onLeave: function(index, nextIndex, direction){
				var landingNavigation = $('.ui.landing.navigation');
				var navigationItem = $('.ui.main.navigation .item');
				var sideSticky = $('.sideSticky');

				navigationItem.removeClass('active');
				navigationItem.eq(nextIndex -1).addClass('active');

				if(direction =='down')
				{
					app.header.switchMini();
				}

				else if(direction == 'up' && nextIndex !== 1)
				{
					app.header.switchExpand();
				}

				else
				{
					app.header.switchMini();
				}

				if(nextIndex !== 1)
				{
					landingNavigation.hide();
				}

				else
				{
					landingNavigation.show();
				}

				if(nextIndex === 3)
				{
					sideSticky.addClass('fixed');
				}

				else if(nextIndex == 1)
				{
					sideSticky.removeClass('fixed');
				}

				if(nextIndex !== $('.fp-section').length)
				{
					currentIndex = nextIndex;
				}
			},

			afterLoad: function(anchorLink, index){
				var sideSticky = $('.sideSticky');

				if(index > 1)
				{
					sideSticky.addClass('fixed');
				}

				currentIndex = index;
			},

			anchors: ['', hashLink[0], hashLink[1], hashLink[2], hashLink[3], hashLink[4], hashLink[5], hashLink[6], hashLink[7], hashLink[8]],
			menu: '.ui.main.navigation',
			normalScrollElements: '.ui.overlay',
			autoScrolling: true,
			css3: false,
			easing: 'easeInOutQuad',
			scrollingSpeed: 700,
			touchSensitivity: 2,
			fixedElements: '.ui.imageOverlay',
			paddingTop: '95px'
		});

		selector.addClass('hasParallax');
	};

	// Content organisation functionality
	app.contentOrganisation = {

	  //Accordion functionality
	  acc: function(){
	  	$('.ui.accordion').accordion({
	  		heightStyle: 'content',
	  		collapsible: true
	  	});
	  },

	  // Switch from Tabs to Accordion on mobile, and accordion to tabs on desktop.
	  tabAccordionSwitch: function(){
	  	var tabs = $('.ui.tabs');
	  	var tabsComponent = $( '.ui.tabs.component' );
	  	var tabHasTabs = $('.ui.tabs.ui-tabs');
	  	var tabHasAccordion = $('.ui.tabs.ui-accordion');

	  	if(tabs[0])
	  	{
	  		if(app.vars.windowWidth > app.vars.tabletWidth)
	  		{
	  			if(tabHasAccordion[0])
	  			{
	  				tabsComponent.accordion('destroy');
	  			}

	  			if(!tabHasTabs[0])
	  			{
	  				tabsComponent.tabs();
	  			}
	  		}

	  		else if(app.vars.windowWidth <= app.vars.tabletWidth)
	  		{
	  			if(tabHasTabs[0])
	  			{
	  				tabsComponent.tabs('destroy');
	  			}

	  			if(!tabHasAccordion[0])
	  			{
	  				tabsComponent.accordion({
	  					header: '.accordionTitle',
	  					heightStyle: 'content',
	  					collapsible: true
	  				});
	  			}
	  		}
	  	}
	  }
	};

	app.tables = function(){
		var windowWidth=  window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var headings = [];
		

		for(var i = 0; i < $('table th').length; i++)
		{
			var heading = $('table th').eq(i);

			headings.push(heading.text());
		}

		for(var j = 0; j < $('table tr td').length; j++)
		{
			var cell = $('table tr td').eq(j);
			
			var white_cell = $('table tr.clubred_online_tracking_white td');
			var index = cell.index();
			
			cell.attr('data-content', headings[index]);
			
			//View group tally labels on mobile and tablet view
			if (windowWidth <= 1024){
				var newElement = document.createElement('span'), 
				txt = document.createTextNode(headings[index]);
				newElement.appendChild(txt);

				$("table tr td span").addClass("labels");

				$(".labels").css({"font-weight":"bold","margin-left":"-80px","padding-right":"25px"});
				

				cell.prepend(newElement);

				//Total table information:
				$(".clubred_online_tracking_white td span:first").css({"display":"none"});
				$(".clubred_online_tracking_white td span:last").css({"padding-right":"20px"});

			}	
		}
	};//end of for

	app.requestAppointment = {
		dynamicTableUpdate: function(){
			var table = $('table.responsive');

			if(table[0])
			{
				if(!table.hasClass('loaded'))
				{
					for(var i = 0; i < table.length; i++)
					{
						var unloadedTable = table.eq(i);

						app.requestAppointment.updateTables();

						unloadedTable.addClass('loaded');
					}
				}
			}
		},

		updateTables: function() {
			var unswitchedTable = $('table.responsive:not(.switched)');
			var switchedTable = $('table.responsive.switched');

			if (app.vars.windowWidth <= 1024)
			{
				unswitchedTable.each(function(i, element){
					app.requestAppointment.splitTable($(element));
				});

				return true;
			} 
			else if (app.vars.windowWidth > 1024)
			{
				switchedTable.each(function(i, element){
					app.requestAppointment.unsplitTable($(element));
				});
			}
		},

		splitTable: function(original) {
			original.addClass('switched');
			original.wrap('<div class="table-wrapper" />');
			var copy = original.clone();
			copy.find('td:not(:first-child), th:not(:first-child)').css('display', 'none');
			copy.removeClass('responsive');
			original.closest('.table-wrapper').append(copy);
			copy.wrap('<div class="pinned" />');
			original.wrap('<div class="scrollable" />');
		},

		unsplitTable: function(original){
			original.removeClass('switched');
			original.closest('.table-wrapper').find('.pinned').remove();
			original.unwrap();
			original.unwrap();
		}
	};

	// Check page height and sticky footer if pageheight != documentheight
	app.checkHeight = function(){
		var masthead = $('.ui.masthead');
		var page = $('.page');
		var footer = $('.ui.footer:last');
		var height = masthead.outerHeight() + page.outerHeight() + footer.outerHeight();

		if( app.vars.windowHeight > height){
			if(!footer.hasClass('sticky')){
				footer.addClass('sticky');
			}
		}

		else
		{
			if(footer.hasClass('sticky')){
				footer.removeClass('sticky');
			}
		}
	};

	app.search = {
		// Apply autocomplete to global search
		autocomplete: function(){
			var container = $('#autocomplete');

			if(container[0])
			{
				container.autocomplete({
				    // source: [ "Test", "Tester", "Testosterone", "Tested", "Tester", "Testability", "Testosterone" ],
				    source: '/sites/all/themes/arcbs/includes/autocomplete.php',
				    autoFill:true
				});

				container.data('ui-autocomplete')._renderItem = function (ul, item) {
				    item.value = $(item.label).eq(0).text();

				    $(ul).addClass('mainSearchAutocomplete');

				    return $('<li>')
				        .data('item.autocomplete', item)
				        .append('<a>' + item.label + '</a>')
				        .appendTo(ul);
				};

				container.on( 'autocompleteselect autocompletefocus', function( event, ui ) {
					var $this = $(this);

				    if(ui.item.value[0])
				    {
				        $this.val(ui.item.value);
				    }

				    else
				    {
				        $this.val(ui.item.label);
				    }

				    if(event.type === "autocompleteselect"){
				    	app.search.getResults();
				    }

				    return false;
				});

				container.on('keypress', function(e){
					var key = e.keyCode || e.which;

			        if (key == 13)
			        {
			        	$('.mainSearchAutocomplete').hide();
			        }
				});
			}
		},

		// If keypress is enter, fire getResults
		handleKeyPress: function(e){
	        var key = e.keyCode || e.which;

	        if (key == 13)
	        {
	            app.search.getResults();
	        }
		},

		// Show Ajax Indicator
		ajaxIndicatorStart: function(text){
		    var resultLoading = $('#resultLoading');
		    var searchListing = $('#search .listing');

		    if(!resultLoading[0])
		    {
		       searchListing.prepend(
		       	'<div id="resultLoading" style="display: block"><div class="resultLoadingInner"><img src="'+Drupal.settings.baseURL+'/sites/all/themes/arcbs/assets/images/ajax-loader.gif"><div>'+text+'</div></div></div>');
		    }
		},

		// Hide Ajax Indicator
		ajaxIndicatorStop: function(){
		    var resultLoading = $('#resultLoading');
		    var searchListing = $('#search .listing');

		    resultLoading.fadeOut(300, function(){
		        $(this).remove();
		    });
		    
		    searchListing.css('cursor', 'default');
		},

		// Fetch resultsw
		getResults: function(){
			var d = $(document);
			var search_keyword = $('#autocomplete').val();

			d.ajaxStart(function () {
			    app.search.ajaxIndicatorStart('Loading data, please wait.');
			});

			d.ajaxStop(function () {
			    app.search.ajaxIndicatorStop();
			});

			if(search_keyword === '')
			{
			    $('.ui.search.listing').html(
			    	'<div class="ui wrapper">' +
			    		'<div class="ui grid">' +
			    			'<div class="column twelveWide">' +
			    				'<h2 class="h2 heading" style="text-align: center;">Please provide the search keyword.</h2>' +
			    			'</div>' +
			    		'</div>' +
			    	'</div>')
			    return false;
			}

			var request = $.ajax({
			    url: Drupal.settings.baseURL + '/sites/all/themes/arcbs/includes/result-search.php',
			    method: 'POST',
			    data: { dsearch_keyword : search_keyword },
			});
			           
			request.done(function(msg) {
				var searchListing = $('#search .listing');
				var stub = $('<div class="ui wrapper">');

			    if(msg.match(/No results found. Please try with different keyword./g))
			    {
			    	stub.append(
			    		'<div class="ui grid">' +
			    			'<div class="column twelveWide">' +
			    				'<h2 class="h2 heading" style="text-align: center;">'+msg+'</h2>' +
			    			'</div>' + 
			    		'</div>');

	       		searchListing.html(stub);
			    	$('#search.overlay .scrollDown').fadeOut(300);
			    }

			    else
			    {
			    	searchListing.html(msg);
			    	$('#search.overlay .scrollDown').fadeIn(300);
			    }
		        
			});
			        
			request.fail(function(msg) {
			    alert( 'Request failed: ' + msg);
			});
		}		
	};

	app.map = {
		hitEnter: function(e){
			var key = e.keyCode || e.which;

			if (key==13)
			{
			    app.map.getCenters();
			}
		},

		ajaxIndicatorStart: function(text){
			var resultLoading = $('#resultLoading');

			if(!resultLoading[0])
		    {
				$('.map').prepend('<div id="resultLoading" style="display: block"><div class="resultLoadingInner"><img src="'+Drupal.settings.baseURL+'/sites/all/themes/arcbs/assets/images/ajax-loader.gif"><div>'+text+'</div></div></div>');
			}
		},

		ajaxIndicatorStop: function(){
			var resultLoading = $('#resultLoading');

			resultLoading.fadeOut(300, function(){
				resultLoading.remove();
			});
			
			$('.map').css('cursor', 'default');
		},

		getCenters: function(){
			var postcode = $('#map .largeSearch').val();
			var d = $(document);

			//Show Ajax Indicator
			d.ajaxStart(function () {
			    app.map.ajaxIndicatorStart('Loading data, Please wait.');
			})

			//Hide Ajax Indicator
			d.ajaxStop(function () {
			    app.map.ajaxIndicatorStop();
			});
			
			if(postcode === '')
			{
			    alert('Please provide the postcode.');
			    return false;
			}
			
			var request = $.ajax({
		    url: Drupal.settings.baseURL+"/sites/all/themes/arcbs/includes/getmaplisting.php",
		    method: "POST",
		    data: { dpostcode : postcode },
			});
			       
      request.done(function(msg)
      {
      	var column1 = $('#map .map .column-1');
      	var column1Script = $('#map .map .column-1 + script');
      	var nullMessage = $('.nullmessage');
      	var systemMessages = $('#map .systemMessages');

      	if($('#resultLoading')[0])
      	{
      		app.map.ajaxIndicatorStop();
      	}

        if(msg.match(/No centers found./g))
        {
        	systemMessages.html('<h2>No centers found. Please try again using another search term.</h2>');
        }

        else
        {
          if(nullMessage[0])
          {
              nullMessage.remove();
          }

          if(column1[0])
          {
          	column1Script.remove();
          	column1.remove();
          }

          if(systemMessages[0])
          {
          	systemMessages.remove();
          }

        	$('#map .map').prepend(msg);
        	initialize();
   			}
			});
			                    
      request.fail(function(msg) {
      	var systemMessages = $('#map .systemMessages');

        systemMessages.html('<h2>Your request was unable to be processed. If the error persists, please contact the web administrator.</h2>');
      });
		}
	};

	// function to convert strings to URL friendly strings
	app.convertToSlug = function(Text){
	    return Text
	        .toLowerCase()
	        .replace(/[^\w ]+/g,'')
	        .replace(/ +/g,'-');
	};

	// Execute application on document ready
	$(document).ready(function(){
		app.init();
	


	});

	

}( jQuery ));

