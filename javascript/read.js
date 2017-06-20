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


// window.onload = arrange_content()

//document.onload(arrange_content());


/* This will change the title_photo's margins if someone resizes the window.*/ 
// $(window).resize(function(){
// 	// find the new margin values based on the current window width
// 	var leftMargin = ($(window).width() - $(#title_photo).height())*.9;
// 	var rightMargin = ($(window).width() - $(#title_photo).height())*.1;

// 	alert("leftMargin is " + leftMargin + " " + "rightMargin is " + rightMargin );


// 	// then change the css accordingly

// 	$("#title_photo").css("margin-left", leftMargin);
// 	$("#title_photo").css("margin-right", rightMargin);

// });














