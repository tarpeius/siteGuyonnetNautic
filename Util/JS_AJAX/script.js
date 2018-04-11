
// var req = new XMLHttpRequest();
// req.onreadystatechange = function() {
//     // XMLHttpRequest.DONE === 4
//     if (this.readyState === XMLHttpRequest.DONE) {
//         if (this.status === 200) {
//             console.log("Connecté");
//             console.log(this.responseText)
//         } else {
//             alert(this.responseText)
//         }
//     }
// };
//
// (function ($) {
//
//
//     $( "#triMarque" ).change(function () {
//         var str = "";
//         $( "#triMarque option:selected" ).each(function() {
//             str += $( this ).text();
//         });
//
//
//
//         $( "#triPrix" ).change(function () {
//             var str2 = "";
//             $( "#triPrix option:selected" ).each(function() {
//                 str2 += $( this ).text();
//             });
//
//
//             $.ajax({
//                 url:"http://localhost/siteguyonnetnautic/c_bateau.php",
//                 data:{marque : str,ordre : str2}
//             })
//
//         })
//             .change();
//
//     })
//         .change();
//
//
// })(jQuery);
//
