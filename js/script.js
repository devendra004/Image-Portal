var $ = jQuery;

$(document).ready(function(){
	var ww = $(window).width();
	var wh = $(window).height();

	//close fancybox on esc
	$(document).on('keydown', function(e) { 
		if (e.which == 27) {
			$('.fancybox-close').trigger('click');
		}
	}); 

	// Start cloning the search in mobile
	if( $(window).width() < 976 ){
		$('.autocomplete-search').appendTo('.filter-settings');
	}else{
		$('.autocomplete-search').appendTo('#header .col-md-6');
	}


	$('input,textarea').not('.share-content-inner input[type="text"]').focus(function() {
		$(this).addClass('activ-input');
	});
	$('input,textarea').not('.share-content-inner input[type="text"]').blur(function() {
		$(this).removeClass('activ-input');
	});

	$(".delete-button").on('click', function(){
		var el = $(this);
		if (el.hasClass('active')) {
			el.removeClass('active');
			$('.delete-lightbox').fadeOut(300);
		}else{
			el.addClass('active');
			$('.delete-lightbox').fadeIn(300);
		}
	});

	$(".cancel-button, .lightbox-delete-button").on('click', function(){
		$('.delete-lightbox').fadeOut(300);
		$(".delete-button").removeClass('active');
	});

	// Slick slider plugin functions
	if ($.isFunction($.fn.slick)) {
		
		// Homepage slider before log in
		$('.home-slider').slick({
			dots: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			autoplay: true,
			autoplaySpeed: 3000,

			responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
					arrows: false,
					fade: true,
				}
			},
			]
		});
	}
	
	if ($.isFunction($.fn.slick)) {
		// Homepage slider after log in
		$('.slider-logged').slick({
			dots: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			autoplay: true,
			autoplaySpeed: 3000,
			pauseOnHover: false,

			responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
					arrows: false,
					fade: true,
				}
			},
			]
		});
	}
	
	// ddslick select dropdown functions
	if ($.isFunction($.fn.ddslick)) {
		
		// signup select dropdown
		$('.signup-select').ddslick({
			width: '100%',
		});   
		
		// footer language dropdown
		$('.footer-language').ddslick({
			width: '100%',
		});  
		
		$('.slider-select').ddslick({
			width: '100%',
		});  

		$('#header-select').ddslick({
			width: '100%',
		});   
		
		$('#salutation').ddslick({
			width: '100%',
			selectText: "salutaion"
		});

		$('.general-select').ddslick({
			width: '100%',
			selectText: "salutation"
		});              
	}

	
	// Mobile button click, opens the menu on mobile. The animations can be find in the mobileMenu function
	$('.mobile-btn').click(function(){
		if( $(this).hasClass('opened') ){
			$(this).removeClass('opened');
			mobileMenu();
		}else{
			$(this).addClass('opened');
			mobileMenu();
		}
	});
	
	// Modernizr for ie9 placeholder
	if(!Modernizr.input.placeholder){

		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
				input.removeClass('placeholder');
			}
		}).blur(function() {
			var input = $(this);
			if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.addClass('placeholder');
				input.val(input.attr('placeholder'));
			}
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
			$(this).find('[placeholder]').each(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
				}
			})
		});

	}
	
	// change password error message
	$('#change-pw').click(function(e){
		var pw1 = $('#new-password').val();
		var pw2 = $('#confirm-password').val();
		
		if( pw1 == pw2){
			$('.choose-pw').submit();
		}else{
			$('.pw-error-msg').css('display','block');
			e.preventDefault();
		}
	});
	
	// change password error message remove
	$('.pw-error-msg i').click(function(){
		$(this).parent().fadeOut(200);
	});
	
	// Start Header autocomplete search function
	// An array about information, each result is an object 
	var projects = [
	{
		label: "Hotel in Warsaw",
		results: 402,
		alt: "Hotel",
		icon: "img/search-img-1.png"
	},
	{
		label: "Hotel in Viena",
		results: 289,
		alt: "Hotel",
		icon: "img/search-img-2.png"
	},
	{
		label: "Hotel in London",
		results: 58,
		alt: "Hotel",
		icon: "img/search-img-3.png"
	},
	{
		label: "Hotel in Budapest",
		results: 12,
		alt: "Hotel",
		icon: "img/search-img-4.png"
	}
	];

	$( "#search-inner" ).autocomplete({
		minLength: 1,
		source: projects,
		focus: function( event, ui ) {
			$( "#search-inner" ).val( ui.item.label );
			return false;
		},
		select: function( event, ui ) {
			$( "#search-inner" ).val( ui.item.label );
			$( "#project-id" ).val( ui.item.value );

			return false;
		}
	})

    // appending the information into an ul list element
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
    	ul.addClass('header-search');
    	ul.appendTo('.autocomplete-search form fieldset');
    	return $( "<li>" )
    	.append( '<a>' + '<img src=' + item.icon + ' alt="' + item.alt + '" />' + item.label + '<span>' + item.results + ' results</span>' + '</a>' )
    	.appendTo( ul );
    };
    
    // in mobile view change the placeholder value
    if( $(window).width() < 1025 ){
    	$('#search-inner').attr('placeholder', 'Search');
    }else{
    	$('#search-inner').attr('placeholder', 'Find your perfect photo or video');
    }
    
	// End Header autocomplete search function
	
	// Start Header autocomplete search function
	// An array about information, each result is an object 
	var projects_2 = [
	{
		label: "Hotel in Warsaw",
		results: 402,
		alt: "Hotel",
		icon: "img/search-img-1.png"
	},
	{
		label: "Hotel in Viena",
		results: 289,
		alt: "Hotel",
		icon: "img/search-img-2.png"
	},
	{
		label: "Hotel in London",
		results: 58,
		alt: "Hotel",
		icon: "img/search-img-3.png"
	},
	{
		label: "Hotel in Budapest",
		results: 12,
		alt: "Hotel",
		icon: "img/search-img-4.png"
	}
	];

	$( "#slider-search" ).autocomplete({
		minLength: 1,
		source: projects,
		focus: function( event, ui ) {
			$( "#slider-search" ).val( ui.item.label );
			return false;
		},
		select: function( event, ui ) {
			$( "#slider-search" ).val( ui.item.label );
			$( "#project-id" ).val( ui.item.value );

			return false;
		}
	})

    // appending the information into an ul list element
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
    	ul.addClass('slider-auto-search');
    	ul.appendTo('.slider-search form fieldset');
    	return $( "<li>" )
    	.append( '<a>' + '<img src=' + item.icon + ' alt="' + item.alt + '" />' + item.label + '<span>' + item.results + ' results</span>' + '</a>' )
    	.appendTo( ul );
    };
    
    // in mobile view change the placeholder value
    if( $(window).width() < 1025 ){
    	$('#slider-search').attr('placeholder', 'Search');
    }else{
    	$('#slider-search').attr('placeholder', 'Find your perfect photo or video');
    }
    
	// End Header autocomplete search function
	
	
	// View option click change style
	$('.view-option li a').click(function(e){
		e.preventDefault();
		var el = $(this);
		
		if( el.hasClass('active') ){
			
		}else{
			$('.view-option li a').removeClass('active');
			el.addClass('active');
		}
	});
	
	
	//************* Categories page change the view mode for the result elements
	var isoOptions = {
		itemSelector : '.result-item',
		layoutMode : 'masonry',
		masonry : {
			gutter : '.gutter-size'
		}
	};
	
	// initialize Isotope
	var $grid = $('.result-inner').isotope(isoOptions);
	var isActive = true;
	var elem = $('.result-inner');

	calcRows();
	
	$('.view-option li a').on('click', function(e) {
		
		e.preventDefault();
		if ($(this).hasClass('nested')) {
			elem.fadeOut(150, function() {
				elem.removeClass('thumb').addClass('nested');
				elem.fadeIn(150);
				setTimeout(function(){
					$('.result-inner').isotope(isoOptions);
				}, 150);
			});
			
		} else if ($(this).hasClass('thumb')) {
			
			$(".result-inner").fadeOut( 150, function() {
				$(".result-inner").fadeIn(150);
			});

			elem.fadeOut(150, function() {
				elem.removeClass('nested').addClass('thumb');
				elem.fadeIn(150);
				var filH = $('#wrapper').height();
				if( $(window).width() > 992 ){
					$('.filter-inner').css('min-height',filH + 100);
				}
				setTimeout(function(){
					$('.result-inner').isotope('destroy');
				}, 0);
			});
			
		}
	});
	
	function msieversion() {
		var ua = window.navigator.userAgent;
		var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){      // If Internet Explorer, return version number
        	$('.result-item-inner').css({
        		'display': 'block'
        	});
        	$('.result-inner .result-item .result-item-inner > div').css({
        		'display': 'block'
        	});
        }else{        
        	$('.result-item-inner').css({
        		'display': 'table'
        	});

        	$('.thumb.result-inner .result-item .result-item-inner > div').css({
        		'display': 'table-cell'
        	});

        	return false;
        }
        
    }

    $('.view-option li .nested').on('click', function(){

    	setTimeout(function(){
    		$grid.isotope( isoOptions ); // re-initialize
    	}, 200);


    	isActive = !isActive;
    });

	// Filter button function initialize
	filterBtn();
	
	$('.create-lightbox, .new-lightbox').on('click', function(){
		var el = $(this);

		if (el.hasClass('active')) {
			el.removeClass('active');
			el.next('.lightbox-dropdown').animate({
				'opacity': '0'
			}, 100);
			el.next('.lightbox-dropdown').css('display','none');
		}else{
			el.addClass('active');
			el.next('.lightbox-dropdown').animate({
				'opacity': '1'
			}, 100);
			el.next('.lightbox-dropdown').css('display','block');
		}
	});


	// Start Close popups if clicked outside

	$(document).mouseup(function (e) {
		var popupTrigger = $(".color-picker-outer a, .create-lightbox, .new-lightbox");
		var popup = $('.lightbox-dropdown, .color-picker-dropdown')

		if (!popupTrigger.is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
			popup.fadeOut(200);
			popupTrigger.removeClass("active");
		};
	});

	//End Close popups if clicked outside

	$(document).on('mouseleave','.filter-result-container .nested .result-item',function(){
		var el = $(this);
		el.removeClass('result-hovered');
		$('.share-btn').removeClass('share-open');
		$('.share-content-inner').hide();
		$('.result-lightbox span').removeClass('hovered-lightbox');
		$('.result-scroll-container').hide();
	});


	$(document).on('click','body .result-lightbox span',function(){
		var el = $(this);


		if( el.hasClass('hovered-lightbox') ){
			el.removeClass('hovered-lightbox');
			el.next().stop().fadeOut(500);
		}else{
			$('.result-lightbox span').removeClass('hovered-lightbox');
			$('.result-lightbox .result-scroll-container').hide();
			el.addClass('hovered-lightbox');
			el.next().stop().fadeIn(500);
			$('.share-btn').removeClass('share-open');
			$('.share-content-inner').hide();
		}
	});

	// END Sort and filter page hover effect
	
	$('.save-btn').on('click', function(e){
		e.preventDefault();
		var el = $(this);
		if( el.hasClass('opened') ){
			el.removeClass('opened');
			$('.save-inner').fadeOut(500);
		}else{
			el.addClass('opened');
			$('.save-inner').fadeIn(500);
			$('.share-btn').removeClass('share-open');
			$('.share-content-inner').hide();
		}
	});


	$(document).mouseup(function (e) {
		var popupTrigger = $(".save-btn");
		var popup = $('.save-inner')

		if (!popupTrigger.is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
			popup.fadeOut(200);
			popupTrigger.removeClass("opened");
		};
	});


	$(document).mouseup(function (e) {
		var popupTrigger = $(".share-btn ");
		var popup = $('.share-content-inner')

		if (!popupTrigger.is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
			popup.fadeOut(200);
			popupTrigger.removeClass("share-open");
		};
	});

	
	$('#wrapper').mouseup(function (e){
		var container1 = $('.photo-description .save-inner');
		var container2 = $('.photo-description .share-content-inner');
		var container3 = $('.lightbox-download-option .save-inner');
		var container4 = $('.lightbox-download-option .share-content-inner');

	    if (!container1.is(e.target) // if the target of the click isn't the container...
	        && container1.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	    	$('.photo-description .save-btn').removeClass('opened');
	    	$('.photo-description .save-inner').hide();
	    }
	    
	    if (!container2.is(e.target) // if the target of the click isn't the container...
	        && container2.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	    	$('.photo-description .share-btn').removeClass('share-open');
	    	$('.photo-description .share-content-inner').hide();
	    }
	    
	    if (!container3.is(e.target) // if the target of the click isn't the container...
	        && container3.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	    	$('.lightbox-download-option .save-btn').removeClass('opened');
	    	$('.lightbox-download-option .save-inner').hide();
	    }
	    
	    if (!container4.is(e.target) // if the target of the click isn't the container...
	        && container4.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	    	$('.lightbox-download-option .share-btn').removeClass('share-open');
	    	$('.lightbox-download-option .share-content-inner').hide();
	    }
	});
	
	//START Lightbox detail page table click checkbox is checked
	$('.lightbox-detail-wrapper .lightbox-download-option table tr').click(function(){
		var el = $(this);
		
		if( el.hasClass('checked') ){
			el.removeClass('checked');
			el.find('input[type="radio"]').prop('checked', false);
		}else{
			$('.lightbox-download-option table tr').removeClass('checked');
			el.addClass('checked');
			el.find('input[type="radio"]').prop('checked', true);
		}
	});

	$('.edit-filter-container .lightbox-download-option table tr').click(function(){
		var el = $(this);
		
		if( el.hasClass('checked') ){
			el.removeClass('checked');
			el.find('input[type="radio"]').prop('checked', false);
		}else{
			$('.edit-filter-container .lightbox-download-option table tr').removeClass('checked');
			el.addClass('checked');
			el.find('input[type="radio"]').prop('checked', true);
		}
		
	});

	// start admin checklist
	$('.user-container li, .albums-container li').click(function(){
		var el = $(this);
		
		if( el.hasClass('checked') ){
			el.removeClass('checked');
			el.find('input[type="checkbox"]').prop('checked', false);
		}else{
			el.addClass('checked');
			el.find('input[type="checkbox"]').prop('checked', true);
		}
		
	});

	$('.user-container li span label, .albums-container li span label').click(function(){
		var closestLi = $(this).closest('li');

		if (closestLi.hasClass('checked')) {
			closestLi.removeClass('checked');
			closestLi.find('input[type="checkbox"]').prop('checked', false);
		}else{
			closestLi.addClass('checked');
			closestLi.find('input[type="checkbox"]').prop('checked', true);
		}
	});
	// end admin checklist

	$('.lightbox-detail-wrapper table tr td label, .edit-filter-container table tr td label').click(function(){
		$(this).closest('tr').addClass('checked');
	});
	//END Lightbox detail page table click checkbox is checked
	
	$('.photo-description table tr').click(function(){
		var el = $(this);
		if( el.hasClass('checked-2') ){
			el.removeClass('checked-2');
		}else{
			$('.lightbox-download-option table tr').removeClass('checked-2');
			el.addClass('checked-2');
			el.find('input[type="radio"]').prop('checked', true);
		}
	});
	
	$('.photo-description table tr td label').click(function(){
		$(this).closest('tr').addClass('checked-2');
	});
	
	// search-btn click slidedown the search filter
	$('.search-btn').click(function(){
		var el = $(this);
		
		if( el.hasClass('search-opened') ){
			el.removeClass('search-opened');
			$('.filter-settings').slideUp(100);
			setTimeout(function(){
				$('.filter-settings').removeAttr('style');
			},200);
			$('.filter-inner').fadeOut(200);
			$('#filter-btn').removeClass('filter-down');
		}else{
			el.addClass('search-opened');
			$('.filter-settings').slideDown(100);
		}
	});



	// If the custom date checkbox is checked the 2 inputs will fade in
	$('.date-check').click(function(){
		var el = $(this);
		
		if(el.hasClass('checked')){
			el.removeClass('checked');
			$('.custom-date').fadeOut(200);
		}else{
			el.addClass('checked');
			$('.custom-date').fadeIn(200);
		}
	});
	
	// Filter accordions function
	$('.filter-inner h3, .edit-filter h3').click(function(){
		var el = $(this);
		
		if( el.hasClass('filter-opened') ){
			el.removeClass('filter-opened');
			el.next().slideUp(200);
		}else{
			el.addClass('filter-opened');
			el.next().slideDown(200);
		}
	});
	
	// Add active class for the my account page se;lect dropdown link 
	$('.dd-selected').click(function(){
		$(this).toggleClass('active');
	});
	
	// Datepicker functions 
	// If the width is higher than 767 using the jqueryui datepicker
	if( ww > 767){
		$('.select-date').datepicker({
			showOtherMonths: true,
			selectOtherMonths: true,
			firstDay: 1,
			dayNamesMin: ['S', 'M', 'T', 'W', 'T', 'F', 'S']
		});
	}
	
	var w2 = ww / 2;
	$('.lightbox-detail .result-item').each(function(){
		var el = $(this);
		var x = el.offset().left;
		var z = w2 - x;
		
		if ( z < 0 ){
			$(el).find('.share-content-inner').removeClass('right').addClass('left');
		}else{
			
			$(el).find('.share-content-inner').removeClass('left').addClass('right');
			
		}
	});
	
	$(document).on('click', 'body .share-btn', function(e){
		e.preventDefault();
		var el = $(this);
		
		if( el.hasClass('share-open') ){
			el.removeClass('share-open');
			el.next().fadeOut(500);
		}else{
			$('.share-btn').removeClass('share-open');
			$('.share-content-inner').hide();
			el.addClass('share-open');
			el.next().fadeIn(500);
			$('.select-date').datepicker({
				showOtherMonths: true,
				selectOtherMonths: true,
				firstDay: 1,
				dayNamesMin: ['S', 'M', 'T', 'W', 'T', 'F', 'S']
			});
			$('.result-lightbox span').removeClass('hovered-lightbox');
			$('.result-lightbox .result-scroll-container').hide();
			$('.save-btn').removeClass('opened');
			$('.save-inner').hide();
			
			
		}
	});
	
	$("#starting-btn").click(function() {
	    var offset = 20; //Offset of 20px

	    $('html, body').animate({
	    	scrollTop: $(".signup-form").offset().top + offset
	    }, 1000);
	});
	
	// START Form validation for the homepage signup form
	$('.signup-form').validate({
		
		rules: {
			firstName: {
				minlength: 3,
				required: true
			},
			lastName: {
				minlength: 3,
				required: true
			},
			company: {
				minlength: 3,
				required: true
			},
			phoneNumber: {
				minlength: 3,
				required: true,
				number: true
			},
			email: {
				minlength: 5,
				maxlength: 50,
				required: true,
				email: true
			}
		},
		highlight: function(element) {
			$(element).addClass('has_error');
		},
		unhighlight: function(element) {
			$(element).removeClass('has_error');

					// After the form is completed corect this will unbind the navigation, so we can use it

				},
				errorElement: 'span',
				errorClass: 'help_block',
				focusInvalid: false,
				submitHandler: function(form) {

				}

			});
	// END Form validation for the homepage signup form 
	
	// START Form validation for the login form
	$('.login-form').validate({
		
		rules: {
			username: {
				minlength: 3,
				required: true
			},
			password: {
				minlength: 3,
				required: true
			}
		},
		highlight: function(element) {
			$(element).addClass('has_error');
		},
		unhighlight: function(element) {
			$(element).removeClass('has_error');

					// After the form is completed corect this will unbind the navigation, so we can use it

				},
				errorElement: 'span',
				errorClass: 'help_block',
				focusInvalid: false,
				submitHandler: function(form) {

				}

			});
	// END Form validation for the login form
	
	// START Form validation for the my account form
	$('.account-form').validate({
		
		rules: {
			accountFirstName: {
				minlength: 3,
				required: true
			},
			accountLastName: {
				minlength: 3,
				required: true
			},
			accountCompany: {
				minlength: 3,
				required: true
			},
			accountPhoneNumber: {
				minlength: 3,
				required: true,
				number: true
			},
			accountEmail: {
				minlength: 5,
				maxlength: 50,
				required: true,
				email: true
			}
		},
		highlight: function(element) {
			$(element).addClass('has_error');
		},
		unhighlight: function(element) {
			$(element).removeClass('has_error');

					// After the form is completed corect this will unbind the navigation, so we can use it

				},
				errorElement: 'span',
				errorClass: 'help_block',
				focusInvalid: false,
				submitHandler: function(form) {

				}

			});
	// END Form validation for the my account form
	
	if( ww < 768 ){
		$('.lightbox-wrapper .lightbox-inner').each(function(){
			var figH = $(this).find('figure').height();
			var imgH = $(this).find('img').height();
			var topM = (figH - imgH) / 2;
			
			$(this).find('img').css('margin-top', topM);
		});
	}
	
	
	$('.filter-result-container .result-item').each(function(){
		var elImg = $(this).find('.bg-image');
		var imgSrc = elImg.attr('src');
		
		elImg.closest('a').css({
			'background-image':'url(' + imgSrc + ')',
		});
		
	});
	
	// color picker

	$('.color-picker').on('click', function(){
		var el = $(this);
		var elColor = el.data('color');

		$('.color-picker').removeClass('active');

		if (el.hasClass('active')) {
			el.removeClass('active');
		} else{
			el.addClass('active');
		}

		$('.picked-color').css("background" , elColor);
	});

	//activate color picker

	$('.color-picker-outer a').on('click', function(e){
		e.preventDefault();
		var el = $(this);
		if (el.hasClass('active')) {
			el.removeClass('active');
			el.next().fadeOut();
		}else{
			el.addClass('active');
			el.next().fadeIn()
		}
	});



	$('.ui.dropdown').dropdown();

	// start overlay hover effects

	$('.filter-overlay').on('click', function(){
		var el = $(this);
		if (el.hasClass('active')) {
			el.removeClass('active');
		}else{
			el.addClass('active');
		}
	});
	
	// end overlay hover effects

	$('.expand-icon').on('mouseenter', function(){
		$(this).prev().css('background', 'rgba(0, 0, 0, 0.3)');
	});

	$('.expand-icon').on('mouseleave', function(){
		$(this).prev().removeAttr('style');
	})


	//start search gourp

	$('#search-group').keyup(function () {
		var valThis = this.value.toLowerCase(),
		lenght  = this.value.length;

		$('.user-container>li').each(function () {

			var text  = $(this).find('.name').text(),
			textL = text.toLowerCase();
			// htmlR = '<b>' + text.substr(0, lenght) + '</b>' + text.substr(lenght);
			(textL.indexOf(valThis) == 0) ? $(this).show() : $(this).hide();
		});
	});

	$('#search-albums').keyup(function () {
		var valThis = this.value.toLowerCase(),
		lenght  = this.value.length;

		$('.albums-container>li').each(function () {

			var text  = $(this).find('.name').text(),
			textL = text.toLowerCase();
			// htmlR = '<b>' + text.substr(0, lenght) + '</b>' + text.substr(lenght);
			(textL.indexOf(valThis) == 0) ? $(this).show() : $(this).hide();
		});
	});


	$('#permissions-group').keyup(function () {
		var valThis = this.value.toLowerCase(),
		lenght  = this.value.length;

		$(".permissions-container dt strong").removeClass('active');
		$('.permissions-container dd').slideUp();
		
		$('.permissions-container dt').each(function () {

			var text  = $(this).find('strong').text(),
			textL = text.toLowerCase();
			// htmlR = '<b>' + text.substr(0, lenght) + '</b>' + text.substr(lenght);
			(textL.indexOf(valThis) == 0) ? $(this).show() : $(this).hide();
		});
	});


	$(".permissions-container dt strong").click(function(){
		var el = $(this);
		if ( $(this).hasClass('active')){
			$(".permissions-container dt strong").removeClass('active');
			$('.permissions-container dd').slideUp();
		}else{
			$(".permissions-container dt strong").removeClass('active');
			$('.permissions-container dd').slideUp();
			$(this).addClass('active').closest("dt").next('dd').slideDown();
		}
	});


	// start checkbox functions
	$("#check--all").change(function () {
		$(".permissions-container input:checkbox").prop('checked', $(this).prop("checked"));
	});

	$(".group--check--all").change(function () {
		var el = $(this);
		el.closest("dt").next("dd").find("input:checkbox").prop('checked', $(this).prop("checked"));

		var alL = $('.permissions-container').find('dt').length;
		var checkL = $('.permissions-container dt').find('input:checkbox:checked').length;

		if( alL == checkL ){
			$("#check--all").prop("checked", true);
		}else{
			$("#check--all").prop("checked", false);
		}

	});

	$('.permissions-fields input:checkbox').change(function(){
		var alP = $(this).closest('dd').prev().find('input:checkbox');
		var alL = $(this).closest('dd').find('li').length;
		var checkL = $(this).closest('dd').find('input:checkbox:checked').length;

		if( alP.prop("checked") == true ){
			alP.prop("checked", false);
		}

		if( alL == checkL ){
			alP.prop("checked", true);
		}

	});
	// End checkbox functions

	// start jScrollPane function

	$('.general-scroll-wrapper').jScrollPane({
		showArrows: false,
		autoReinitialise: true
	});

	$('.result-scroll-container ul').jScrollPane({
		showArrows: false,
		autoReinitialise: true
	});

	$('.lightbox-scroll-container ul').jScrollPane({
		showArrows: false,
		autoReinitialise: true
	});

	

	$('.list-header .search--button--mobile').on('click', function(){
		var el = $(this);

		if (el.hasClass('active')) {
			el.removeClass('active');
			el.next('.search-wrapper').slideUp();
		}else{
			el.addClass('active');	
			el.next('.search-wrapper').slideDown();
		}
	})


	$('.sub-header-wrapper .search--button--mobile').on('click', function(){
		var el = $(this);

		if (el.hasClass('active')) {
			el.removeClass('active');
			el.closest('.sub-header-wrapper ').find('.search-wrapper').slideUp();
		}else{
			el.addClass('active');	
			el.closest('.sub-header-wrapper ').find('.search-wrapper').slideDown();
		}
	})
	
});

