<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to jQuery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
	<div class="nav-inner">
	    <div class="left">
		<div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class="logo"></div>
		<div class="name">CodeWithArhan</div>
	    </div>
	    <div class="right">
		<a href="index.php">Home</a>
		<a href="about.php">About</a>
		<a href="blog.php">Blog</a>
		<a href="courses.php">Courses</a>
		<a href="tutorials.php">Tutorials</a>
		<a href="contact.php">Contact</a>
	    </div>
	</div>
    </nav>
    <main>
	<section class="hero">
	    <div class="header-container">
		<h1>Building Responsive Layouts with Bootstrap</h1>
	    </div>
	</section>
	<section class="tutorial-content">
	    <div class="content-container">
		<h2>Introduction to Responsive Layouts</h2>
		<p>Responsive web design ensures that your website looks great and functions well on all devices, from large desktop monitors to small smartphones. Bootstrap simplifies the process of creating responsive layouts by providing a grid system and predefined CSS classes.</p>

		<h2>Bootstrap Grid System</h2>
		<p>Bootstrap uses a 12-column grid system to layout content. Columns can be resized and rearranged based on screen size using responsive breakpoints (extra small, small, medium, large, and extra large).</p>
		<pre><code class="language-html">
			&lt;div class="container"&gt;
			    &lt;div class="row"&gt;
				&lt;div class="col-sm-6 col-md-4"&gt;
				    &lt;p&gt;Column 1&lt;/p&gt;
				&lt;/div&gt;
				&lt;div class="col-sm-6 col-md-4"&gt;
				    &lt;p&gt;Column 2&lt;/p&gt;
				&lt;/div&gt;
				&lt;div class="col-sm-6 col-md-4"&gt;
				    &lt;p&gt;Column 3&lt;/p&gt;
				&lt;/div&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
		</code></pre>

		<h2>Responsive Utilities</h2>
		<p>Bootstrap provides responsive utility classes to control visibility, spacing, and alignment based on screen size.</p>
		<pre><code class="html">
			&lt;div class="d-none d-lg-block"&gt;
			    &lt;p&gt;Visible on large screens only&lt;/p&gt;
			&lt;/div&gt;
		</code></pre>

		<h2>Conclusion</h2>
		<p>Bootstrap makes it easier to create responsive layouts by providing a flexible grid system and responsive utility classes. Start using Bootstrap today to build responsive websites that look great on any device!</p>
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
</body>
</html>
