
<?php
    
    // figure out how many lines are in the articleData.txt file as $articlesQuant

    // choose six random numbers between 1 and $articlesQuant, store them as $rand1, $rand2, $rand3, $rand4, $rand5, $rand6

    $delimiter = '|'; 

    //Get the contents of the text file as an array
    $data = file("articles/articleData.txt");

    // Sample 1

    $samp1DataLine = $data[$rand1];
    $samp1Data = explode($delimiter, $samp1DataLine);

    $samp1_image = $samp1Data[2]; // not defined
    $samp1_title = $samp1Data[1];// not defined
    $samp1_href  = "lookArticle.php?id=".$rand1

    // Sample 2
    
    $samp2DataLine = $data[$rand2];
    $samp2Data = explode($delimiter, $samp2DataLine);

    $samp2_image = $samp2Data[2]; // not defined
    $samp2_title = $samp2Data[1];// not defined
    $samp2_href  = "lookArticle.php?id=".$rand2
    
    // Sample 3
    
    $samp3DataLine = $data[$rand3];
    $samp3Data = explode($delimiter, $samp3DataLine);

    $samp3_image = $samp3Data[2]; // not defined
    $samp3_title = $samp3Data[1];// not defined
    $samp3_href  = "lookArticle.php?id=".$rand3


    // Sample 4
    
    $samp4DataLine = $data[$rand4];
    $samp4Data = explode($delimiter, $samp4DataLine);

    $samp4_image = $samp4Data[2]; // not defined
    $samp4_title = $samp4Data[1];// not defined
    $samp4_href  = "lookArticle.php?id=".$rand4
    

    // Sample 5
    
    $samp5DataLine = $data[$rand4];
    $samp5Data = explode($delimiter, $samp4DataLine);

    $samp5_image = $samp5Data[2]; // not defined
    $samp5_title = $samp5Data[1];// not defined
    $samp5_href  = "lookArticle.php?id=".$rand5
    
    // Sample 6
    
    $samp6DataLine = $data[$rand4];
    $samp6Data = explode($delimiter, $samp4DataLine);

    $samp6_image = $samp6Data[2]; // not defined
    $samp6_title = $samp6Data[1];// not defined
    $samp6_href  = "lookArticle.php?id=".$rand6

?>
		<div id="testerDiv">
		
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

