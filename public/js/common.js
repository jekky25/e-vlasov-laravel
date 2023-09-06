$(document).ready(function () {
	 var doc_w = $(document).width();
      var minus_off = 100;
      var minus_off2 = 30;
      var destination = $('.block-over4').offset().top;
      var dest_pos = destination - minus_off;
     
 /*sertificates-slider*/
     if (doc_w <= 600) {
          $(".owl-serts").owlCarousel({
               loop: true,
               margin: 10,
     		navigation: true,
               responsive:{
             0:{
                 items:1
             },
             768:{
                 items:5
             },
             1000:{
                 items:6
             }
         }
         });
     }

/*mob-menu*/     
    	$(".icon-menu").click(function(e){
           $('.mobile-menu-main-item').fadeIn();
     });
     
     $(".close-menu").click(function(e){
           $('.mobile-menu-main-item').fadeOut();
     });


  
     $(".but-order-over .but-order").click(function(e){
          destination = $('.block-over4').offset().top;
          dest_pos = destination - minus_off;
          $("html").animate({scrollTop: dest_pos}, 1000);
     });
     
     $(".but-price-block .but-order").click(function(e){
          destination = $('.block-over4').offset().top;
          dest_pos = destination - minus_off;
          $("html").animate({scrollTop: dest_pos}, 1000);
     });
     
     $(".but-order-sert .but-order").click(function(e){
          destination = $('.block-over4').offset().top;
          dest_pos = destination - minus_off;
          $("html").animate({scrollTop: dest_pos}, 1000);
     });
     
     $(".block-form .but-order").click(function(e){
          regexpEmail = /^(?:[a-z0-9._]+(?:[-_.]?[a-z0-9._]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i;
          var error = 0;
          var errorText = '';
          if ($('#name').val().length < 2) {
     		errorText += '<p>Имя не введено</p>';
     		error = 1;
     	}
          if (!$('#e-mail').val ().match (regexpEmail)) {
               errorText += '<p>Некорректно введен е-майл</p>';
               error = 1;
          }
          if ($('#message').val().length < 2) {
     		errorText += '<p>Не введено сообщение</p>';
     		error = 1;
     	}
          
         
          if (error == 1) {
               $('.error-text').html (errorText);
               $('.error-text').fadeIn();
               return false;
          } else {
             	var data       = new Object();
               data.name      = $('#name').val();
               data.email     = $('#e-mail').val ();
               data.message   = $('#message').val();
               data._token    = $('[name="_token"]').val();
               
              $.ajax({
                    type: "POST",
                    url: 'ajax/send_mess.php',
                    data: data,
                    dataType : "json",
          	success: function(ReturnData){
                    $('.block-over4-over .block-form').html ('<div class="mess-success">Спасибо! Сообщение успешно отправлено!</div>');
          	},
     		error: function(){ }
          	});
          }
     });
     
     $("#name").keydown(function(e){
          $('.error-text').fadeOut();
     });
     $("#e-mail").keydown(function(e){
          $('.error-text').fadeOut();
     });
     $("#message").keydown(function(e){
          $('.error-text').fadeOut();
     });


     $('.head-menu-list a[href=#about]').click(function(e){
          destination = $('.block-over2').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });
     
     $('.foot-menu-list a[href=#about]').click(function(e){
          destination = $('.block-over2').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });
     
     $('.head-menu-list-mob a[href=#about]').click(function(e){
          $('.mobile-menu-main-item').fadeOut();
          destination = $('.block-over2').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });

     $('.head-menu-list a[href=#service]').click(function(e){
          destination = $('.block-over3').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });
     
     $('.foot-menu-list a[href=#service]').click(function(e){
          destination = $('.block-over3').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });
     
     $('.head-menu-list-mob a[href=#service]').click(function(e){
          $('.mobile-menu-main-item').fadeOut();
          destination = $('.block-over3').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });

     $('.head-menu-list a[href=#price]').click(function(e){
          destination = $('.block-over5').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });

     $('.foot-menu-list a[href=#price]').click(function(e){
          destination = $('.block-over5').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });

     $('.head-menu-list-mob a[href=#price]').click(function(e){
          $('.mobile-menu-main-item').fadeOut();
          destination = $('.block-over5').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });
     
     $('.head-menu-list a[href=#contact]').click(function(e){
          destination = $('.block-over6').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });

     $('.foot-menu-list a[href=#contact]').click(function(e){
          destination = $('.block-over6').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });

     $('.head-menu-list-mob a[href=#contact]').click(function(e){
          $('.mobile-menu-main-item').fadeOut();
          destination = $('.block-over6').offset().top;
          dest_pos = destination - minus_off2;
          $("html").animate({scrollTop: dest_pos}, 1000);
          return false;
     });
     
     
     
});
