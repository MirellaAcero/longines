 $(document).ready(function() {

  $('#myNavbar ul li a').click(function() {
    $('#myNavbar ul li a').removeClass('active');
    $(this).addClass('active');
    var link = $(this);
    var anchor  = link.attr('href');
    if ($('html').width() < 767) {
      var top = 60;
    }
    else {
      var top = 80;
    }
    $('html, body').stop().animate({
      scrollTop: jQuery(anchor).offset().top + -top
    }, 2000);
    return false;
  });
        
  setInterval( function() {
    var seconds = new Date().getSeconds();
    var sdegree = seconds * 6;
    var srotate = "rotate(" + sdegree + "deg)";
    $("#sec").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
  }, 1000);
  
  setInterval( function() {
    var hours = new Date().getHours();
    var mins = new Date().getMinutes();
    var hdegree = hours * 30 + (mins / 2);
    var hrotate = "rotate(" + hdegree + "deg)";
    $("#hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
  }, 1000);
  
  setInterval( function() {
    var mins = new Date().getMinutes();
    var mdegree = mins * 6;
    var mrotate = "rotate(" + mdegree + "deg)";
    $("#min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
  }, 1000);

  $('#video-play').click(function() {
    $(this).addClass('hide');
    $(this).removeClass('show');
    $('#video-pause').addClass('show');
    $('#video-pause').removeClass('hide');
  });

  $('#video-pause').click(function() {
    $(this).addClass('hide');
    $(this).removeClass('show');
    $('#video-play').addClass('show');
    $('#video-play').removeClass('hide');
  });

  $('#block-form').validate({
    messages: {
      firstname: "El nombre es requerido",
      lastname: "El apellido es requerido",
      phone: "El celular es requerido",
      email: "El correo es requerido",
      comments: "El comentario es requerido"
    }
  });

});