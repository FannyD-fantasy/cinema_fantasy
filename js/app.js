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

    removeInfoMovie();

    let elementToOpen = document.getElementById(event.currentTarget.dataset.infomovie);

    elementToOpen.classList.add('shown');

    event.currentTarget.classList.add('selected');

}

window.onscroll = function () {addBackgroundNavBarOnScroll()};

function addBackgroundNavBarOnScroll () {

    let getPositionImage = document.getElementById('after_img_background');

    let image = getPositionImage.offsetTop;

    console.log('image', image);

    let getPositionInPage = window.pageYOffset;

    console.log('position dans la page', getPositionInPage);
    

    if (getPositionInPage > image){
        document.getElementById("header_menu").style.backgroundColor = "#1e3f6d88";
    } else {
        document.getElementById("header_menu").style.backgroundColor = "transparent";
    }
}
    




document.addEventListener(
    'DOMContentLoaded', 
    function (){
        addListenerCrossButton();
        addListenerPostersMovies();
        addBackgroundNavBarOnScroll();

        }
);