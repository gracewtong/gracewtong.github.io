<?php include('templates/header.php');  ?>

<body class="project-page animate-in">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img dark-header">
			<h1 class="title-underline">Javascript Plant Tutorials</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="images/project-plant-tutorials/javascript-tutorial-header-wide.png">
				<source media="(min-width: 650px)" 
						srcset="images/project-plant-tutorials/javascript-tutorial-header.png">
				<img src="images/project-plant-tutorials/javascript-tutorial-header-crop.png" alt="Header Image of Javascript Tutorials Project Page">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-plant-tuts">

		<section class="project-overview centered" id="overview">
			<h2>
				A series of experimentive Javascript tutorials revolving around the theme of growing <span class="no-break">a plant.</span> 
			</h2>
			<h3 class="tools">
				JAVASCRIPT | JQUERY | HTML | CSS | ILLUSTRATOR
			</h3>
			<p>This project consists of three different javascript tutorials with the aim of teaching beginner's Javascript and jQuery in a more enjoyable and visually interesting way. The tutorials are centered around the theme of growing plants, and code is provided below each example. Please note that the site is <span class="highlight">non-responsive</span>, as the focus of the project was on Javascript and JQuery.</p>

			<a href="https://gracetongdesign.com/projects/js-tutorials/" class="view-live">view live</a>
		</section>

		<section class="project-styles">
			<h2>Color Palette</h2>
			<div class="color-palette">				
				<div class="secondary-color color"><p>#4FC6B7</p></div>	
				<div class="main-color color"><p>#5b72d7</p></div>
				<div class="tertiary-color color"><p>#A7ACD9</p></div>	
				<div class="tertiary-color-2 color"><p>#E3B9BC</p></div>	
			</div>

			<!-- <h2>Style Tile</h2>
			<div class="style-tile">
				<img src="images/project-mason/styletile-mason-arch.png" alt="Mason Architects Style Tile">
			</div>	 -->			
		</section>		

		<section class="project-layouts">
			<h2>Layout + Design</h2>
			<div class="screenshot-container">
				<img src="dist/images/project-plant-tutorials/javascript-plants-mockup-browser-long.png" alt="Screenshots of the Plant Tutorial Site">
			</div>
		</section>
		
		<a href="https://gracetongdesign.com/#work" class="view-live view-more">view more projects</a>


	<!-- Scroll to Top -->
	<a href="javascript:" class="scroll-to-top" id="top" aria-hidden="true">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105 105"><title>arrow-top</title><g id="2571c954-cd39-4e0b-848f-7c609354301c" data-name="Layer 2"><g id="025c20be-3612-4f8d-9544-558bd6a12832" data-name="Layer 1"><circle cx="52.5" cy="52.5" r="51" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><polyline points="70.93 49.62 52.5 29.1 34.07 49.62" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.83" fill-rule="evenodd"/><line x1="52.4" y1="29.1" x2="52.4" y2="75.9" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.83"/></g></g></svg>
	</a>

	</main>

<?php include('templates/footer.php'); ?>