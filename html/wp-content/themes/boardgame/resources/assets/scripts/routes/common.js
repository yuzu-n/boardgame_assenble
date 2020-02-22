export default {

  init() {
    // JavaScript to be fired on all pages
    jQuery('#menu-primary_navigation > li > a:contains("はじめに")').on('click', function(){
      jQuery('html,body').animate({scrollTop:jQuery('#what').offset().top});
    })

    jQuery('#menu-primary_navigation > li > a:contains("この会について")').on('click', function(){
      jQuery('html,body').animate({scrollTop:jQuery('#report').offset().top});
    })

    jQuery('#menu-primary_navigation > li > a:contains("開催概要／アクセス")').on('click', function(){
      jQuery('html,body').animate({scrollTop:jQuery('#summary').offset().top});
    })

    jQuery('#menu-primary_navigation > li > a:contains("お問い合わせ")').on('click', function(){
      jQuery('html,body').animate({scrollTop:jQuery('#contact').offset().top});
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