$(window).load(function(){
	
	var ww = $(window).width();
	
	if( $('.slider-caption').height() < 330 ) {
		$('.slider-caption-inner').css({
			'display': 'block',
			'padding-top': '60px'
		});
	}else{
		$('.slider-caption-inner').css({
			'display': 'table-cell',
			'vertical-align': 'middle',
			'padding-top': '0px'
		});
	}
	
	var isoOptions = {
		itemSelector : '.result-item',
		layoutMode : 'masonry',
		masonry : {
			gutter : '.gutter-size'
		}
	};
	
	// initialize Isotope
	var $grid = $('.result-inner').isotope( isoOptions );
	var $grid2 = $('.lightbox-detail').isotope( isoOptions );
	
	menuHeight();


	//start faccybox and cync gallery

	$('.expand-icon.fancybox').on('click', function(){
		var el = $(this);
		$('.result-item').removeClass('current_item');
		el.closest('.result-item').addClass('current_item');
	});


	$(".fancybox").fancybox({
		padding: 0,
		margin: 40,
		width: 'auto',
		fitToView: true,
		scrollOutside: false,
		afterClose: function(){
			$('body').removeClass('fancybox-opened');
			var elIndex = $('.slick-active').index();
			$('#fancybox-content-1').removeClass('opened');
			$('.slider-1').slick('destroy');
			$('html,body').animate({
				scrollTop: $('#index-' + elIndex).offset().top - 90
			}, 1000);
		},
		beforeShow: function(){

			$('.slider-1').slick({
				accessibility: true,
				dots: false,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				speed: 500,
			});

			$('.slider-1').resize();

			setTimeout(function(){
				$('.slider-1').slick('slickGoTo',parseFloat($('.current_item').index()) - 1);
			}, 100)

			setTimeout(function(){
				$('#fancybox-content-1').addClass('opened');

			}, 800)

			var wW = $(window).width();
			var wH = $(window).height();
			var uI = $('#fancybox-content-1 .ui-elements').outerHeight();
			var sW = $('#fancybox-content-1 .scrollbar-wrapper-single ').outerHeight();
			var cH = wH - 82 - uI;
			var sH = wH - 80;
			if (wW > 1024) {

				$('#fancybox-content-1 .scrollbar-wrapper').height(cH);
				$('#fancybox-content-1 .slider-container').height(sH);
				$('#fancybox-content-1 .edit-filter-container-single').height(sH)
				$('#fancybox-content-1 .scrollbar-wrapper-single').height(sW)

				$('.scrollbar-wrapper, .edit-filter-container-single').jScrollPane({
					showArrows: false,
					autoReinitialise: true
				});
			};
		},
		afterShow: function(){
			// bind arrow left and right to navigation
			$(document).keydown(function(e){
				if (e.keyCode == 37) { 
					$('.slick-prev').trigger('click')
					return false;
				} else if(e.keyCode == 39){
					$('.slick-next').trigger('click')
					return false;
				}
			});
			$('body').addClass('fancybox-opened');
		}
	});
});

