<!--Refer to content strategy here: https://bootcamp-coders.cnm.edu/~escott15/portfolio-website/public_html/documentation/milestone-2.php-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- FontAwesome -->
<!--		I didn't love the look of the icons on the form, commenting out as of 1/22-->
<!--		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

<!-- JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>Erin Scott's Portfolio</title>
	</head>

	<body>
		<header>
<!--Nav bar-->
			<nav class="navbar navbar-expand-md navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#testimonials">Testimonials</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

<!--Hero image and welcome message-->
		<section>
			<div class="container-fluid backgroundimg" >
				<div class="row-fluid">
					<div class="column">
						<div class="container pt-5">
							<h1 class="display-3 text-center">Erin Scott</h1>
							<p class="lead text-center">Web Development, Marketing, and Project Management</p>
						</div>
					</div>
				</div>
			</div>
		</section>

<!--About section-->
		<section>
			<div class="container" id="about">
				<div class="row mt-5">
					<div class="column mt-5 col-md-4">
						<h2>About Erin</h2>
						<img class="img-fluid rounded-circle" src="images/erin-scott-headshot-cropped.png" alt="Erin Scott headshot" height="auto" width="250em">
					</div>
					<div class="column mt-5 col 2">
						<p>Erin helps clients craft stellar online presences for their businesses. She brings a strategic approach to web development, marketing, and project management, and excels as a liaison between technical teams & clients. Erin is a 6th generation New Mexican and is passionate about economic development in the Land of Enchantment. She has also spent significant time in Latin America and is an avid Spanish language lover. Connect with her on <a href="https://www.linkedin.com/in/erinscottabq/" target="_blank">LinkedIn</a> or on <a href="https://twitter.com/dot_of_scott/" target="_blank">Twitter.</a></p>
					</div>
				</div>
			</div>
		</section>

<!--Testimonials section-->
		<section>
			<div class="container" id="testimonials">
				<div class="row">
					<div class="column mt-5">
						<h2>Testimonials</h2>
						<p>Nunc elementum, metus eu pretium fermentum, massa erat tincidunt ex, eget accumsan eros magna et justo. Etiam sit amet gravida velit, at condimentum libero. Donec venenatis congue arcu a convallis. Cras scelerisque enim et velit semper, quis interdum orci iaculis. Nunc sollicitudin lacinia diam et rhoncus. Phasellus consectetur nisi lectus, eget pulvinar nisl tempor in. Nam finibus tincidunt libero, vitae dictum eros aliquet sit amet. Vivamus venenatis metus quis quam iaculis egestas. Maecenas cursus quam felis, a commodo eros sollicitudin et. Donec eget felis lobortis, posuere mi sit amet, tempus arcu. Proin fringilla vulputate sem eu lobortis. Donec sit amet dui at elit hendrerit iaculis sit amet vel turpis.</p>
					</div>
				</div>
			</div>
		</section>

<!--Portfolio section-->
		<section>
			<div class="container" id="portfolio">
				<h2>Portfolio</h2>
				<p>Explore examples of Erin's past work below:</p>
				<div class="row">
					<div class="column">
						<div class="row m-3">
							<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
								<img class="card-img-top" src="images/bowtie-kitty.png" alt="Portfolio Example 1">
								<div class="card-body">
									<h5 class="card-title text-center">ABQ Street Art Web App</h5>
									<p class="card-text">Mobile-first web app built with the Google API as a team capstone project during the Deep Dive Coding Bootcamp.</p>
									<a href="#" class="btn btn-primary btn-light">View Project</a>
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="row m-3">
							<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
								<img class="card-img-top" src="images/bowtie-kitty.png" alt="Portfolio Example 1">
								<div class="card-body">
									<h5 class="card-title text-center">Project #2</h5>
									<p class="card-text">Mobile-first web app built with the Google API as a team capstone project during the Deep Dive Coding Bootcamp.</p>
									<a href="#" class="btn btn-primary btn-light">View Project</a>
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="row m-3">
							<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
								<img class="card-img-top" src="images/bowtie-kitty.png" alt="Portfolio Example 1">
								<div class="card-body">
									<h5 class="card-title text-center">Project #3</h5>
									<p class="card-text">Mobile-first web app built with the Google API as a team capstone project during the Deep Dive Coding Bootcamp.</p>
									<a href="#" class="btn btn-primary btn-light">View Project</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!--Contact form section-->
		<section>
			<div class="container" id="contact-section">
				<div class="row">
					<div class="column mt-5 mb-5 pb-5 col-12">
						<h2>Contact</h2>
						<form id="contact-form" action="php/mailer.php" method="post" class="form-horizontal well">
							<div class="form-group">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="contactFormName" name="contactFormName" placeholder="Your name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email address</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="contactFormEmail" name="contactFormEmail" placeholder="Your email address">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="contactFormSubject" name="contactFormSubject" placeholder="Email subject line">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment" aria-hidden="true"></i>
									</div>
									<textarea class="form-control" rows="5" id="contactFormMessage" name="contactFormMessage" placeholder="Message for Erin"></textarea>
								</div>
							</div>
<!--Google reCAPTCHA-->
							<div class="g-recaptcha" data-sitekey="6Lc19kcUAAAAAP5R_SiEzd-L2ir3Fjq11JQkk3ko"></div>
							<br>
<!--Submit button-->
							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						</form>
						<div id="output-area"></div>
					</div>
				</div>
			</div>
		</section>

<!--Bootstrap sticky footer-->
		<footer>
			<div class="container-fluid">
				<div class="sticky-footer">
					<p class="text-center text-white bg-dark p-4 m-0 fixed-bottom">Erin Scott ©2018</p>
					<!--<a href="https://www.w3schools.com/" target="_blank">Visit W3Schools!</a>-->
				</div>
			</div>
		</footer>

	</body>
</html>
