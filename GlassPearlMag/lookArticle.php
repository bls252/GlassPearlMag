
<?php
	
	$currentArticleID = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
	
	$delimiter = '|'; 
    //Get the contents of the text file as an array
	$data = file("articles/articleData.txt");

	$currentLine = $data[$currentArticleID];

	$lineData = explode($delimiter, $currentLine);



	$pageTitle = $lineData[1];
	$heroImage = $lineData[2];
	$photoCredit = $lineData[3];
	$articleTitle = $lineData[4];
	$articleSubline = $lineData[5];

	$file_handle = fopen("articles/articleBodies/".$lineData[6], "r");
	$articleText = fread($file_handle,filesize("articles/articleBodies/".$lineData[6]));
	fclose($file_handle);


?>



<?php include 'includes/articleHTML.php';?>