$(window).resize(function(){

	var ww = $(window).width();
	var wh = $(window).height();

	//Start calculate how many rows will fit in window

	calcRows();

	//End calculate how many rows will fit in window

	// Filter height function initialize
	//filterHeight();
	var isoOptions = {
		itemSelector : '.result-item',
		layoutMode : 'masonry',
		masonry : {
			gutter : '.gutter-size'
		}
	};
	
	if( ww < 993 ){
		if( $('.filter-result-container').hasClass('filter-opened') ){
			$('.search-btn').addClass('search-opened');
			$('.filter-settings').show();
		}
	}

	// if( ww > 991 ){
	// 	$('#overlay').animate({
	// 		opacity: 0
	// 	}, 300, '', function() {
	// 		$('#overlay').hide();	
	// 	});
	// 	$('#wrapper').animate({
	// 		marginLeft: 0,
	// 		marginRight: 0
	// 	}, 300);
		
	// 	$('.filter-inner').animate({
	// 		left: 0
	// 	}, 300);
		
	// 	$('.filter-settings.sticky').animate({
	// 		left: 0
	// 	}, 300);
		
	// 	$('.header-right').css({
	// 		'position': 'relative',
	// 		'right': 0
	// 	});
		
	// 	$('html, body').removeAttr('style');
	// }else{
	// 	$('#overlay').animate({
	// 		opacity: 0
	// 	}, 300, '', function() {
	// 		$('#overlay').hide();	
	// 	});
	// 	$('#wrapper').animate({
	// 		marginLeft: 0,
	// 		marginRight: 0
	// 	}, 300);
		
	// 	$('.filter-inner').animate({
	// 		left: 0
	// 	}, 300);
		
	// 	$('.filter-settings.sticky').animate({
	// 		left: 0
	// 	}, 300);
		
	// 	$('.header-right').css({
	// 		'position': 'fixed',
	// 		'right': '-270px'
	// 	});
		
	// 	$('html, body').removeAttr('style');
	// }
	
	
	if( $('.slider-caption').height() < 330 ) {
		$('.slider-caption-inner').css({
			'display': 'block',
			'padding-top': '60px'
		});
	}else{
		$('.slider-caption-inner').css({
			'display': 'table-cell',
			'vertical-align': 'middle',
			'padding-top': '0px'
		});
	}
	
	
	// Start cloning the search in mobile
	if( $(window).width() < 976 ){
		$('.autocomplete-search').appendTo('.filter-settings');
	}else{
		$('.autocomplete-search').appendTo('#header .col-md-6');
	}
	
	// in mobile view change the placeholder value
	if( ww < 1025 ){
		$('#search-inner').attr('placeholder', 'Search');
	}else{
		$('#search-inner').attr('placeholder', 'Find your perfect photo or video');
	}

    // Datepicker functions 
	// If the width is higher than 767 using the jqueryui datepicker
	if( ww > 767){
		$('.select-date').datepicker({
			showOtherMonths: true,
			selectOtherMonths: true,
			firstDay: 1,
			dayNamesMin: [ 'S', 'M', 'T', 'W', 'T', 'F', 'S']
		});
	}
	

	
	if( ww < 768 ){
		$('.lightbox-wrapper .lightbox-inner').each(function(){
			var figH = $(this).find('figure').height();
			var imgH = $(this).find('img').height();
			var topM = (figH - imgH) / 2;
			
			$(this).find('img').css('margin-top', topM);
		});
		menuHeight();
	}
	
	menuHeight();

});

