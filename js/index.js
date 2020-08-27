$( document ).ready(function() {

$(function(){
$('a[href*=\\#]').click(function() {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
&& location.hostname == this.hostname) {
var $target = $(this.hash);
$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
if ($target.length) {
var targetOffset = $target.offset().top;
$('html,body').animate({scrollTop: targetOffset}, 1100);
return false;
}
}
});
});

var subir = $('.back-to-top');
  
  subir.click(function(e){
    e.preventDefault();
    $('html, body').animate({scrollTop: 0}, 500);
  });
  
  subir.hide();
  
  $(window).scroll(function(){
    
    if( $(this).scrollTop() > 200 ) {
      subir.fadeIn();
    } else {
      subir.fadeOut();
    }
    
  });

  /*Cambio de imagen principal*/
  var height = $(window).height();
  var width = $(window).width();
  if (height>width) {
      $("#imagen-principal").attr("src","../img/banner1-mobil.png");
  }else{
   $("#imagen-principal").attr("src","../img/banner1.png");
  }

    $(window).resize(function(){
     var height = $(window).height();
     var width = $(window).width();   
    if (height>width) {
      $("#imagen-principal").attr("src","../img/banner1-mobil.png");
    }else{
        $("#imagen-principal").attr("src","../img/banner1.png");
    }

      });

   

});
