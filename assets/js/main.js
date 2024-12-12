var btn = $('#back-to-top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 3000) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '3000');
});


$('#flotenqform').click(function(){
    $('.contact-right').toggleClass('open');
});
$('.gbnbtn').click(function(){
    $('.contact-right').toggleClass('open');
});


