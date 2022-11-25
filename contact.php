<?php $page = "contact";?>
<?php include 'header.php';?>
<?php include 'nav.php';?>

<header class="masthead contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-5 col-lg-4">
				<div class="header-content">
					<h1>Contact Us</h1>
					<div class="hr-style left-color">
						<div class="blue"></div>
					</div>
					<p>Need support with your IT decisions?  <br> We would love to know how we can help. 
					</p>
					<div class="contact-form">
						<form id="contact-form" method="post" role="form">
							<div class="form-group">
								<div class="input-group">
									<input id="cname1" name="cname1" type="text" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<input id="cemail" name="cemail" type="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<textarea id="cmsg" name="cmsg" class="form-control" rows="5" placeholder="Message"></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<?php include 'footer.php';?>