function menuHeight(){
	var ww = $(window).width();
	var wh = $(window).height();

	if( wh > ww ){
		if( ww < 970 ){

			$('.header-right').height(wh);
			$('.header-right > ul').height(wh);
			$('.filter-inner').height(wh);
			$('.filter-inner form').height(wh-110);
		}else{

			$('.header-right').height('auto');
			$('.header-right > ul').height('auto');
			$('.filter-inner').height('auto');
			$('.filter-inner form').height('auto');
		}
	}else{
		if( ww < 970 ){

			$('.header-right').height(wh);
			$('.header-right > ul').height(wh);
			$('.filter-inner').height(wh + 50);
			$('.filter-inner form').height(wh + 50);
		}else{

			$('.header-right').height('auto');
			$('.header-right > ul').height('auto');
			$('.filter-inner').height('auto');
			$('.filter-inner form').height('auto');
		}
	}
}

// Filter menu button function
function filterBtn() {
	var ww = $(window).width();
	var wh = $(window).height();

	if( ww > 767 ){
		
		// Filter dropdown appear function
		var isoOptions = {
			itemSelector : '.result-item',
			layoutMode : 'masonry',
			masonry : {
				gutter : '.gutter-size'
			}
		};
		
		// initialize Isotope
		var $grid = $('.result-inner').isotope( isoOptions );
		var isActive = true;
		$('#filter-btn').click(function(e){
			e.preventDefault();
			var el = $(this);
			
			if( el.hasClass('filter-down') ){
				el.removeClass('filter-down');
				
				$('.filter-result-container').removeClass('filter-opened');
				
				$('.filter-inner').fadeOut(100);

				$('.result-inner').removeClass('result-floated');
				
				setTimeout(function(){
					if ( !isActive ) {
				    	$('.result-inner.nested').isotope(isoOptions); // destroy
				    }

				    isActive = !isActive;
				}, 150);

				if( $(window).width() > 992 ){
					$('.filter-inner').css('min-height','auto');
				}
				
				if( ww < 1024 ){
					$('#header').removeClass('sticky');
					$('.filter-settings').removeClass('sticky')
					$("html, body").animate({ scrollTop: 0 }, 200);
				}
				
			}else{
				el.addClass('filter-down');
				$('.filter-result-container').addClass('filter-opened');

				setTimeout(function(){
					if ( isActive ) {
				    	$('.result-inner.nested').isotope(isoOptions); // destroy
				    }

				    isActive = !isActive;

				}, 50);
				
				$('.filter-inner').stop().fadeIn(100);
				$('.result-inner').addClass('result-floated');
				
				if( ww < 1024 ){
					$('#header').addClass('sticky');
					$('.filter-settings').addClass('sticky');
				}
				
			}
		});

	}else{
		// Filter dropdown appear function
		$('#filter-btn').click(function(e){
			e.preventDefault();
			
			var el = $(this);
			
			if( el.hasClass('filter-down') ){
				el.removeClass('filter-down');
				
				$('.filter-inner').fadeOut(300);
				
				$('#header').removeClass('sticky');
				$('.filter-settings').removeClass('sticky');
				$("html, body").animate({ scrollTop: 0 }, 200);
				$('.result-inner').removeClass('result-floated');

			}else{
				el.addClass('filter-down');
				$('.filter-inner').fadeIn(300);
				
				$('#header').addClass('sticky');
				$('.filter-settings').addClass('sticky');
				$('.result-inner').addClass('result-floated');

			}
		});
	}
}

