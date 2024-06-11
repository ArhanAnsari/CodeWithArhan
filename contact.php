<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - CodeWithArhan</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.emailjs.com/dist/email.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	(function() {
	    emailjs.init("7i7_YEAdQWQzN_UBZ");
	})();
    </script>
</head>
<body>
    <nav>
	<div class="nav-inner">
	    <div class="left">
		<div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class="logo"></div>
		<div class="name">CodeWithArhan</div>
	    </div>
	    <div class="right">
		<a href="/index.php">Home</a>
		<a href="/about.php">About</a>
		<a href="/blog.php">Blog</a>
		<a href="/courses.php">Courses</a>
		<a href="/tutorials.php">Tutorials</a>
		<a href="/contact.php">Contact</a>
	    </div>
	</div>
    </nav>
    <main>
	<section class="hero">
	    <div class="header-container">
		<h1>Contact Us</h1>
	    </div>
	</section>
	<section class="contact-form-section">
	    <div class="form-container">
		<h2>Get in Touch</h2>
		<form id="contact-form">
		    <label for="name">Name</label>
		    <input type="text" id="name" name="name" required>

		    <label for="email">Email</label>
		    <input type="email" id="email" name="email" required>

		    <label for="message">Message</label>
		    <textarea id="message" name="message" rows="6" required></textarea>

		    <button type="submit" class="cta">Send</button>
		</form>
	    </div>
	</section>
    </main>
    <footer>
	<div class="inner">
	    <div class="column">
		<div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class="logo"></div>
		<div class="name">CodeWithArhan</div>
	    </div>
	    <div class="column">
	  <p>Handy links</p>
	  <a href="/index.php">Home</a>

	  <a href="/blog.php">Blog</a>

	  <a href="/courses.php">Courses</a>

	  <a href="/about.php">About</a>

	  <a href="/tutorials.php">Tutorials</a>

	  <a href="/about.php">About</a>

	  <p>&copy; <?php echo date("Y"); ?> CodeWithArhan. All rights reserved.</p>

	</div>
	</div>
    </footer>
    <script type="text/javascript">
	document.getElementById('contact-form').addEventListener('submit', function(event) {
	    event.preventDefault();

	    emailjs.sendForm('service_oxjis4c', 'template_ho0bwum', this)
		.then(function() {
		    alert('Your message has been sent successfully!');
		}, function(error) {
		    alert('Failed to send your message. Please try again later.');
		});
	});
    </script>
</body>
</html>