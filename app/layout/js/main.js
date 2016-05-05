

var App = {
  config:{
    url: '',
    layout: '',
    section: ''
  },
  Init: function(config){

    App.config = $.extend(App.config, config || {});
    if(window.name != "") App.config.canvas = true;
    $(document).ready(function(){
      $(window).on('popstate', function() {
        LoadURL(window.location.href);
      });

      ParseContent();

    });
  }
}

var ChangeURI = function(url) {
  if( window.history == undefined || window.history.pushState == undefined ) return;
  if(window.location.href == url) return;
  return window.history.pushState({}, "", url);
};

var LoadURL = function(url, fnx){
  if(!$('body').hasClass('section-active'))
  {
    $('body').addClass('section-active');
    setTimeout(function(){
      LoadURL(url,fnx);
    }, 400);
    return;
  }
  $('html, body').animate({
      scrollTop: 0
    }, 300);
  $.ajax({
    cache: true,
    url: url,
    dataType: "html",
    processData: false
  }).done(function(html) {
    $('#app-section').animate({
      'opacity': 0},
      300, function() {        
      $('#app-section').html(html);
      ParseContent($('#app-section'));
      $('#app-section').css({'opacity': 0}).animate({
      'opacity': 1},300);
      $(window).resize()
      if(fnx != undefined) fnx();
    });
  });
}
var ChangeMenu = function(){
  $('header ul li a.active').removeClass('active');
  $('header ul li a').each(function(index, el) {
    if($(el).attr('href') == window.location.href) $(el).addClass('active');
  });
}

var ParseContent = function(item){
  // var items = item ? $('.app-loader', item) : $('.app-loader');
  // items.each(function(index,it){
  //   $(it).click(function(e){
  //     e.preventDefault();
  //     var url = $(this).attr('href');
  //     ChangeURI(url);
  //     ChangeMenu();
  //     LoadURL(url);
  //   });
  // }); 

  if( $('.flexslider', item).length ) {


      $('.flexslider', item).flexslider({
        animation: "slide",
        start: function() {
          $('.flexrow > .col.first-col').css('min-height', $('.flexrow > .col.second-col').height() );
        }
      });
  }
}