// mobile menu function
function mobileMenu() {
	
	if($('.header-right').css('right') != '-270px') {
		$('#overlay').animate({
			opacity: 0
		}, 300, '', function() {
			$('#overlay').hide();	
		});
		
		$('.header-right').animate({
			right: -270
		}, 300);
		$('#wrapper').animate({
			marginLeft: 0,
			marginRight: 0
		}, 300);
		
		$('.filter-inner').animate({
			left: 0
		}, 300);
		
		$('.filter-settings.sticky').animate({
			left: 0
		}, 300);
		
		$('html, body, #header').removeAttr('style');

	} else {

		$('#overlay').css({
			right: 0,
			top: 58,
			opacity: 0
		});
		
		$('#overlay').show().animate({
			opacity: 0.5
		}, 300);
		
		
		$('.header-right').animate({
			right: 0
		}, 300);

		$('#wrapper').animate({
			marginLeft: -270,
			marginRight: 270
		}, 300);
		
		$('.filter-inner').animate({
			left: -270
		}, 300);
		
		$('.filter-settings.sticky').animate({
			left: -270
		}, 300);
		
		$('#header').css('position', 'absolute');
		$('html, body').css('overflow','hidden');
	}
}


// on page load...
$(window).load(function() {
	moveProgressBar();

	//mobile filter 

	$('.mobile-filter').on('click', function(e){
		var wh = $(window).height();

		$('.filter-inner-mobile').height(wh-150);
		$('.filter-inner-mobile form').height(wh-150);

		e.preventDefault();
		var el = $(this);
		var wr = $('.filter-inner-mobile')

		if (el.hasClass('active')) {
			el.removeClass('active');
			wr.stop().slideUp(300);
		}else{
			el.addClass('active');
			wr.stop().slideDown(300);
		}
	})

	$(document).mouseup(function (e) {
		var popupTrigger = $(".mobile-filter");
		var popup = $('.filter-inner-mobile')

		if (!popupTrigger.is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
			popup.slideUp(300);
			popupTrigger.removeClass("active");
		};

	});

	//edit single photo

	$('.edit-single-photo').on('click', function(e){
		e.preventDefault();

		var el = $(this);

		if (el.hasClass('active')) {
			el.removeClass('active');
			$('.overlay-wrapper-filter').removeClass('active');
		}else{
			el.addClass('active');
			$('.overlay-wrapper-filter').addClass('active');
		}

	});

	$('.discard-button').on('click', function(){
		$('.edit-single-photo').removeClass('active');
		$('.overlay-wrapper-filter').removeClass('active');
		$('html,body').animate({
			scrollTop: $('.edit-single-photo').offset().top
		}, 1000);
	});


});

