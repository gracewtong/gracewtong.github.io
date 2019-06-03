<?php include('templates/header.php');  ?>

<body class="project-page animate-in">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img dark-header">
			<h1 class="title-underline">Compass Redesign: Mobile Reloading</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="images/project-compass-ux/compass-header-wide.svg">
				<source media="(min-width: 650px)" 
						srcset="images/project-compass-ux/compass-header.svg">
				<img src="images/project-compass-ux/compass-header-crop.svg" alt="Header Image of Compass Mobile Reloading UX Redesign Project Page">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-compass-ux">

		<section class="project-overview centered" id="overview">
			<h2>
				A proposed redesign of the Compass Card mobile reloading process through the implementation of standard UX design techniques.
			</h2>
			<h3 class="tools">
				HTML | CSS | ILLUSTRATOR | UX DESIGN 
			</h3>
			<p>The goal of this UX design project was to <span class="highlight">redesign the Compass card mobile reloading </span>function. The first phase of the project (completed in a team) was to develop the content strategy through the use of UX design techniques such as personas, user stories, empathy maps, interviews, competitive & gap analysis, user testing clickable prototypes, user journey mapping, information architecture, and content audit. The second phase of this UX design project (completed individually) was to create wireframes, a style guide, a style tile, and a functioning HTML prototype while taking into account the research and content strategy developed in phase 1.</p>

			<a href="https://gracetongdesign.com/projects/compass-prototype/pitch-document.pdf" class="view-live">view pitch document</a>

			<a href="https://gracetongdesign.com/projects/compass-style-guide/" class="view-live">view style guide</a>								
		</section>

		<section class="project-content-strategy">
			<h2>Information Architecture</h2>
			<div class="information-architecture">
				<img src="images/project-compass-ux/compass-information-architecture.svg" alt="Compass Card Website Information Architecture">
			</div>	
		</section>

		<section class="project-styles">
			<h2>Style Tile</h2>
			<div class="style-tile">
				<img src="images/project-compass-ux/compass-style-tile.svg" alt="Compass Card Mobile Reloading Style Tile">
			</div>						
		</section>		

<!-- 		<section class="project-layouts">
			<h2>Layout + Design</h2>
			<div class="screenshot-container">
				<img src="" alt="">
			</div>
		</section> -->

		<a href="https://gracetongdesign.com/projects/compass-prototype" class="view-live">view prototype (best on mobile)</a>		
		
		<a href="https://gracetongdesign.com/#work" class="view-live">view more projects</a>


	<!-- Scroll to Top -->
	<a href="javascript:" class="scroll-to-top" id="top" aria-hidden="true">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105 105"><title>arrow-top</title><g id="2571c954-cd39-4e0b-848f-7c609354301c" data-name="Layer 2"><g id="025c20be-3612-4f8d-9544-558bd6a12832" data-name="Layer 1"><circle cx="52.5" cy="52.5" r="51" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><polyline points="70.93 49.62 52.5 29.1 34.07 49.62" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.83" fill-rule="evenodd"/><line x1="52.4" y1="29.1" x2="52.4" y2="75.9" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.83"/></g></g></svg>
	</a>

	</main>

<?php include('templates/footer.php'); ?>