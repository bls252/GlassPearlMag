/*
* Javascript functions for the home page
*
* Created June 19th, 2017
* Brianna Singer
*/

/* Minimizes the header navigation when you have scrolled below it, then returns it to normal size when you scroll back up.*/

$(document).scroll(function(){
    if ($(this).scrollTop()>0){
        // animate fixed div to small size:
        $('#header').stop().animate({ height: 50 , 'padding-top': 5},100);
    } else {
        //  animate fixed div to original size
        $('#header').stop().animate({ height: 120, 'padding-top': 0},100);
    }
}); 