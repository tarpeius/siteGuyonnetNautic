
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
 }
// $(function() {
//
//     var $sidebar   = $("#sidebar"),
//         $window    = $(window),
//         offset     = $sidebar.offset(),
//         topPadding = 15;
//
//     $window.scroll(function() {
//         if ($window.scrollTop() > offset.top) {
//             $sidebar.stop().animate({
//                 marginTop: $window.scrollTop() - offset.top + topPadding
//             });
//         } else {
//             $sidebar.stop().animate({
//                 marginTop: 0
//             });
//         }
//     });
//
// });