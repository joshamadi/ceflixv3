//
// /**
//  * Created by imm on 25/10/2018.
//  */
// $(document).ready(function (){
//     $('button').click(function (){
//         $('button').removeClass("selected");
//         $(this).addClass("selected");
//         var flickerAPI = "https://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
//         var animal = $(this).text();
//         var flickroptions = {
//             tags: animal,
//             format:"json"
//         };
//         function displayPhotos(data){
//             var portfolioHTML = '<ul>';
//             $.each(data.items, function(i, portfolio){
//                 portfolioHTML += '<li class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">';
//                 portfolioHTML += '<a href="' + portfolio.link + '" class="image">';
//                 portfolioHTML += '<img src="' + portfolio.media.m + '"></a></li>';
//             });
//             photoHTML ='</ul>';
//             $('#photos').html(photoHTML);
//         }
//         $.getJSON(flickerAPI, flickroptions, displayPhotos);
//     });
//
// });