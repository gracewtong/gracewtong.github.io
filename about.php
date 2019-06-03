<?php include('templates/header.php');  ?>

<body class="about-page animate-in">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img dark-header about-header">
			<h1 class="title-underline">About Me</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="images/about-me-header-wide.svg">
				<source media="(min-width: 650px)" 
						srcset="images/about-me-header.svg">
				<img src="images/about-me-header-crop.svg" alt="Header Image of Javascript Tutorials Project Page">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-about">
		
		<section class="about-me centered">
			<h2>Hi there!</h2>
			<p>
				I'm Grace, a UI Designer from  Vancouver, B.C. I started off as a graphic designer and grew  interested in web development and the <span class="underline">design of digital products</span>.
			</p>
			<p>
				On the coding side of things, I enjoy experimenting with subtle CSS and Javascript animations. 
				<span class="underline">Efficiency</span> drives me to constantly look for better ways to do things, and I could not imagine life without keyboard shortcuts and productivity tools! I am always grateful that I discovered my passion for design and tech early on, and that I am able to <span class="underline">do what I love</span> as a profession. 
			</p>
			<p>
				When I am not working on web or design projects, I can be found creating illustrations, looking up the latest technologies, hanging out at coffee shops, and trying new restaurants. 
			</p>
			<br>

		</section>
		
		<a href="https://gracetongdesign.com" class="view-live">back to home</a>


<?php include('templates/footer.php'); ?>