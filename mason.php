<?php include('templates/header.php');  ?>

<body class="project-page animate-in">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img">
		<h1 class="title-underline">Mason Architects</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="dist/images/project-mason/white-minimalist-concrete-architecture-wide.jpg">
				<source media="(min-width: 650px)" 
						srcset="dist/images/project-mason/white-minimalist-concrete-architecture.jpg">	
				<img src="dist/images/project-mason/white-minimalist-concrete-architecture-crop.jpg" alt="Image of White Industrial Building Design">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-mason">

		<section class="project-overview centered" id="overview">
			<h2>
				A responsive, one-page scrolling website for Mason Architects, a fictious <span class="no-break">architecture studio.</span> 
			</h2>
			<h3 class="tools">
				HTML | CSS | JQUERY | PHOTOSHOP
			</h3>
			<p>To reflect the studio's clean and modern architectural style, the website design is layed out in a way that emphasizes whitespace and minimalist elements. The color palette was selected to give a simple and calm ambience to the site, which is further reflected in the imagery used. Close attention was paid to ensure that the site displays well across multiple screen sizes, and flex was used in the footer for responsive reflowing.</p>

			<a href="https://gracetongdesign.com/projects/mason-architects/" class="view-live">view live</a>
		</section>

		<section class="project-styles">
			<h2>Color Palette</h2>
			<div class="color-palette">
				<div class="tertiary-color color"><p>#B6C6D6</p></div>
				<div class="main-color color"><p>#000000</p></div>
				<div class="secondary-color color"><p>#FFFFF</p></div>		
			</div>

			<h2>Style Tile</h2>
			<div class="style-tile">
				<img src="dist/images/project-mason/styletile-mason-arch.png" alt="Mason Architects Style Tile">
			</div>	
		</section>		

		<section class="project-layouts">
			<h2>Layout + Design</h2>
			<div class="screenshot-container">
				<img class="white-bg-shadow" src="dist/images/project-mason/full-screenshot-mason-architects.png" alt="Fullpage screenshot of Mason Architects website design">
			</div>
		</section>

		<section class="responsive-layouts">
			<h2>Mobile & Tablet</h2>
			<img src="dist/images/project-mason/tablet-iphone-mockup.png" alt="Tablet and Mobile View of the Website Design">
			<img src="dist/images/project-mason/responsive-mockups.png" alt="Image of responsive website on multiple screen sizes">

			<a href="https://gracetongdesign.com/#work" class="view-live view-more">view more projects</a>
		</section>

	</main>

<?php include('templates/footer.php'); ?>