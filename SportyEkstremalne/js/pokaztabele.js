function show() {
    document.getElementById('mistrzowiesky')
     .style.display = "block";
     document.getElementById('mistrzowiesky')
     .style.border = "none";
     document.getElementById('mistrzowiesky')
     .style.marginLeft = "30%";
     document.getElementById('mistrzowiesky')
     .style.marginRight = "30%";
     
     document.getElementById('btnID')
     .style.display = "none";
     
     document.getElementById('btnID2')
     .style.display = "inline-block";
     document.getElementById('btnID2')
     .style.margin = "auto";
     document.getElementById('skysurfingopis')
      .style.verticalAlign = "middle";
    }
    function hide()
    {
        document.getElementById('mistrzowiesky')
        .style.display = "none";
        
        document.getElementById('btnID')
        .style.display = "inline-block";
        document.getElementById('btnID')
        .style.margin = "auto";
        
        document.getElementById('btnID2')
        .style.display = "none";
    }


      $(document).ready(function(){
        var deg = $(this).data('rotate') || 180;
        var rotate = 'rotate(' + deg + 'deg)';
        $("#btnID").click(function(){
          $(".imgskysurfing").css({
            '-webkit-transform': rotate,
            '-moz-transform': rotate,
            '-o-transform': rotate,
            '-ms-transform': rotate,
            'transform': rotate
          });
        });
      });

      $(document).ready(function(){
        var deg = $(this).data('rotate') || 360;
        var rotate = 'rotate(' + deg + 'deg)';
        $("#btnID2").click(function(){
          $(".imgskysurfing").css({
            '-webkit-transform': rotate,
            '-moz-transform': rotate,
            '-o-transform': rotate,
            '-ms-transform': rotate,
            'transform': rotate
          });
        });
      });