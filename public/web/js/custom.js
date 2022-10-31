
// Aos
AOS.init();




setTimeout(() => {
  $(".lodding").fadeOut(1000);
}, 2800);







lightGallery(document.getElementById('lightgallery'), {
  thumbnail: true,
  selector: '.image-item'
});


// hover clients

$('.img_clients img').hover(function () {
  var not_add = $(this);
  $('.img_clients img').not(not_add).addClass('over');
},
  function () {
    var not_add = $(this);
  $('.img_clients img').not(not_add).removeClass('over');
  }
)



if ($('#slider_comment').length) {
  $('#slider_comment').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsiveClass: true,
    items: 1,
    rtl:true,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1,

      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      }
    }
  })
}




if ($('#slider_client').length) {
  $('#slider_client').owlCarousel({
    loop: false,
    margin: 30,
    nav: false,
    responsiveClass: true,
    items: 6,
    dots: false,
    rtl:true,

    autoplayTimeout:3000,
    autoplayHoverPause:true,
    autoplay: true,
    responsive: {
      0: {
        items: 1,

      },
      600: {
        items: 4,
      },
      1000: {
        items: 6,
      }
    }
  })

}





if ($('#slider_galler').length) {
  $('#slider_galler').owlCarousel({
    loop: false,
    margin: 30,
    nav: false,
    responsiveClass: true,
    items: 3,
    dots: false,
    rtl:true,

    autoplayTimeout:3000,
    autoplayHoverPause:true,
    autoplay: true,
    responsive: {
      0: {
        items: 1,

      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      }
    }
  })

}





$('.remove_mune').click(function () {
  $('#menu-div').removeClass('active')
  $('.bg_menu').removeClass('active')
})


function open() {
  $('.navicon').addClass('is-active');
  $("#menu-div").addClass("active")
  $("#times-ican").addClass("active");
  $('.bg_menu').addClass('active');

}

function close() {
  $('.navicon').removeClass('is-active');
  $("#menu-div").removeClass("active")
  $("#times-ican").removeClass("active");
  $('.bg_menu').removeClass('active')
  $('.remove_mune').click(function () {
    $('#menu-div').removeClass('active')
    $('.bg_menu').removeClass('active')
  })

}

$("#times-ican").click(function () {
  if ($(this).hasClass('active')) {
    close()
  } else {
    open();
  }
})

$("#menu-div a").click(function () {
  e.preventDefault();
})


var $winl = $(window); // or $box parent container
var $boxl = $("#menu-div, #times-ican");
$winl.on("click.Bst", function (event) {
  if (
    $boxl.has(event.target).length === 0 && //checks if descendants of $box was clicked
    !$boxl.is(event.target) //checks if the $box itself was clicked
  ) {
    close()
  }
});





$( ".button_su_inner" ).mouseenter(function(e) {
  var parentOffset = $(this).offset();

  var relX = e.pageX - parentOffset.left;
  var relY = e.pageY - parentOffset.top;
  $(this).prev(".su_button_circle").css({"left": relX, "top": relY });
  $(this).prev(".su_button_circle").removeClass("desplode-circle");
  $(this).prev(".su_button_circle").addClass("explode-circle");

});

$( ".button_su_inner" ).mouseleave(function(e) {

    var parentOffset = $(this).offset();

    var relX = e.pageX - parentOffset.left;
    var relY = e.pageY - parentOffset.top;
    $(this).prev(".su_button_circle").css({"left": relX, "top": relY });
    $(this).prev(".su_button_circle").removeClass("explode-circle");
    $(this).prev(".su_button_circle").addClass("desplode-circle");

});



// scorll Top
$('#scroll-1').click(function () {
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top - 100
  }, 600);
  return false;
});


// scorll Top
$('#scroll-2').click(function () {
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top - 100
  }, 600);
  return false;
});




// upload images
$(document).ready(function () {
  var readURL = function (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('.profile-pic').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }


  $(".file-upload").on('change', function () {
    readURL(this);
  });

  $(".upload-button").on('click', function () {
    $(".file-upload").click();
  });
});






// counter


var a = 0;
$(window).scroll(function () {
    var oTop = $(".counter-box").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-number");
            $({
                countNum: $this.text()
            }).animate(
                {
                    countNum: countTo
                },

                {
                    duration: 2550,
                    easing: "swing",
                    step: function () {
                        //$this.text(Math.ceil(this.countNum));
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                    },
                    complete: function () {
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                        //alert('finished');
                    }
                }
            );
        });
        a = 1;
    }
});




const animationDuration = 4000;

const frameDuration = 1000 / 60;

const totalFrames = Math.round(animationDuration / frameDuration);

const easeOutQuad = (t) => t * (2 - t);

const animateCountUp = (el) => {
  let frame = 0;
  const countTo = parseInt(el.innerHTML, 10);

  const counter = setInterval(() => {
    frame++;

    const progress = easeOutQuad(frame / totalFrames);

    const currentCount = Math.round(countTo * progress);

    if (parseInt(el.innerHTML, 10) !== currentCount) {
      el.innerHTML = currentCount;
    }

    if (frame === totalFrames) {
      clearInterval(counter);
    }
  }, frameDuration);
};

const countupEls = document.querySelectorAll(".timer");
countupEls.forEach(animateCountUp);


$(".animated-progress span").each(function () {
  $(this).animate(
    {
      width: $(this).attr("data-progress") + "%",
    },
    2100
  );
  $(this).text($(this).attr("data-progress") + "%");
});
