
<?php


$dir = "../articles";
$articleContents = array_diff(scandir($dir), array('..', '.','.DS_Store', $articleFile)); // an array of evrything in articles directory other than the current file.

$articleContents = array_values($articleContents); // makes all the keys in order starting from 0

$articleContents = array_unique($articleContents); // removes duplicates

//Array ( 
//[0] => article copy 10.php 
//[1] => article copy 11.php 
//[2] => article copy 12.php 
//[3] => article copy 13.php 
//[4] => article copy 2.php 
//[5] => article copy 3.php 
//[6] => article copy 4.php 
//[7] => article copy 5.php 
//[8] => article copy 6.php 
//[9] => article copy 7.php 
//[10] => article copy 8.php 
//[11] => article copy.php 
//[12] => article.php ) 



//$size = count($articleContents);

// for($x = 0; $x <= $size; $x++) {
//    array_push($testArticleContents, $articleContents[$x]);

// 	ob_start();

// 	if (require_once('../articles/'.$articleContents[$x])) {

// 	ob_end_clean();

// 		$entry = array($articleContents[$x],$articleTitle,$heroImage); // Check to make sure this isn't taking from the variable defined at the top


// 		array_push($articlesInfo, $entry);

// 	}
// }

$articlesInfo = []; // watch your spelling here
foreach ($articleContents as $file) {
    ob_start();
    if (require '../articles/' . $file) { // note, no parentheses around the path
        $articlesInfo[] = [
            $file,
            $articleTitle,
            $heroImage
        ];
    }
    ob_end_clean();
}

$articlesInfo = array_unique($articlesInfo, SORT_REGULAR); // removes duplicates from the 2D array

//Array ( 
//[0] => Array ( [0] => article copy 2.php [1] => Simple is Beautiful: Notes on Style & Elegance [2] => read1.jpg ) 
//[1] => Array ( [0] => article copy 3.php [1] => Simple is Beautiful: Notes on Style & Elegance [2] => read1.jpg ) 
//[2] => Array ( [0] => article copy.php [1] => Simple is Beautiful: Notes on Style & Elegance [2] => read1.jpg ) ) 


// Now we get random selections from the articlesInfo array to fill in the sampler

	$min = 0;
	$max = count($articleContents); // The number of articles in the "articles" folder
	$quantity = 6; // The number of articles in the sampler

 	$numbers = range($min, $max);
    shuffle($numbers);
    $sampSelection =  array_slice($numbers, 0, $quantity); // $quantity is the count of the array $sampSelection



?>

<?php

	// Sampler Variables:

	$test = $testArticleContents;
	$arrayTest = $articlesInfo;
	$arrayTest2 = $sampSelection;

    $samp1_image = $articlesInfo[$sampSelection[0]][2]; // not defined
    $samp1_title = $articlesInfo[$sampSelection[0]][1];// not defined
    $samp1_href  = $articlesInfo[$sampSelection[0]][0];// not defined

    $samp2_image = $articlesInfo[$sampSelection[1]][2];
    $samp2_title = $articlesInfo[$sampSelection[1]][1];
    $samp2_href  = $articlesInfo[$sampSelection[1]][0];
    
    $samp3_image = $articlesInfo[$sampSelection[2]][2];
    $samp3_title = $articlesInfo[$sampSelection[2]][1];
    $samp3_href  = $articlesInfo[$sampSelection[2]][0];
    
    $samp4_image = $articlesInfo[$sampSelection[3]][2];
    $samp4_title = $articlesInfo[$sampSelection[3]][1];
    $samp4_href  = $articlesInfo[$sampSelection[3]][0];
    
    $samp5_image = $articlesInfo[$sampSelection[4]][2]; 
    $samp5_title = $articlesInfo[$sampSelection[4]][1]; 
    $samp5_href  = $articlesInfo[$sampSelection[4]][0]; 
    
    $samp6_image = $articlesInfo[$sampSelection[5]][2];
    $samp6_title = $articlesInfo[$sampSelection[5]][1];
    $samp6_href  = $articlesInfo[$sampSelection[5]][0];


?>
		<div id="testerDiv">
		<?php print_r($test) ?>

		articleContents is <br>
		<?php print_r($arrayTest)?>
		<br>
		samplerSelection is <br>
		<?php print_r($arrayTest2)?>
		<br><br><br><br><br><br><br>
		</div>
            <div class="sampler">
     			<div class="sample" id="samp1">
     				<a class="articleLink" href=<?php echo $samp1_href ?>>
	     				<img class="sampImage" id="samp1_image" src="../images/<?php echo $samp1_image ?>" alt="fashionmodel">
	     			</a>
	     				<div class="sampTitle" id="sampTitle_1">
	     					<p class="sampTitleP" id="sampTitleP_1"><?php echo $samp1_title ?></p>
	     				</div>
     			</div>
     			<div class="sample" id="samp2">
     				<a class="articleLink" href=<?php echo $samp2_href ?>>
	     				<img class="sampImage" id="samp2_image" src="../images/<?php echo $samp2_image ?>" alt="fashionmodel">
	     			</a>
	     				<div class="sampTitle" id="sampTitle_2">
	     					<p class="sampTitleP" id="sampTitleP_2"><?php echo $samp2_title ?></p>
	     				</div>
     			</div>
     			<div class="sample" id="samp3">
     				<a class="articleLink" href=<?php echo $samp3_href ?>>
	     				<img class="sampImage" id="samp3_image" src="../images/<?php echo $samp3_image ?>" alt="fashionmodel">
	     			</a>
	     				<div class="sampTitle" id="sampTitle_3">
	     					<p class="sampTitleP" id="sampTitleP_3"><?php echo $samp3_title ?></p>
	     				</div>
     			</div>
     			<div class="sample" id="samp4">
     				<a class="articleLink" href=<?php echo $samp4_href ?>>
	     				<img class="sampImage" id="samp4_image" src="../images/<?php echo $samp4_image ?>" alt="fashionmodel">
	     			</a>
	     				<div class="sampTitle" id="sampTitle_4">
	     					<p class="sampTitleP" id="sampTitleP_4"><?php echo $samp4_title ?></p>
	     				</div>
     			</div>
     			<div class="sample" id="samp5">
     				<a class="articleLink" href=<?php echo $samp5_href ?>>
	     				<img class="sampImage" id="samp5_image" src="../images/<?php echo $samp5_image ?>" alt="fashionmodel">
	     			</a>
	     				<div class="sampTitle" id="sampTitle_5">
	     					<p class="sampTitleP" id="sampTitleP_5"><?php echo $samp5_title ?></p>
	     				</div>
     			</div>
     			<div class="sample" id="samp6">
     				<a class="articleLink" href=<?php echo $samp6_href ?>>
	     				<img class="sampImage" id="samp5_image" src="../images/<?php echo $samp6_image ?>" alt="fashionmodel">
	     			</a>
	     				<div class="sampTitle" id="sampTitle_6">
	     					<p class="sampTitleP" id="sampTitleP_6"><?php echo $samp6_title ?></p>
	     				</div>
     			</div>
            </div>

