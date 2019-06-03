<?php include('templates/header.php');  ?>

<body class="project-page animate-in">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header dark-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img">
		<h1 class="title-underline">Portfolio Site</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="images/project-portfolio/portfolio-project-header-wide.svg">
				<source media="(min-width: 650px)" 
						srcset="images/project-portfolio/portfolio-project-header.svg">
				<img src="images/project-portfolio/portfolio-project-header-crop.svg" alt="">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-portfolio-project">

		<section class="project-overview centered" id="overview">
			<h2>
				A responsive portfolio website for my web design and<span class="no-break"> development work.</span> 
			</h2>
			<h3 class="tools">
				HTML | SASS | JQUERY | PHP | GITHUB | ILLUSTRATOR | GULP
			</h3>
			<p>For my portfolio website, I wanted to reflect my personal design style while presenting my work in a clear, logical manner. I designed the site <span class="underline">mobile first</span> and gradually added style and functionality to larger screens. <span class="underline">Gulp</span> was used to automate tasks such as adding prefixes and minifying files. You can check out the code for this website on my github (linked below).</p>

			<a href="https://github.com/gracegracetong/Portfolio-Site" class="view-live git">view on github</a>
		</section>

		<section class="project-styles">
			<h2>Color Palette</h2>
			<div class="color-palette"> 	
				<div class="tertiary-color-2 color"><p>#533AE9</p></div>	
				<div class="main-color color"><p>#92FFE5</p></div>
				<div class="secondary-color color"><p>#7B68EE</p></div>	
				<div class="tertiary-color color"><p>#292929</p></div>	
			</div>

			<h2>Style Tile</h2>
			<div class="style-tile">
				<img src="images/project-portfolio/styletile-portfolio.png" alt="Portfolio Project Style Tile">
			</div>	
		</section>		

		<section class="responsive-layouts">
			<h2>Mobile & Tablet</h2>
			<img src="images/project-portfolio/portfolio-responsive-devices-2.jpg" alt="Tablet and Mobile View of the Website Design">
			
			<a href="https://gracetongdesign.com/#work" class="view-live view-more">view more projects</a>
		</section>


<?php include('templates/footer.php'); ?>
