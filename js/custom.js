
$(document).ready(function() {
    $( window ).scroll(function() {
          var height = $(window).scrollTop();
          if(height >= 100) {
              $('.header').addClass('fixed-menu');
          } else {
              $('.header').removeClass('fixed-menu');
          }
      });
  });


$(document).ready(function(){
  $('.menu-sild').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:true,
      nav: true,
      dots:false,
      responsive: {
          0: {
              items:1
          },
          600: {
              items:3
          },
          1000: {
              items:5
          }
      }
  })


  $('.marque-slider').owlCarousel({
    loop: true,
    autoplay:true,
    margin: 10,
    nav: false,
    dots:true,
    responsive: {
        0: {
            items:1
        },
        600: {
            items:1
        },
        1000: {
            items:1
        }
    }
  })

  $('.main-news').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots:false,
    responsive: {
        0: {
            items:1
        },
        600: {
            items:1
        },
        1000: {
            items:1
        }
    }
 })

$('.ab-lgo-slider').owlCarousel({
      
  autoplay:true,
      margin:25,
      nav: true,
  dots:false,
      responsive: {
          0: {
              items: 1
          },
          600: {
              items:1
          },
          820: {
            items:2
          },
          1000: {
              items:2
          },
          1200: {
            items:5
          }
      }
  })

$('.best-sl-m2').owlCarousel({
    
  autoplay:true,
  margin:25,
  loop:true,
  nav: true,
  dots:false,
      responsive: {
          0: {
              items: 1
          },
          600: {
              items:1
          },
          768: {
            items:2
          },
          1000: {
              items:4
          }
      }
  })

$('.news-slid').owlCarousel({
      
  autoplay:true,
      nav: false,
  margin: 20,
  dots:true,
      responsive: {
          0: {
              items: 1
          },
          600: {
              items:1
          },
          768: {
            items:2
          },
          1000: {
              items:3
          }
      }
  })

  $('.all-video').owlCarousel({
      
      autoplay:true,
      loop:true,
       nav: false,
      margin: 20,
      dots:false,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items:2
              },
              1000: {
                  items:6
              }
          }
  })

  $('.mn-listingn').owlCarousel({
      
    autoplay:true,
    loop:true,
     nav: true,
    margin: 20,
    dots:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items:1
            },
            1000: {
                items:1
            }
        }
 })
});


$(document).ready(function(){
    $(".collist").slice(0,7).show();
    $("#seeMore2").click(function(e){
      e.preventDefault();
      $(".collist:hidden").slice(0,7).fadeIn("slow");
      
      if($(".collist:hidden").length == 0){
         $("#seeMore2").fadeOut("slow");
        }
    });
  })

  // products list grid js
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
    $('#list').click(function(event){event.preventDefault();$('#products .item').removeClass('grid-group-item');});
  });
  
$(document).ready(function(){
$('.listed-bn ul li a').click(function(){
    $('.listed-bn li a').removeClass("active");
    $(this).addClass("active");
});
});