// on browser resize...
$(window).resize(function() {
	moveProgressBar();

	if ($('#filter-btn').hasClass('filter-down')) {
		$('#filter-btn').trigger('click');

		setTimeout(function(){
			$('.search-btn.search-opened').trigger('click');
		}, 200);
	}

});

// SIGNATURE PROGRESS
function moveProgressBar() {
	var getPercent = ($('.progress-wrap').data('progress-percent') / 100);
	var getProgressWrapWidth = $('.progress-wrap').width();
	var progressTotal = getPercent * getProgressWrapWidth;
	var animationLength = 1500;

    // on page load, animate percentage bar to data percentage length
    // .stop() used to prevent animation queueing
    $('.progress-bar').stop().animate({
    	left: progressTotal
    }, animationLength);
}

// Calculate rows to fit full width
function calcRows(){
	var ww = $(window).width();
	var wh = $(window).height();

	var wwMargin = ww - 120;
	var wwMobilemargin = ww - 20;

	var calcRows = Math.floor(wwMargin / (295.5));
	var calcRowsMobile = Math.floor(wwMobilemargin / (295.5));

	var containerWidth = (calcRows * (280.5 + 20)) - 20; 
	var containerMobileWidth = (calcRowsMobile * (280.5 + 20)) - 20; 

	if (ww > 767) {
		$('.center-container').width(containerWidth);
	}else if (ww < 767 && ww > 300){
		$('.center-container').width(containerMobileWidth);
	} else{
		$('.center-container').width('auto');
	}
}