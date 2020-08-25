function addListenerPostersMovies (){

    let movieNameElement = document.querySelectorAll('.one_movie');

    for (var y = 0; y < movieNameElement.length; y++) {
        movieNameElement[y].addEventListener(
            'click', addInfoClickMovie)
    }  
}

function addListenerCrossButton (){

    let crossNameElement = document.querySelectorAll('.cross_button');

    for (var w = 0; w < crossNameElement.length; w++) {
        crossNameElement[w].addEventListener('click', removeInfoMovie)
    }

    let slideClosedInfoPrev = document.querySelectorAll('.square1_prev_image');

    for (var x = 0; x < slideClosedInfoPrev.length; x++) {
        slideClosedInfoPrev[x].addEventListener('click', removeInfoMovie)
    }

    let slideClosedInfoNext = document.querySelectorAll('.square1_next_image');

    for (var y = 0; y < slideClosedInfoNext.length; y++) {
        slideClosedInfoNext[y].addEventListener('click', removeInfoMovie)
    }

    let slideClosedInfoDots = document.querySelectorAll('.square1_dots>span');

    for (var z = 0; z < slideClosedInfoDots.length; z++) {
        slideClosedInfoDots[z].addEventListener('click', removeInfoMovie)
    }
}

function removeInfoMovie () {

    for (var x = 0; x < document.querySelectorAll('.one_movie').length; x++) {
        document.querySelectorAll('.one_movie')[x].classList.remove('selected');
    }

    for (var z = 0; z < document.querySelectorAll('.info_movie').length; z++) {
        document.querySelectorAll('.info_movie')[z].classList.remove('shown');
    }
}

function addInfoClickMovie (event){

    if (event.currentTarget.classList.contains('selected')) {
        removeInfoMovie();
    } else {
        removeInfoMovie();
        let elementToOpen = document.getElementById(event.currentTarget.dataset.infomovie);

        elementToOpen.classList.add('shown');
    
        event.currentTarget.classList.add('selected');
    }
 
}

window.onscroll = function () {addBackgroundNavBarOnScroll()};

function addBackgroundNavBarOnScroll () {

    // je récupère la position de l'image avec l'id after_img_background
    let getPositionImage = document.getElementById('after_img_background');

    // je récupère la taille de l'image par rapport au haut de la page
    let image = getPositionImage.offsetTop;

    

    // je récupère la taille de la fenêtre de l'utlisateur 
    let getPositionInPage = window.pageYOffset;

    
    

    if (getPositionInPage >= image - 50){
        document.getElementById("header_menu").classList.add('menu_background');
    } else {
        document.getElementById("header_menu").classList.remove('menu_background');
    }
}
    

$(".header_nav a").on('click', function (event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top -75
        }, 900, function () {
            window.location.hash = hash - 75;
        });
    }
});
 
$(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('section.ok').offset().top }, 'slow');
      return false;
    });
}); 

if($(window).width() <= 1300){
    
    $('#slide0').square1({
        fill_mode: 'contain',
        animation: 'slide',
        auto_start: false
    });

    $('#slide5').square1({
        fill_mode: 'contain',
        animation: 'slide',
        auto_start: false
    });
}

var amountScrolled = 200;
var amountScrolledNav = 25;

$(window).scroll(function() {
  if ( $(window).scrollTop() > amountScrolled ) {
    $('button.back-to-top').addClass('show');
  } else {
    $('button.back-to-top').removeClass('show');
  }
});

$('button.back-to-top').click(function() {
  $('html, body').animate({
    scrollTop: 0
  }, 800);
  return false;
});

// Ignore this
// This is just for content manipulation
var skeleton = '<div class="skeleton"><div class="skeleton-wrapper"><div class="skeleton-wrapper-inner"><div class="skeleton-wrapper-body"><div class="skeleton-avatar"></div><div class="skeleton-author"></div><div class="skeleton-label"></div><div class="skeleton-content-1"></div><div class="skeleton-content-2"></div><div class="skeleton-content-3"></div></div></div></div></div>';
for(var i=0;i<10;i++){
  $('#content').append(skeleton); 
}

// Add waves effect
Waves.attach('button.back-to-top', 'waves-effect');
Waves.init();


document.addEventListener(
    'DOMContentLoaded', 
    function (){
        addListenerCrossButton();
        addListenerPostersMovies();
        addBackgroundNavBarOnScroll();

        }
);