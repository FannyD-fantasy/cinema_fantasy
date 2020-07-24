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

    console.log('image', image);

    // je récupère la taille de la fenêtre de l'utlisateur 
    let getPositionInPage = window.pageYOffset;

    console.log('position dans la page', getPositionInPage);
    

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


document.addEventListener(
    'DOMContentLoaded', 
    function (){
        addListenerCrossButton();
        addListenerPostersMovies();
        addBackgroundNavBarOnScroll();

        }
);