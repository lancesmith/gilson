$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
	if ($(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
		// do something here
	}	
});  

// Additonal Mobile js
$('button.navbar-toggler').click(function () {
$('span.fas').toggleClass('fa-times fa-bars');
//if ($('span.fas').hasClass('fa-times')) {
//$('.main-content').toggleClass('overlay');
//}
});

$('#navbarDropdown').mousedown(function () {
$(this).click();
return false;
});

//
//$('.main-content.overlay').click(function () {
//$('ul.navbar-nav').hide();
//$(this).removeClass("overley");
//});

//$('.main-content').click(function () {
//$('ul.navbar-nav').hide();
//});
 
// document ready  
});

//$("#navbarDropdownMenuLink").on("focus", elements => {
//    var element = elements.currentTarget;
//    $(element).dropdown("toggle");
//})

$(document).ready(function () {
if ($(window).width() < 980) {
$('.dropdown-toggle').attr('data-toggle',"dropdown");
}
});

//accordion style for FAQ
$('.accordion button').click(function () {
$(this).find('i.fas').toggleClass('fa-plus fa-minus');
if ($(this).hasClass('collapsed')) {
$(this).find('i.fas').removeClass('fa-minus');
}
});

//Riders page click effect
$('.team-member').click(function () {
//$(this).toggleClass('show hide');
//$(this).find('.desk').toggleClass('show hide');
$(this).find('.desk, .team-hover, .s-link').addClass('show');
});

$('.team-hover').click(function () {
//$(this).toggleClass('show hide');
//$(this).find('.desk').toggleClass('show hide');
$(this).find('.desk, .team-hover, .s-link').removeClass('show');
});

//navbar on scroll
$(document).ready(function(){
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);
    
    if (scrollTop >= 100) {
      $('#nav-wrapper').addClass('scrolled-nav');
      $('.dropdown-menu').addClass('scroll');
    } else if (scrollTop < 100) {
      $('#nav-wrapper').removeClass('scrolled-nav');
      $('.dropdown-menu').removeClass('scroll');
    } 
    
  }); 
  
});
