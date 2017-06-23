

<!-- This script will count all of the items in the "articles" folder and store them in a list. That list can be used article php files to determine which links are used in the "sampler" div of an article php file.
 -->
<?php


$dir = "articles";

$articleContents = scandir($dir); // this is an array of strings, each string is the name of an item in articles. Also, it should include two entries, "." and ".."


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
print_r("articleContents is ");
print_r($articleContents);


?>