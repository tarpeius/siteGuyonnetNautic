/**
 * Created by Quentin on 09/03/2018.
 */
$(document).ready(function(){
    $('.carousel.carousel-slider').carousel({fullWidth: true});
});
autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}
$(".dropdown-button").dropdown();
$(document).ready(function(){
    $('.parallax').parallax();
});
