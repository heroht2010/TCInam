$(document).ready(function(){       
   var scroll_start = 1;
   var startchange = $('#navv');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar").css('background-color', 'black');
       } else {
          $('.navbar').css('background-color', 'transparent');
       }
   });
    }
});