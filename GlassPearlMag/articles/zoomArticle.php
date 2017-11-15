
<!-- This website can automatically format articles to html: https://wordtohtml.net/
 -->
<!-- This is how you do an apostrophe inside qoutes: &#8217;
 -->
<!-- Based off the article page at this URL:http://fashionmagazine.com/culture/the-national-ballet-of-canada-a-streetcar-named-desire/
 -->
<!-- Define details of the article -->
<?php
	
	$currentArticleID = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

	echo "This is a print statement";

	$delimiter = '|'; 

    //Get the contents of the text file as an array
	$data = file("articleData.txt");
	
    //Use for each to loop through each line of clothing data
	foreach ($data as $dataLine){
		
	$separatedData = explode($delimiter, $dataLine);
		}


	$articleID = ''; 
	$pageTitle = '';
	$heroImage = '';
	$photoCredit = '';
	$articleTitle = '';
	$articleSubline = '';
	$articleText = '';
?>

<p><?php echo "the current article ID is ".$currentArticleID." " ?></p>



<?php include '../includes/articleHTML.php';?>

