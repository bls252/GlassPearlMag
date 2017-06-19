/*
* Javascript functions for the home page
*
* Created June 19th, 2017
* Brianna Singer
*/

/* Minimizes the header navigation when you have scrolled below it, then returns it to normal size when you scroll back up.*/

// $(document).scroll(function(){
//     if ($(this).scrollTop()>175){
//         // animate fixed div to small size:
//         $('#header').stop().animate({ height: 50 , 'padding-top': 5},100);
//     } else {
//         //  animate fixed div to original size
//         $('#header').stop().animate({ height: 120, 'padding-top': 0},100);
//     }
// }); 

function fix_layout(){

  /* Adjust the footer so that it sits at the bottom of the page*/
    var wraph = document.getElementById('header').offsetHeight;
    if(wraph<window.innerHeight){ //if header is less than screenheight
        // var headh   = document.getElementById('header').offsetHeight;
        // var conth   = document.getElementById('content').offsetHeight;
        // var footh   = document.getElementById('footer').offsetHeight;
        // var foottop = headh + conth + footh;


         var bodyElements = document.body.children;

         heightCount = 0;

         for (i in bodyElements) {
         	if (Number.isInteger(bodyElements[i].scrollHeight)){ 
    			heightCount += bodyElements[i].scrollHeight;
    		}
		}

        $("#footer").css({top: heightCount/2 +'px'}); //divide by 2 because the loop is happeneing twice for some reason
    }

      /* place the title_photo right below the header, and the content div below that*/

      var headerHeight = document.getElementById('header').scrollHeight;

      var title_photoHeight = document.getElementById('title_photo').scrollHeight;
      var partialPhotoHeight = title_photoHeight * .75;

      $("#title_photo").css({top: headerHeight +'px'});
      $("#content").style.marginTop=partialPhotoHeight+"px"


}