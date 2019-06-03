<!-- header test -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grace Tong</title>
	<link rel="stylesheet" href="working-files/styles-test.css" type="text/css" media="all">
	<!-- <link rel="stylesheet" href="styles/styles.css" type="text/css" media="all"> -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500|Roboto+Mono:300,500" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico"/>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-93770255-2', 'auto');
	  ga('send', 'pageview');

	</script>
</head>




<body class="project-page animate-in">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header dark-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img">
		<h1 class="title-underline">Yaletown Dog Training</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="dist/images/project-yaletown-dog/yaletown-training-puppy-wide.jpg">
				<source media="(min-width: 650px)" 
						srcset="dist/images/project-yaletown-dog/yaletown-training-puppy.jpg">
				<img src="dist/images/project-yaletown-dog/yaletown-training-puppy-crop.jpg" alt="Image of Sleeping Shih Tzu Puppy">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-yaletown">

		<section class="project-overview centered" id="overview">
			<h2>
				A responsive, multi-page website for Yaletown Dog Training, a local Vancouver dog <span class="no-break">training service.</span> 
			</h2>
			<h3 class="tools">
				WORDPRESS | SASS | JQUERY | GITHUB | PHP | PHOTOSHOP
			</h3>
			<p>Yaletown Dog Training is a company started by Sarah Pennington, a local dog trainer, coach, and mentor. Our team consisted of 3 team members, and the scope of the project was to fully redesign her current website to a brighter, more modern design while updating the layout and functionality of all pages. The client wanted more flexibility to add content to her site, and as a result we went with WordPress. SASS was used to keep our code DRY and Github was used for version control.</p>

			<a href="http://yaletowndogtraining.com" class="view-live">view live</a>
			<!-- <a href="https://github.com/htpwebdesign/Yaletown" class="view-live git">view on github</a> -->
		</section>

		<section class="project-styles">
			<h2>Color Palette</h2>
			<div class="color-palette"> 
				<div class="tertiary-color color"><p>#F5F5F5</p></div>
				<div class="main-color color"><p>#404040</p></div>
				<div class="secondary-color color"><p>#BDCAE5</p></div>		
			</div>

			<h2>Style Tile</h2>
			<div class="style-tile">
				<img src="dist/images/project-yaletown-dog/styletile-yaletown-dog-2.png" alt="Yaletown Dog Training Style Tile">
			</div>	
		</section>

		<section class="site-planning">
			<h2>Information Architecture</h2>
			<div class="screenshot-container">
				<img src="images/project-yaletown-dog/yaletown-information-architecture.jpg" alt="Information Architecture for Yaletown Dog Training Site">
			</div>

			<h2>Wireframes</h2>
			<div>
				<img src="images/project-yaletown-dog/wireframes.svg" alt="Site Planning Wireframes for Yaletown Dog Training">
			</div>
		</section>		

		<section class="project-layouts">
			<h2>Layout + Design</h2>
			<div class="screenshot-container">
				<img src="dist/images/project-yaletown-dog/yaletown-dog-training-browsers.png" alt="Browser screenshots of Yaletown Dog Training website design">
			</div>
		</section>

		<section class="responsive-layouts">
			<h2>Mobile & Tablet</h2>
			<img src="dist/images/project-yaletown-dog/yaletown-dog-training-mobile-screens.jpg" alt="Tablet and Mobile View of the Website Design">
			
			<a href="https://gracetongdesign.com/#work" class="view-live view-more">view more projects</a>
		</section>


<?php include('templates/footer.php'); ?>
