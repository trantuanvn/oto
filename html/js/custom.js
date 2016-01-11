jQuery(document).ready(function () {

  if (jQuery("[rel=tooltip]").length) {jQuery("[rel=tooltip]").tooltip();}
  jQuery('button').addClass('btn');
// ____________________________________________________________________________________________ resize display
/*
        var myWidth = 0;
        myWidth = window.innerWidth;
        jQuery('body').prepend('<div id="size" style="background:#000;padding:5px;position:fixed;z-index:999;color:#fff;">Width = '+myWidth+'</div>');
        jQuery(window).resize(function(){
            var myWidth = 0;
            myWidth = window.innerWidth;
            jQuery('#size').remove();
            jQuery('body').prepend('<div id="size" style="background:#000;padding:5px;position:fixed;z-index:999;color:#fff;">Width = '+myWidth+'</div>');
        });
*/
// ____________________________________________________________________________________________ responsive menu

	var mainMenu = jQuery('.main_menu ul.menu');
  mainMenu.find('li.parent > a').append('<span class="arrow"></span>');
  mainMenu.find(' > li').last().addClass('lastChild');
// ____________________________________________________________________________________________

 });

var headerHeight = jQuery('.header').height();

  jQuery(window).scroll(function(){
     if (jQuery(window).scrollTop() > headerHeight) {
      jQuery('.header_bottom').addClass('top_fixed_menu'); 
     } else {
      jQuery('.header_bottom').removeClass('top_fixed_menu'); 
    }
 });