
<!-- This website can automatically format articles to html: https://wordtohtml.net/
 -->
<!-- This is how you do an apostrophe inside qoutes: &#8217;
 -->
<!-- Based off the article page at this URL:http://fashionmagazine.com/culture/the-national-ballet-of-canada-a-streetcar-named-desire/
 -->
<!-- Define details of the article -->
<?php

	$articleSeat = 0; // This will eventually be the index this article takes in the array of all articles.
	$pageTitle = "Simple is Fashionable";
	$heroImage = "read1.jpg";//image_stopper
	$photoCredit = "@PersonOnInstagram";
	$articleTitle = "This one is copy 3: I really like this one";//title_stopper
	$articleSubline = "Fit for a princess—sans royal price tag.";
	$articleText = "Eget quam vestibulum consectetuer, lacus semper lorem in sodales duis. A orci porttitor lacinia condimentum phasellus nec, mi morbi semper aliquet wisi consectetuer, consectetur nunc morbi libero a. Nec vitae in et, id sit, vestibulum curabitur pede aenean ridiculus massa quam, lorem amet porttitor, erat venenatis amet quam donec nulla. Morbi magna natoque et a, laoreet curabitur justo mauris nulla vestibulum, nulla faucibus, aenean turpis eget lacus facilisi nibh, in elit sem. Praesent ultricies auctor, elit morbi neque non ultrices, lacus amet eget, quam sed consequat nisl sed ligula porta. Tristique proin elementum pellentesque, nec at curabitur cras lacus potenti ut, nec enim. Nam porttitor. Vitae nunc lorem massa amet rutrum et. Pharetra aliquam proin, ornare commodo phasellus, nam mauris tincidunt, odio mattis, metus lectus neque augue vitae lectus. Tellus rutrum aenean, dictum fusce eget, mattis enim adipiscing, erat fringilla ipsum a, tincidunt rutrum quis nascetur cubilia. Urna class quis vel, neque metus et tortor ultrices pede, ipsum vehicula sed sed, tincidunt felis, elit bibendum diam tellus mollis faucibus ad. Vel felis felis semper mauris dui eu, a sed.<br><br>

		        emsp;Eget quam vestibulum consectetuer, lacus semper lorem in sodales duis. A orci porttitor lacinia condimentum phasellus nec, mi morbi semper aliquet wisi consectetuer, consectetur nunc morbi libero a. Nec vitae in et, id sit, vestibulum curabitur pede aenean ridiculus massa quam, lorem amet porttitor, erat venenatis amet quam donec nulla. Morbi magna natoque et a, laoreet curabitur justo mauris nulla vestibulum, nulla faucibus, aenean turpis eget lacus facilisi nibh, in elit sem. Praesent ultricies auctor, elit morbi neque non ultrices, lacus amet eget, quam sed consequat nisl sed ligula porta. Tristique proin elementum pellentesque, nec at curabitur cras lacus potenti ut, nec enim. Nam porttitor. Vitae nunc lorem massa amet rutrum et. Pharetra aliquam proin, ornare commodo phasellus, nam mauris tincidunt, odio mattis, metus lectus neque augue vitae lectus. Tellus rutrum aenean, dictum fusce eget, mattis enim adipiscing, erat fringilla ipsum a, tincidunt rutrum quis nascetur cubilia. Urna class quis vel, neque metus et tortor ultrices pede, ipsum vehicula sed sed, tincidunt felis, elit bibendum diam tellus mollis faucibus ad. Vel felis felis semper mauris dui eu, a sed.<br><br>

		        emsp;Eget quam vestibulum consectetuer, lacus semper lorem in sodales duis. A orci porttitor lacinia condimentum phasellus nec, mi morbi semper aliquet wisi consectetuer, consectetur nunc morbi libero a. Nec vitae in et, id sit, vestibulum curabitur pede aenean ridiculus massa quam, lorem amet porttitor, erat venenatis amet quam donec nulla. Morbi magna natoque et a, laoreet curabitur justo mauris nulla vestibulum, nulla faucibus, aenean turpis eget lacus facilisi nibh, in elit sem. Praesent ultricies auctor, elit morbi neque non ultrices, lacus amet eget, quam sed consequat nisl sed ligula porta. Tristique proin elementum pellentesque, nec at curabitur cras lacus potenti ut, nec enim. Nam porttitor. Vitae nunc lorem massa amet rutrum et. Pharetra aliquam proin, ornare commodo phasellus, nam mauris tincidunt, odio mattis, metus lectus neque augue vitae lectus. Tellus rutrum aenean, dictum fusce eget, mattis enim adipiscing, erat fringilla ipsum a, tincidunt rutrum quis nascetur cubilia. Urna class quis vel, neque metus et tortor ultrices pede, ipsum vehicula sed sed, tincidunt felis, elit bibendum diam tellus mollis faucibus ad. Vel felis felis semper mauris dui eu, a sed.<br><br>

		        emsp;Eget quam vestibulum consectetuer, lacus semper lorem in sodales duis. A orci porttitor lacinia condimentum phasellus nec, mi morbi semper aliquet wisi consectetuer, consectetur nunc morbi libero a. Nec vitae in et, id sit, vestibulum curabitur pede aenean ridiculus massa quam, lorem amet porttitor, erat venenatis amet quam donec nulla. Morbi magna natoque et a, laoreet curabitur justo mauris.<br><br>";

?>

<?php


// function get_string_between($string, $start, $end){
//     $string = ' ' . $string;
//     $ini = strpos($string, $start);
//     if ($ini == 0) return '';
//     $ini += strlen($start);
//     $len = strpos($string, $end, $ini) - $ini;
//     return substr($string, $ini, $len);
// }

// $dir = glob(dirname(__FILE__));
// $articleContents = array_diff(scandir($dir[0]), array('..', '.', basename(__FILE__))); // an array of evrything in articles directory other than the current file.

// $articlesInfo = [];

// foreach ($articleContents as $art){

// 	if ($fileText = file_get_contents($art)) {

// 		$getTitle = get_string_between($fileText, "$articleTitle = ", ";//title_stopper");

// 		$getHeroImage = get_string_between($fileText, "$heroImage = ", ";//image_stopper");

// 		$entry = array($art, $getTitle, $getHeroImage);

// 		array_push($articlesInfo, $entry);

// 	}

// }

ob_start();
include '../functions/articleOrganizer.php';
ob_end_clean();

$anArticle = $articleContents[0];


?>

<?php

	// Sampler Variables:

	$kitty = $anArticle;

	$test = file_get_contents(basename(__FILE__));

    $samp1_image = "samp1.jpg";
    $samp1_title = "This is the Title of Sample 1";
    $samp1_href = "article1.php";

    $samp2_image = "samp2.jpg";
    $samp2_title = "This is the Title of Sample 2";
    $samp2_href = "article2.php";
    
    $samp3_image = "samp3.jpg";
    $samp3_title = "This is the Title of Sample 3";
    $samp3_href = "article3.php";
    
    $samp4_image = "samp4.jpg";
    $samp4_title = "This is the Title of Sample 4";
    $samp4_href = "article4.php";
    
    $samp5_image = "samp5.jpg";
    $samp5_title = "This is the Title of Sample 5";
    $samp5_href = "article4.php";
    
    $samp6_image = "samp6.jpg";
    $samp6_title = "This is the Title of Sample 6";
    $samp6_href = "article5.php";


?>

<?php include '../includes/articleHTML.php';?>


