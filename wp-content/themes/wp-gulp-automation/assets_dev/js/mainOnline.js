$(document).ready(function(){

	var widthScreen = $(window).width();

	// Animation text typed.js
	//console.log(window.location.pathname);

	if(window.location.pathname=='/'){
		var typed = new Typed("#typed", {
	    	stringsElement: '.welcoming',
	    	typeSpeed: 50,
		    backSpeed: 1,
		    backDelay: 500,
		    startDelay: 500,
		    loop: false,
		    onComplete: function(self) { setTimeout(init(), 1000); console.log('typed');}
		});
	}else{
		init();
	}

	//Object follow mouse
	$( document ).on( "mousemove", function( event ) {
	  TweenMax.to($('.bullet'),0.4,{css:
	    {
	      left:event.pageX,
	      top:event.pageY
	    }
	  })
	});

	$('.inside').not('.not')
	  .on('mouseenter',function(){
	  TweenMax.to($('.bullet'),0.3,{scale:6});
	})
	  .on('mouseleave',function(){
	  TweenMax.to($('.bullet'),0.2,{scale:1});
	});

	// Perspective 3D mouse mouvement
	function slideMove(){
		$('.slide').mousemove(function(event){
		   var xPos = (event.clientX/$(window).width())-0.5,
		       yPos = (event.clientY/$(window).height())-0.5,
		       image = $('.view-slide'),
		       letter = $('.letter'),
		       head = $('.head-text'),
		       coord = $('.coordinates');

		  TweenLite.to(image, 0.6, {
		    rotationY: 5 * xPos,
		    rotationX: 5 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 900,
		    transformOrigin: 'center'
		  });

		  TweenLite.to(letter, 0.6, {
		    rotationY: 50 * xPos,
		    rotationX: 50 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 900,
		    transformOrigin: 'center'
		  });

		  TweenLite.to(head, 0.6, {
		    rotationY: 8 * xPos,
		    rotationX: 3 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 1000,
		    transformOrigin: 'center'
		  });

		});
	}

	function projectMove(){
		$('.item').mousemove(function(event){
		   var xPos = (event.clientX/$(window).width())-0.5,
		       yPos = (event.clientY/$(window).height())-0.5,
		       image = $('.wrapper'),
		       letter = $('.title-img'),
		       head = $('.view-project');

		  TweenLite.to(image, 0.6, {
		    rotationY: 16 * xPos,
		    rotationX: 20 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 900,
		    transformOrigin: 'center'
		  });

		  TweenLite.to(letter, 0.6, {
		    rotationY: 25 * xPos,
		    rotationX: 25 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 1400,
		    transformOrigin: 'center'
		  });

		  TweenLite.to(head, 0.6, {
		    rotationY: 8 * xPos,
		    rotationX: 3 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 1000,
		    transformOrigin: 'center'
		  });

		});
	}

	function aboutMove(){
		$(window).mousemove(function(event){
		   var xPos = (event.clientX/$(window).width())-0.5,
		       yPos = (event.clientY/$(window).height())-0.5,
		       title1 = $('.about h2'),
		       title2 = $('.about .title'),
		       head = $('.about .head-about'),
		       content = $('.about .content-about');
		       content1 = $('.about .content-about p.one');

		  TweenLite.to(title1, 0.6, {
		    rotationY: 16 * xPos,
		    rotationX: 20 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 900,
		    transformOrigin: 'center'
		  });

		  TweenLite.to(title2, 0.6, {
		    rotationY: -16 * xPos,
		    rotationX: -20 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 900,
		    transformOrigin: 'center'
		  });

		  TweenLite.to(head, 0.6, {
		    rotationY: 25 * xPos,
		    rotationX: 25 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 1400,
		    transformOrigin: 'center'
		  });

		  TweenLite.to(content, 0.6, {
		    rotationY: 12 * xPos,
		    rotationX: 6 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 1000,
		    transformOrigin: 'center'
		  });

		  TweenLite.to(content1, 0.6, {
		    rotationY: -24 * xPos,
		    rotationX: -12 * yPos,
		    ease: Power1.easeOut,
		    transformPerspective: 1000,
		    transformOrigin: 'center'
		  });

		});
	}


	function init(){

		var time = new TimelineMax({onComplete:onLoad});

		// Add clss active to first element
		$('.nav-slides:first-child').addClass('active');
		$('.slide:first-child').addClass('active');

		if(widthScreen<765){

		}else{
			time
			.set($('.slide .title-slide'),{autoAlpha:0})
			.set($('.slide .head-text'),{autoAlpha:0})
			.set($('.slide .desc-slide'),{autoAlpha:0})
			.set($('.slide .view-slide'),{autoAlpha:0})
			.set('.nav-slides.active .after',{height:'inherit'})
		}

		slideMove();
		projectMove();
		aboutMove();
		changeBackButton();

	}

	// Fonction animation home
	function animHome(){

		var time = new TimelineMax();
			var title = $('.active .title-slide');
			var head = $('.active .head-text');
			var content = $('.active .desc-slide');
			var overlay= $('.active .overlay');
			var img= $('.active .view-slide');
			var logo= $('.logo');
			var burger= $('#about');
			var navSlide= $('nav');

			var date = $('.page-project .date');
			var title_project = $('.page-project h1');
			var content_project = $('.page-project .text-content');
			var link = $('.page-project .link-out');
			var section = $('.content-image');
			var project_tag = $('.page-project .tags');
			var item = $('.item');
			var about_title = $('.about .title');
			var about_h2 = $('.about h2');


			time.fromTo(logo,0.2,{x:'-10vw',autoAlpha:0},{x:'0',autoAlpha:1},0.3)
				.fromTo(burger,0.2,{x:'+10vw',autoAlpha:0},{x:'0',autoAlpha:1},0.3)
				.fromTo(title,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},0.3)
				.fromTo(navSlide,0.2,{x:'+10vw',autoAlpha:0},{x:'0',autoAlpha:1},0.3)
				.fromTo(head,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},0.5)
				.fromTo(overlay,0.2,{width:'100%'},{width:'0'},0.3)
				.set(img,{autoAlpha:.7},0.4)
				.fromTo(content,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},0.9)

				.fromTo(date,0.2,{x:'-10vw',autoAlpha:0},{x:'0',autoAlpha:1},0.3)
				.fromTo(link,0.2,{x:'-10vw',autoAlpha:0},{x:'0',autoAlpha:1},0.3)
				.fromTo(title_project,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},0.3)
				.fromTo(project_tag,0.33,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},0.6)
				.fromTo(content_project,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},0.4)
				.fromTo(section,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},0.8)
				.fromTo(item,0.5,{y:'+100px',autoAlpha:0},{y:'0',autoAlpha:1},0.5)
				.fromTo(about_title,0.5,{y:'+100px',autoAlpha:0},{y:'0',autoAlpha:1},0.5)
				.fromTo(about_h2,0.8,{y:'+100px',autoAlpha:0},{y:'0',autoAlpha:1},1);

	}


	// Fonction chargement page
	function onLoad(){

		var time = new TimelineMax({onComplete:animHome});
		var border = $('.left');
		var title = $('.title-slide');
		var head = $('.head-text');
		var content = $('.desc-slide');
		var overlay= $('.overlay');
		var logo= $('.logo');
		var burger= $('.burger');
		var navSlide= $('nav');
		var typed= $('#typed');
		var typedCursor= $('.typed-cursor');

		var date = $('.page-project .date');
		var project_title = $('.page-project h1');
		var project_content = $('.page-project .text-content');
		var project_section = $('.content-image');
		var project_link = $('.page-project .link-out');
		var project_tag = $('.page-project .tags');
		var item = $('.item');
		var about_title = $('.about .title');
		var about_h2 = $('.about h2');

		if(widthScreen<765){
			time//.set(border,{width:'100vw'})
				.set(logo,{autoAlpha:0})
				.set(burger,{autoAlpha:0})
				.set(typed,{autoAlpha:0,display:"none"})
				.set(typedCursor,{autoAlpha:0,display:"none"})
				.to(border,0.2,{width:'1.1vw'},1)
				.set(date,{autoAlpha:0})
				.set(project_title,{autoAlpha:0})
				.set(project_section,{autoAlpha:0})
				.set(project_link,{autoAlpha:0})
				.set(project_tag,{autoAlpha:0})
				.set(project_content,{autoAlpha:0})
				.set(item,{autoAlpha:0})
				.set(about_title,{autoAlpha:0})
				.set(about_h2,{autoAlpha:0});
		}else{
			time//.set(border,{width:'100vw'})
				.set(title,{autoAlpha:0})
				.set(content,{autoAlpha:0})
				.set(head,{autoAlpha:0})
				.set(navSlide,{autoAlpha:0})
				.set(logo,{autoAlpha:0})
				.set(burger,{autoAlpha:0})
				.set(typed,{autoAlpha:0,display:"none"})
				.set(typedCursor,{autoAlpha:0,display:"none"})
				.to(border,0.2,{width:'1.1vw'},1)
				.set(date,{autoAlpha:0})
				.set(project_title,{autoAlpha:0})
				.set(project_section,{autoAlpha:0})
				.set(project_link,{autoAlpha:0})
				.set(project_tag,{autoAlpha:0})
				.set(project_content,{autoAlpha:0})
				.set(item,{autoAlpha:0})
				.set(about_title,{autoAlpha:0})
				.set(about_h2,{autoAlpha:0});
		}


	}


	// Fonction change slide
	function changeSlide(old,neuf,color){

		var time = new TimelineMax();
		// OLD SLIDE
		var oldTitle = $('.active .title-slide');
		var oldHead = $('.active .head-text');
		var oldContent = $('.active .desc-slide');
		var oldImg = $('.active .view-slide');
		var oldOverlay = $('.active .overlay');
		var oldAfter = $('.active .after');


		//NEW SLIDE
		var newTitle = neuf.find('.title-slide');
		var newHead = neuf.find('.head-text');
		var newContent = neuf.find('.desc-slide');
		var newImg = neuf.find('.view-slide');
		var newOverlay = neuf.find('.overlay');
		var newAfter = neuf.find('.after');


		time.to(oldOverlay,0.5,{width:'100%',backgroundColor:color},0.3)
			.set(newOverlay,{width:'100%'},0.3)
			.set(oldImg,{autoAlpha:0},0.8)
			.set(newImg,{autoAlpha:.7},0.8)
			.fromTo(newOverlay,0.5,{width:'100%'},{width:'0%'},0.8)

			.to(oldTitle,0.5,{y:'+50px',autoAlpha:0},0.3)
			.fromTo(newTitle,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},0.8)
			.to(oldHead,0.5,{y:'+50px',autoAlpha:0},0.3)
			.fromTo(newHead,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},1.0)
			.to(oldContent,0.5,{y:'+50px',autoAlpha:0},0.3)
			.fromTo(newContent,0.2,{y:'+50px',autoAlpha:0},{y:'0',autoAlpha:1},1.4)

			.to(oldAfter,0.2,{height:'0px'},1)
			.to(newAfter,0.2,{height:'4px'},1.2)



	}

	// Action au clic sur le nav
	function onClickNav (){
		$('.nav-slides').click(function(){
			var id = $(this).data('id');
			var color = $(this).data('color');
			id = '#'+id;

			if($(this).hasClass('active')){
				console.log('Active');
			}else{
				changeSlide($('.slide.active'),$(id),color);
				$('.slide.active').removeClass('active');
				$('.nav-slides.active').removeClass('active');
				$(this).addClass('active');
				$(id).addClass('active');
			}
		})
	}

	onClickNav();

	function nextHomeContent(){

		var actif = $('.slide.active');
		var nbreSlide = $('.slide').length;
		var nextOne = "";
		var colorDef = "";

		if(actif.index()==nbreSlide-1){
			nextOne = '.slide:first-child';
			nextOneNav = '.nav-slides:first-child';
			colorDef = $(nextOneNav).data('color');
		}else{
			indexActif = actif.index();
			indexActif = indexActif+2;
			nextOne = '.slide:nth-child('+indexActif+')';
			nextOneNav = '.nav-slides:nth-child('+indexActif+')';
			colorDef = $(nextOneNav).data('color');
		}

		var tl = new TimelineMax();

		tl.call(changeSlide, [actif,$(nextOne),colorDef],0.1)
			//.add(changeSlide(actif,$(nextOne)),0.1)
			.call(function() {
			    //addClass, toggleClass, or your custom logic.
			    actif.removeClass('active');
			}, null, null, 0.1)
			.to($('.nav-slides.active').find('.after'),0.2,{height:'0px'})
			.call(function() {
					//addClass, toggleClass, or your custom logic.
					$('.nav-slides.active').removeClass('active');
			}, null, null, 0.2)
			.to($(nextOneNav).find('.after'),0.3,{height:'inherit'})
			.call(function() {
					//addClass, toggleClass, or your custom logic.
					$(nextOneNav).addClass('active');
			}, null, null, 0.3)
			.call(function() {
					//addClass, toggleClass, or your custom logic.
					$(nextOne).addClass('active');
			}, null, null, 0.4);

		console.log('slide next');

	}

	function prevHomeContent(){

		var actif = $('.slide.active');
		var nbreSlide = $('.slide').length;
		var prevOne = "";
		var colorDef = "";

		console.log(actif.index());

		if(actif.index()==0){
			prevOne = '.slide:last-child';
			prevOneNav = '.nav-slides:last-child';
			colorDef = $(prevOneNav).data('color');
		}else{
			indexActif = actif.index();
			indexActif = indexActif;
			prevOne = '.slide:nth-child('+indexActif+')';
			prevOneNav = '.nav-slides:nth-child('+indexActif+')';
			console.log('Actif : '+indexActif);
			colorDef = $(prevOneNav).data('color');
		}

		var tl = new TimelineMax();

		tl.call(changeSlide, [actif,$(prevOne),colorDef],0.1)
			//.add(changeSlide(actif,$(nextOne)),0.1)
			.call(function() {
			    //addClass, toggleClass, or your custom logic.
			    actif.removeClass('active');
			}, null, null, 0.1)
			.to($('.nav-slides.active').find('.after'),0.2,{height:'0px'})
			.call(function() {
					//addClass, toggleClass, or your custom logic.
					$('.nav-slides.active').removeClass('active');
			}, null, null, 0.2)
			.to($(prevOneNav).find('.after'),0.3,{height:'inherit'})
			.call(function() {
					//addClass, toggleClass, or your custom logic.
					$(prevOneNav).addClass('active');
			}, null, null, 0.3)
			.call(function() {
					//addClass, toggleClass, or your custom logic.
					$(prevOne).addClass('active');
			}, null, null, 0.4);

		console.log('slide prev');

	}



	// Slide change on scroll
	$(window).on("mousewheel DOMMouseScroll", _.debounce(function(event){

		event.preventDefault();

		var scroll = event.originalEvent.wheelDelta;

		console.log(scroll);

		if(scroll<0){
			prevHomeContent();
		}else if(scroll>0){
			nextHomeContent();
		}

	},35));



   	function navEnter(){
   		$('.nav-slides').mouseenter(function(e){

			e.preventDefault();


	   		var tl = new TimelineMax();
	   		var after = $(this).find('.after');

	   		tl.to(after,0.2,{height:'inherit'})


	   	})
   	}
   	navEnter();


	function navOut(){
		$('.nav-slides').mouseleave(function(e){
			e.preventDefault();

	   		var tl = new TimelineMax();
	   		var after = $(this).find('.after');

	   		if($(this).hasClass('active')){

	   		}else{
	   			tl.to(after,0.2,{height:'0px'})
	   		}


	   	})
	}
	navOut();

   	// Function load an other page
	function loadOtherPage(color){

		//alert('loadOtherPage');

		var time = new TimelineMax();
		var border = $('.left');
		var allBorder = $('.border');

		time.to(allBorder,0.2,{backgroundColor:color},0.5)

	}



	// Animation changement page
	var isAnimating = false;

	function onClick(){
		$('a.inside').off('click').on('click', function(event){

		    event.preventDefault();

		   // Changement page with animation
			var colorSlide = $(this).data('color');

			if(colorSlide===undefined){
				colorSlide=$('.link-logo').data('color');
			}

			//alert('Color :'+colorSlide);

		    loadOtherPage(colorSlide);


		     //detect which page has been selected
		     if ( $(this).is( "a" ) ){
		     	var newPage = $(this).attr('href');
		     }else{
	 			var newPage = $('.wrapper .active').data('href');
		     }


		    //if the page is not animating - trigger animation
		    if( !isAnimating ) changePage(newPage, true);

		    //alert('finish click');

		});
	}

	onClick();


	function changePage(url, bool) {
	    isAnimating = true;
	    // trigger page animation
	    $('body').addClass('page-is-changing');
	    //...
	    loadNewContent(url, true);
	    //...
	}

	function loadNewContent(url, bool) {
	  	var newSectionName = 'cd-'+url,
	  		section = $('<div class="cd-main-content '+newSectionName+'"></div>');

	  	section.load(url+' .cd-main-content > *', function(event){
	    	// load new content and replace <main> content with the new one
	      	$('main').html(section);
	      	//...
	      	$('body').removeClass('page-is-changing');
	      	//...

	      	var matches = event.match(/<title>(.*?)<\/title>/);
					var pageTitle = matches[1];


	      	if(url != window.location){
	        	//add the new page to the window.history
	        	window.history.pushState({path: url},'',url);
	        	document.title = pageTitle;
	      	}

	      	//alert ('Ajax.load');

		});

	  	isAnimating = false;

		console.log('Load New Content');
	}

	// Loading div animation
    $(document).ajaxStart(function(){
      console.log('Ajax loading start');

      var time = new TimelineMax();
			var border = $('.left');
			var allBorder = $('.border');

			$('#typed').html('My project is loading...');
			$('#typed').css('left','0vw');

			time.to(border,.2,{width:'100vw'})
					.set($('#typed'),{left:"0"})
					.to($('#typed'),.2,{autoAlpha:0.7,display:"block",y:"-50px;"});

			$('html').animate({
	      scrollTop: 0
	    }, 100);

    });
    $(document).ajaxComplete(function(){
      	init();
      	onClick();
      	onClickNav();
      	navEnter();
      	navOut();
				arrowScroll();

				$('.inside').not('.not')
				  .on('mouseenter',function(){
				  TweenMax.to($('.bullet'),0.3,{scale:6});
				})
				  .on('mouseleave',function(){
				  TweenMax.to($('.bullet'),0.2,{scale:1});
				});


    	var time = new TimelineMax();
      	var border = $('.left');
		var allBorder = $('.border');

		time.to(border,0.6,{width:'1.1vw'},1.5)
    });

	$(window).on('popstate', function() {
	    var newPageArray = location.pathname.split('/'),

	    //this is the url of the page to be loaded
	    newPage = newPageArray[newPageArray.length - 1];

	    if( !isAnimating ) changePage(newPage);

	    console.log('ON popstate');
	});


	// Animation arrow Scroll
	function arrowScroll(){
		$('.text-scroll').after().delay(800).queue(function(){
			$(this).after().css({top:'-15px'}).dequeue();
		}).animate({top:'-10px'}, 400, arrowScroll);
	}
	arrowScroll();


	function changeBackButton(){

		var pathArray = window.location.pathname.split( '/' );

		//var startUrl = window.location.protocol + "/" + window.location.host + "/"; // Other website liek this !!!!!

		var startUrl = '//'+window.location.host + "/";

		var urlNow = window.location.pathname;

		if(urlNow.indexOf(pathArray[2])>0){
			$('.breadcrumb').show();
			$('.text-breadcrumb').html(pathArray[1]);
			$('.breadcrumb a').attr('href','/'+pathArray[1]);
		}else if(urlNow.indexOf(pathArray[1])>0){
			$('.breadcrumb').show();
			$('.text-breadcrumb').html('Home');
			$('.breadcrumb a').attr('href','/'+pathArray[0]);
		}else{
			$('.breadcrumb').hide();
		}

	}

});
