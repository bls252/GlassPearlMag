<!DOCTYPE html>
<head>
	<title>GP - <?php echo $pageTitle ?></title>
	<link rel="stylesheet" href="styling/article.css"> <!-- location change -->
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"> <!-- location change -->
	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans|Quicksand:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- js functions require Ajax -->
    <script type="text/javascript" src="javascript/article.js"></script> <!-- location change -->
	<body>

		<?php include 'includes/header.php';?>

		<div id="title_photo_wrapper">

			<img id="title_photo" src="images/<?php echo $heroImage ?>" alt="Hero Image Not Found">
		</div>
		
		<div id="content">

			<div id="main_article">

				<h3 id="photo_credit"> Photography via <?php echo $photoCredit ?></h3>

				<hr id="decorative_line">

		        <h1 class="articleHeadline" style="font-family: 'Playfair Display', serif; font-size: 2.3em"><?php echo $articleTitle ?></h1>

		        <p class="article-subline" style="font-family: 'Lato', sans-serif; font-size: 1.7em;"><?php echo $articleSubline ?></p>

		        <p class="article-text" style="font-family: 'Lato', sans-serif; font-size: 1.3em; line-height: 200%;"><?php echo $articleText ?></p>
            </div>
        </div>
<?php include 'includes/sampler.php';?><!-- location change -->
	</body>
<!-- 	<?php include 'includes/footer.php';?> --> <!-- location change -->
 </html>