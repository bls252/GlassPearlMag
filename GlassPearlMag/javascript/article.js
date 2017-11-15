/*
* Javascript functions for the read page
*
* Created June 19th, 2017
* Brianna Singer
*/





function arrange_content(){ 


  /* place the title_photo right below the header, and the content div below that*/

  var headerHeight = document.getElementById('header').scrollHeight;
  var title_photoHeight = document.getElementById('title_photo').scrollHeight;
  var title_photoWidth = document.getElementById('title_photo').scrollWidth;  
  var title_photo_marginLeft = (window.innerWidth - title_photoWidth)*.9;
  var title_photo_marginRight = (window.innerWidth - title_photoWidth)*.1;
  var partialPhotoHeight = title_photoHeight * .75;
  var content_margin_top = headerHeight + partialPhotoHeight;

  window.alert("title_photoWidth is " + title_photoWidth + " " +
  	"window.innerWidth is " + window.innerWidth + " " +
  	"title_photo_marginLeft is " + title_photo_marginLeft + " " +
  	"title_photo_marginRight is " + title_photo_marginRight)

  document.getElementById("title_photo").style.top = headerHeight+"px";
  document.getElementById("title_photo").style.marginLeft = title_photo_marginLeft+"px";
  document.getElementById("title_photo").style.marginRight = title_photo_marginRight+"px";
  document.getElementById("content").style.marginTop = content_margin_top+"px";

};


$(window).scroll(function () {
    var scrollTop = $(window).scrollTop(); // this is how many pixels the user has scrolled down from the top
    var contentHeaderRoughDistance = $('#content').offset().top - $('#header').offset().top;
    var contentMarginTop = Math.abs(parseInt( $("#content").css("margin-top"))); // the margin size, as an absolute value and integer
    //alert("contentMarginTop is " + contentMarginTop);
    var contentHeaderDistance = contentHeaderRoughDistance + contentMarginTop - $('#header').height() - 37;
    $('#title_photo_wrapper').css({
        'opacity': ((contentHeaderDistance - scrollTop) / contentHeaderDistance)
    });
});












