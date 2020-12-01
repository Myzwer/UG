function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

jQuery(document).ready(function(){
    jQuery('.video-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',

    });
});

jQuery(document).ready(function() {
    jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});


jQuery(window).on('load', function() {
var filter = document.getElementById('filter');
var list = document.getElementById('list');
var listItems = list.querySelectorAll('li');

//filter.focus();

filter.addEventListener('keyup', function(e) {
    var val = new RegExp(e.target.value, 'gi');
    for(var i=0; i<listItems.length; i++) {
        if( e.target.value.length > 0) {
            var text = listItems[i].innerHTML;

            if( !text.match(val)) {
                listItems[i].classList.add('is-hidden');
            } else {
                listItems[i].classList.remove('is-hidden');
            }
        } else {
            listItems[i].classList.remove('is-hidden');
        }

    }
});
});


console.log("Custom is linked properly fo sho yo 2");