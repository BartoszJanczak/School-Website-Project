$(document).ready(function(){
    var deg = $(this).data('rotate') || 180;
    var rotate = 'rotate(' + deg + 'deg)';
    $("#btnIDfreeride").click(function(){
        $(".freeride").css({
          '-webkit-transform': rotate,
          '-moz-transform': rotate,
          '-o-transform': rotate,
          '-ms-transform': rotate,
          'transform': rotate
        });
      });
      $("#btnIDformula").click(function(){
          $(".formula").css({
              '-webkit-transform': rotate,
              '-moz-transform': rotate,
              '-o-transform': rotate,
              '-ms-transform': rotate,
              'transform': rotate
            });
        });
        $("#btnIDwave").click(function(){
            $(".wave").css({
                '-webkit-transform': rotate,
                '-moz-transform': rotate,
                '-o-transform': rotate,
                '-ms-transform': rotate,
                'transform': rotate
            });
        });
        $("#btnIDfreestyle").click(function(){
            $(".freestyle").css({
                '-webkit-transform': rotate,
                '-moz-transform': rotate,
                '-o-transform': rotate,
                '-ms-transform': rotate,
                'transform': rotate
            });
        });
        $("#btnIDslalom").click(function(){
          $(".slalom").css({
            '-webkit-transform': rotate,
            '-moz-transform': rotate,
            '-o-transform': rotate,
            '-ms-transform': rotate,
            'transform': rotate
          });
        });
        $('#btnIDslalom').click(function() {
            $('.slalom').toggleClass('animate');
          })
      $("#btnIDspeed").click(function(){
        $(".speed").css({
          '-webkit-transform': rotate,
          '-moz-transform': rotate,
          '-o-transform': rotate,
          '-ms-transform': rotate,
          'transform': rotate
        });
      });
      $("#btnIDsuperx").click(function(){
        $(".superx").css({
          '-webkit-transform': rotate,
          '-moz-transform': rotate,
          '-o-transform': rotate,
          '-ms-transform': rotate,
          'transform': rotate
        });
      });
  });
