<?php include('templates/header.php');  ?>

<body class="project-page animate-in">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img dark-header">
		<h1 class="title-underline">Machu Picchu</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="images/project-machu-picchu/machu-pichu-scenery-wide.jpg" alt="Scenic View of Machu Picchu, Peru">
				<source media="(min-width: 650px)" 
						srcset="images/project-machu-picchu/machu-pichu-scenery.jpg" alt="Scenic View of Machu Picchu, Peru">	
				<img src="images/project-machu-picchu/machu-pichu-scenery-crop.jpg" alt="Scenic View of Machu Picchu, Peru">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-mp">

		<section class="project-overview centered" id="overview">
			<h2>
				A one-page scrolling travel website that experiments with various parallax techniques <span class="no-break">and animations.</span> 
			</h2>
			<h3 class="tools">
				HTML | CSS | JQUERY | PHOTOSHOP
			</h3>
			<p>For this project, the goal was to create a single page scrolling website with a form. I experimented with skrollr, a javascript scrolling library, as well as css animations. The website is <span class="highlight">non-responsive</span> and is unavailable for viewing on mobile devices, as the goal of the project was to experiment with parallax effects and CSS animations.</p>

			<a href="https://gracetongdesign.com/projects/machu-picchu/" class="view-live">view live</a>
		</section>

		<section class="project-styles">
			<h2>Color Palette</h2>
			<div class="color-palette">	
				<div class="tertiary-color-2 color"><p>#000000</p></div>
				<div class="tertiary-color color"><p>#2A3D17</p></div>	
				<div class="main-color color"><p>#494949</p></div>				
				<div class="secondary-color color"><p>#FFFFF</p></div>
					
			</div>

			<!-- <h2>Style Tile</h2>
			<div class="style-tile">
				<img src="images/project-mason/styletile-mason-arch.png" alt="Mason Architects Style Tile">
			</div>	 -->
		</section>		

		<section class="project-layouts">
			<h2>Layout + Design</h2>
			<div class="screenshot-container">
				<img src="images/project-machu-picchu/machu-picchu-browser-previews.png" alt="Various screenshots of Machu Picchu site">
			</div>
		</section>	
		<a href="https://gracetongdesign.com/#work" class="view-live view-more">view more projects</a>	

	<!-- Scroll to Top -->
	<a href="javascript:" class="scroll-to-top" id="top" aria-hidden="true">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105 105"><title>arrow-top</title><g id="2571c954-cd39-4e0b-848f-7c609354301c" data-name="Layer 2"><g id="025c20be-3612-4f8d-9544-558bd6a12832" data-name="Layer 1"><circle cx="52.5" cy="52.5" r="51" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><polyline points="70.93 49.62 52.5 29.1 34.07 49.62" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.83" fill-rule="evenodd"/><line x1="52.4" y1="29.1" x2="52.4" y2="75.9" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.83"/></g></g></svg>
	</a>

	</main>

<?php include('templates/footer.php'); ?>