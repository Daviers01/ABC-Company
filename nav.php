<!-- Navigation -->

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href=".">
				<h1 style="color: #1c3965; font-weight: bold; text-transform: initial;">ABC Company</h1>
			</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="navbar-nav">
				<li class="<?php echo ($page == "solution" ? "nav-item active" : "nav-item")?>">
					<a class="nav-link" href="solutions.php"><span data-letters="Solutions">Solutions</span></a>
				</li>
				<li class="<?php echo ($page == "brand" ? "nav-item active" : "nav-item")?>">
					<a class="nav-link" href="our-brand.php"><span data-letters="Our Brand">Our Brand</span></a>
				</li>
				<li class="<?php echo ($page == "who-we-are" ? "nav-item active" : "nav-item")?>">
					<a class="nav-link" href="who-we-are.php"><span data-letters="Who We Are">Who We Are</span></a>
				</li>
				<li class="<?php echo ($page == "contact" ? "nav-item active" : "nav-item")?>">
					<a class="nav-link" href="contact.php"><span data-letters="Contact Us">Contact Us</span></a>
				</li>
			</ul>
		</div>
	</div>
</nav>