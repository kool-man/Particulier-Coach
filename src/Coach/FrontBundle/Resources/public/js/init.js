
 

//banner animation typed

  $(".banner-header-pub .title").typed({
	strings: ["","Particulier & Coach"],
	typeSpeed: 0
  });
 setTimeout(function(){
		$('.banner-header-pub .title ').css('top','-=8');			 
		$(".banner-header-pub .slogan").typed({
			strings: ["","100% Entre Particuliers, 0% Commission"],
			typeSpeed: 0
		  });
					  
 }, 3000);


//OWL carroussel

//-----------VENDUS-----------//

var owl = $("#owl-biens");

owl.owlCarousel({
    items: 4, //10 items above 1000px browser width
    itemsDesktop: [1000, 5], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 3], // betweem 900px and 601px
    itemsTablet: [768, 1], //2 items between 600 and 0
    itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
    autoPlay: true,
    pagination : false
});

// Custom Navigation Events
$("a.next").click(function() {
    owl.trigger('owl.next');
});
$("a.prev").click(function() {
    owl.trigger('owl.prev');
});

//-----------OFFRES-----------//
var owl2 = $("#owl-offres");

owl2.owlCarousel({
    items: 4, //10 items above 1000px browser width
    itemsDesktop: [1000, 5], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 3], // betweem 900px and 601px
    itemsTablet: [768, 1], //2 items between 600 and 0
    itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
    autoPlay: true,
    pagination : false
});

// Custom Navigation Events
$("a.next").click(function() {
    owl2.trigger('owl.next');
});
$("a.prev").click(function() {
    owl2.trigger('owl.prev');
});

//-----------GALERY-----------//
var owl3 = $("#owl-galerie");

owl3.owlCarousel({
     navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
});

// Custom Navigation Events
$("a.next").click(function() {
    owl3.trigger('owl.next');
});
$("a.prev").click(function() {
    owl3.trigger('owl.prev');
});

//INIT WOW ANIMATION
 new WOW().init();

