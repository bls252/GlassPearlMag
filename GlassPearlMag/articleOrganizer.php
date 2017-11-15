

<!-- This script will count all of the items in the "articles" folder and store them in a list. That list can be used article php files to determine which links are used in the "sampler" div of an article php file.
 -->
<?php


$dir = "articles";

// this is an array of strings, each string is the name of an item in articles. Also, it should include two entries, "." and ".."


$articleContents = scandir($dir);



$nonPHPs = [];
$loopCounter = -1;

foreach ($articleContents as $item) {
	$loopCounter += 1;
    $checker = ".php";

    if (strpos($item, $checker) == false) { // returns true if $checker does not appear in $item
    	array_push($nonPHPs, $item);

    };
};
print_r("nonPHPs is ");
print_r($nonPHPs);

//remove all the items in $nonPHPs from $articleContents

$articleContents = array_diff($articleContents, $nonPHPs);


echo "<br>";
echo "articleContents is ";
print_r($articleContents);

// Now, for each item in $articleContents, we need to collect the variable $articleTitle and $heroImage. If for some reason we can't get that title, we need to put "not found" in it's place.

// We need a 2D array with each array representing an article, each of those will be an array of strings with the following structure:
// articlefile.php, articleTitle, heroImage

$articlesInfo = [];

foreach ($articleContents as $art){

	if (require_once('articles/'.$art)) {

		$entry = array($art,$articleTitle,$heroImage);

		array_push($articlesInfo, $entry);


	}

}

		echo '$articlesInfo is ';
		print_r($articlesInfo);

		$cat = "cat";

?>